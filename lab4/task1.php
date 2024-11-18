<?php
if (isset($_POST['submit_name'])) {
    $name = trim($_POST['name']);
    $error = '';

    if (empty($name)) {
        $error = "Name cannot be empty.";
    } elseif (str_word_count($name) < 2) {
        $error = "Name must contain at least two words.";
    } elseif (!ctype_alpha($name[0])) {
        $error = "Name must start with a letter.";
    } else {
        for ($i = 0; $i < strlen($name); $i++) {
            if (!ctype_alpha($name[$i]) && $name[$i] !== '.' && $name[$i] !== '-' && $name[$i] !== ' ') {
                $error = "Name can contain only letters, periods, and dashes.";
                break;
            }
        }
    }

    echo $error ? $error : "Valid name!";
}
?>
