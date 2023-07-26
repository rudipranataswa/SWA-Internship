<?php
class zlib {
 
  function is_valid_email($email) {
    // First, check that the email is not empty
    if (empty($email)) {
        return false;
    }

    // Next, use PHP's built-in filter_var function to validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    // Finally, check that the domain part of the email has at least one "." and two or more characters after the last "."
    $parts = explode('@', $email);
    $domain = end($parts);
    if (strpos($domain, '.') === false || strlen(substr($domain, strpos($domain, '.') + 1)) < 2) {
        return false;
    }

    return true;
	}
}
?>