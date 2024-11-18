<?php
    if (isset($_POST['submit_country'])) {
        if (empty($_POST['country'])) {
            echo "<p style='color: red;'>Please select a country.</p>";
        } else {
            echo "<p style='color: green;'>You selected: " . htmlspecialchars($_POST['country']) . "</p>";
        }
    }
    ?>