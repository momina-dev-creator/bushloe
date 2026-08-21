<?php
// api/submit.php - Handles form submissions for Bushloe Healthcare Centre on Vercel

// Enable session to show message on page redirect
session_start();

$errors = [];
$success = false;

// Process POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_type = isset($_POST['form_type']) ? trim($_POST['form_type']) : '';
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $profession = isset($_POST['profession']) ? trim($_POST['profession']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Viewing specific fields
    $viewing_date = isset($_POST['viewing_date']) ? trim($_POST['viewing_date']) : '';
    $viewing_time = isset($_POST['viewing_time']) ? trim($_POST['viewing_time']) : '';

    // Validation
    if (empty($name)) {
        $errors[] = 'Full name is required.';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email address is required.';
    }
    if (empty($phone)) {
        $errors[] = 'Telephone number is required.';
    }

    if (empty($errors)) {
        // Construct email body
        $subject = ($form_type === 'viewing') ? 'Viewing Booking Request - Bushloe' : 'Room Enquiry - Bushloe';
        $to = 'musamedics@gmail.com'; // Admin Email from context
        
        $email_content = "Form Type: " . ucfirst($form_type) . "\n";
        $email_content .= "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        if ($profession) {
            $email_content .= "Healthcare Profession: $profession\n";
        }
        if ($form_type === 'viewing') {
            $email_content .= "Preferred Date: $viewing_date\n";
            $email_content .= "Preferred Time: $viewing_time\n";
        }
        $email_content .= "Message:\n$message\n";

        // Headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // In serverless environments, logs directory may be read-only, but we write to /tmp or try writing locally with suppression
        $log_dir = dirname(__DIR__) . '/logs';
        if (!is_dir($log_dir)) {
            @mkdir($log_dir, 0777, true);
        }
        $log_file = $log_dir . '/submissions.log';
        $log_entry = "[" . date('Y-m-d H:i:s') . "] " . str_replace("\n", " | ", $email_content) . "\n";
        @file_put_contents($log_file, $log_entry, FILE_APPEND);

        // Try sending email
        @mail($to, $subject, $email_content, $headers);
        $success = true;
    }
}

// If AJAX submission, return JSON
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    header('Content-Type: application/json');
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Thank you for your enquiry. We will contact you shortly.']);
    } else {
        echo json_encode(['success' => false, 'errors' => $errors]);
    }
    exit;
}

// Fallback HTML response if submitted normally
$page = 'contact';
include dirname(__DIR__) . '/header.php';
?>

<div class="container mx-auto px-4 py-16 max-w-lg">
    <?php if ($success): ?>
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 p-8 rounded-lg text-center shadow-sm">
            <div class="text-4xl mb-4">✅</div>
            <h1 class="text-2xl font-bold font-display text-brand-500 mb-2">Submission Successful!</h1>
            <p class="mb-6 text-sm text-slate-600">Thank you for your interest. We have received your request and a representative will call or write to you shortly.</p>
            <a href="index.php?page=home" class="inline-block bg-brand-500 hover:bg-brand-600 text-white font-semibold px-6 py-2 rounded text-sm transition">Back to Home</a>
        </div>
    <?php else: ?>
        <div class="bg-rose-50 border border-rose-200 text-rose-800 p-8 rounded-lg shadow-sm">
            <div class="text-4xl mb-4 text-center">❌</div>
            <h1 class="text-2xl font-bold font-display text-rose-700 mb-4 text-center">Submission Failed</h1>
            <ul class="list-disc pl-5 mb-6 text-sm text-rose-600 space-y-1">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="javascript:history.back()" class="block text-center bg-rose-600 hover:bg-rose-700 text-white font-semibold px-6 py-2 rounded text-sm transition">Go Back</a>
        </div>
    <?php endif; ?>
</div>

<?php
include dirname(__DIR__) . '/footer.php';
?>
