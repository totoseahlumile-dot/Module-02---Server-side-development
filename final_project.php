<?php
// Connect to the existing database
$conn = mysqli_connect("localhost", "root", "", "basic_users_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the table if it does not exist
$sql = "CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT
)";
mysqli_query($conn, $sql);

// Delete a record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM messages WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Message deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Get one record when the Edit link is clicked
$editRecord = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM messages WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $editRecord = mysqli_fetch_assoc($result);
}

// Save a new record
if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO messages (name, email, message)
            VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "Message saved successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Update an existing record
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "UPDATE messages
            SET name = '$name', email = '$email', message = '$message'
            WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Message updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Read all records
$records = mysqli_query($conn, "SELECT * FROM messages");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Messages</title>
</head>
<body>
    <h1>Contact Form</h1>

    <form action="final_project.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php if ($editRecord) echo $editRecord['name']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php if ($editRecord) echo $editRecord['email']; ?>" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" required><?php if ($editRecord) echo $editRecord['message']; ?></textarea><br><br>

        <?php if ($editRecord) { ?>
            <input type="hidden" name="id" value="<?php echo $editRecord['id']; ?>">
            <input type="submit" name="update" value="Update Message">
        <?php } else { ?>
            <input type="submit" name="save" value="Save Message">
        <?php } ?>
    </form>

    <h2>All Messages</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Options</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($records)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td>
                    <a href="final_project.php?edit=<?php echo $row['id']; ?>">Edit</a>
                    <a href="final_project.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php mysqli_close($conn); ?>
