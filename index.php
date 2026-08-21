<?php
// Root index.php - forwards requests to api/index.php to support both local Apache/XAMPP and Vercel.
include __DIR__ . '/api/index.php';
?>
