<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
</head>
<body>
    <?php
    $teacher = [
        'id' => 1,
        'name' => 'John Doe',
        'age' => 30,
        'phone' => '123-456-7890',
        'subject' => 'Math'
    ];
    if (!$teacher) {
        echo "<p>Teacher not found.</p>";
    } else {
        ?>
        <h1>Edit Teacher</h1>
        <form action="update_teacher.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $teacher['id']; ?>">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $teacher['name']; ?>" required><br>

            <label>Age:</label>
            <input type="number" name="age" value="<?php echo $teacher['age']; ?>" required><br>

            <label>Phone No:</label>
            <input type="text" name="phone" value="<?php echo $teacher['phone']; ?>" required><br>

            <label>Subject Name:</label>
            <input type="text" name="subject" value="<?php echo $teacher['subject']; ?>" required><br>

            <input type="submit" value="Update Teacher">
        </form>
        <a href="index.php">Back to Teacher List</a>
    <?php } ?>
</body>
</html>
