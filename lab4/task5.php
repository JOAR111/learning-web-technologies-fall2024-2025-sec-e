<?php
    if (isset($_POST['submit_qualification'])) {
        if (!isset($_POST['qualification']) || count($_POST['qualification']) < 2) {
            echo "<p style='color: red;'>Please select at least two qualification.</p>";
        } else {
            echo "<p style='color: green;'>You selected: " . implode(', ', $_POST['qualification']) . "</p>";
        }
    }
    ?>