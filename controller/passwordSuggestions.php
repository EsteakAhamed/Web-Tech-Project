<?php
// Generate random strong passwords for suggestion
function generatePassword($length = 10) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
    return substr(str_shuffle($chars), 0, $length);
}

// Generate 5 suggestions
$suggestions = [];
for ($i = 0; $i < 5; $i++) {
    $suggestions[] = generatePassword(10);
}

// Return JSON
header('Content-Type: application/json');
echo json_encode($suggestions);
?>
