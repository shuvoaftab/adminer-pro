<?php
function calculateSha256($filename) {
    return hash_file('sha256', $filename);
}

$filename = './custom/sha256/hello.txt';
echo 'The SHA256 hash of ' . $filename . ' is ' . calculateSha256($filename);
?>
