<!DOCTYPE html>
<html>
<head>
    <title>Class Teacher CRUD</title>
</head>
<body>
    <h1>Class Teacher List</h1>
    <a href="addTeacher.php">Add New Teacher</a>
    <?php
    // Sample records. In a real application, this would come from a database.
    $teachers = [
        [
            'id' => 1,
            'name' => 'SIDDHANT PEGOWAL',
            'age' => 22,
            'phone' => '911901322',
            'subject' => 'Math'
        ],
        [
            'id' => 2,
            'name' => 'SHRIYANSHI SHARMA',
            'age' => 28,
            'phone' => '987-654-3210',
            'subject' => 'Science'
        ]
    ];

    if (empty($teachers)) {
        echo "<p>No teachers found.</p>";
    } else {
        echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Phone No</th>
                <th>Subject Name</th>
                <th>Action</th>
            </tr>";

        foreach ($teachers as $teacher) {
            echo "<tr>
                <td>{$teacher['name']}</td>
                <td>{$teacher['age']}</td>
                <td>{$teacher['phone']}</td>
                <td>{$teacher['subject']}</td>
                <td>
                    <a href='editTeacher.php?id={$teacher['id']}'>Edit</a> |
                    <a href='deleteTeacher.php?id={$teacher['id']}'>Delete</a>
                </td>
            </tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
