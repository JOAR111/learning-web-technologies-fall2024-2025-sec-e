<?php
    if (isset($_POST['submit_date'])) {
        $date = trim($_POST['date']);
        $error = '';

        if (empty($date)) {
            $error = "Date cannot be empty.";
        } else {
            $parts = explode('/', $date);
            if (count($parts) !== 3 || !is_numeric($parts[0]) || !is_numeric($parts[1]) || !is_numeric($parts[2])) {
                $error = "Invalid date format.";
            } else {
                list($dd, $mm, $yyyy) = $parts;
                if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1953 || $yyyy > 1998) {
                    $error = "Date must be valid (dd: 1-31, mm: 1-12, yyyy: 1953-1998).";
                }
            }
        }

        echo $error ? "<p style='color: red;'>$error</p>" : "<p style='color: green;'>Valid date!</p>";
    }
    ?>