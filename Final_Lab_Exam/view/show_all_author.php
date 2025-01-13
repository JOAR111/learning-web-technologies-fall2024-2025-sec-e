<?php
    session_start();
    require_once("../model/author_model.php");
    $result = show_authors();
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Author List</title>
</head>
<body>
    <h1>Authors List</h1>

    <div>
        <input type="text" id="search" onkeyup="search_author()" placeholder="Search an author">
    </div>

    <table id="table1">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Author Name</th>
                <th>Contact No</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                <td><?php echo htmlspecialchars($row['author_name']); ?></td>
                <td><?php echo htmlspecialchars($row['contact_no']); ?></td>
                <td><?php echo htmlspecialchars($row['password']); ?></td>
                <td>
                    <a href="edit_author.php?user_name=<?php echo urlencode($row['user_name']); ?>">
                        <button>EDIT</button>
                    </a>
                </td>
                <td>
                    <a href="../controller/delete_author.php?user_name=<?php echo urlencode($row['user_name']); ?>" onclick="return confirm('Are you sure you want to delete this author?');">
                        <button>DELETE</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="../asset/js/search_author.js"></script>
</body>
</html>
