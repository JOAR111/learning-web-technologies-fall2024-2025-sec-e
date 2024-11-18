<?php
    if (isset($_POST['submit_email'])) {
        $email = trim($_POST['email']);
        $error = '';

        if (empty($email)) {
            $error = "Email cannot be empty.";
        } elseif (!strpos($email, '@') || !strpos($email, '.')) {
            $error = "Invalid email format.";
        } else {
            $parts = explode('@', $email);
            if (count($parts) !== 2 || empty($parts[0]) || empty($parts[1]) || !strpos($parts[1], '.')) {
                $error = "Invalid email format.";
            }
        }

        echo $error ? $error : "Valid email!";
    }
    ?>