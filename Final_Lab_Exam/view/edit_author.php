<?php
require_once('../model/author_model.php');
$user_name = $_REQUEST['user_name'];
$author_info = author_info($user_name);
$author_name = $author_info['author_name'];
$contact_no = $author_info['contact_no'];
$password = $author_info['password'];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Author Page</title>
</head>
<body>

    <h1>Edit Author</h1>

    <div>
        <form action="../controller/edit_author_check.php" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" readonly value="<?php echo htmlspecialchars($user_name); ?>" name="old_user_name" id="old_user_name_id">
                    </td>
                </tr>
                <tr>
                    <td>Current Author Name</td>
                    <td>
                        <input type="text" disabled value="<?php echo htmlspecialchars($author_name); ?>" id="old_author_name_id">
                    </td>
                </tr>
                <tr>
                    <td>New Author Name</td>
                    <td>
                        <input type="text" name="new_author_name" id="new_author_name_id" onkeyup="check_author_name()">
                        <p id="author_name_val">Author Name cannot be empty</p>
                    </td>
                </tr>
                <tr>
                    <td>Current Contact No</td>
                    <td>
                        <input type="text" disabled value="<?php echo htmlspecialchars($contact_no); ?>" id="old_contact_no_id">
                    </td>
                </tr>
                <tr>
                    <td>New Contact No</td>
                    <td>
                        <input type="text" name="new_contact_no" id="new_contact_no_id" onkeyup="check_contact_no()">
                        <p id="contact_no_val">Contact Number cannot be empty</p>
                    </td>
                </tr>
                <tr>
                    <td>Current Password</td>
                    <td>
                        <input type="text" disabled value="<?php echo htmlspecialchars($password); ?>">
                    </td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="text" name="new_password" id="new_password_id" onkeyup="check_password()">
                        <p id="password_val">Password cannot be empty</p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" name="submit">
                        <input type="reset" value="Reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>
        <a href="show_all_author.php">Go Back</a>
    </div>

    <script src="../asset/js/edit_author.js"></script>
</body>
</html>
