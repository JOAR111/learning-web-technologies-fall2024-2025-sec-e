<?php
    if (isset($_POST['submit_interests'])) {
        if (!isset($_POST['interests']) || count($_POST['interests']) < 2) {
            echo "<p style='color: red;'>Please select at least two interests.</p>";
        } else {
            echo "<p style='color: green;'>You selected: " . implode(', ', $_POST['interests']) . "</p>";
        }
    }
    ?>