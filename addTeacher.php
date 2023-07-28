<!DOCTYPE html>
<html>
<head>
    <title>Add New Teacher</title>
</head>
<body>
    <h1>Add New Teacher</h1>
    <form action="save_teacher.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Age:</label>
        <input type="number" name="age" required><br>

        <label>Phone No:</label>
        <input type="text" name="phone" required><br>

        <label>Subject Name:</label>
        <input type="text" name="subject" required><br>

        <input type="submit" value="Add Teacher">
    </form>
    <a href="index.php">Back to Teacher List</a>
</body>
</html>
