<?php
    if (isset($_POST['submit_service'])) {
        if (!isset($_POST['service'])) {
            echo "<p style='color: red;'>At least one option must be selected.</p>";
        } else {
            echo "<p style='color: green;'>Option(s) selected.</p>";
        }
    }
    ?>