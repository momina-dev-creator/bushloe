<?php
// Main entry point and front controller for Bushloe Healthcare Centre

// Determine which page to load
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Whitelist of allowed pages to prevent directory traversal
$allowed_pages = ['home', 'rooms', 'circumcision', 'facilities', 'contact'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Build file path
$page_file = __DIR__ . '/pages/' . $page . '.php';

// Include the header template
include __DIR__ . '/header.php';

// Include the page content
if (file_exists($page_file)) {
    include $page_file;
} else {
    echo '<div class="container mx-auto px-4 py-20 text-center"><h1 class="text-4xl font-bold text-red-600">404 - Page Not Found</h1><p class="mt-4 text-gray-600">The requested page does not exist.</p></div>';
}

// Include the footer template
include __DIR__ . '/footer.php';
?>
