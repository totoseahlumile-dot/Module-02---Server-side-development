<?php
$conn = mysqli_connect("localhost", "root", "", "basic_users_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create: add a new user
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);
}

// Update: change a user's email using their ID
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET email = '$email' WHERE id = $id";
    mysqli_query($conn, $sql);
}

// Delete: remove a user using their ID
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    mysqli_query($conn, $sql);
}

// Read: get all users
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>

    <h2>Add User</h2>
    <form method="post">
        Name: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>
        <input type="submit" name="add" value="Add User">
    </form>

    <h2>Update Email</h2>
    <form method="post">
        User ID: <input type="number" name="id" required>
        New Email: <input type="email" name="email" required>
        <input type="submit" name="update" value="Update Email">
    </form>

    <h2>Delete User</h2>
    <form method="post">
        User ID: <input type="number" name="id" required>
        <input type="submit" name="delete" value="Delete User">
    </form>

    <h2>All Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php mysqli_close($conn); ?>
