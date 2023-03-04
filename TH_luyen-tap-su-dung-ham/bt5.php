<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^A-Za-z0-9]', '', $str));
}
echo isPalindrome("Racecar");
echo isPalindrome("Hello")
?>