<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission and update the teacher record.
    // In a real application, you would update the data in a database.

    // For simplicity, we'll use an array to store the records.
    $teachers = [
        // Existing teacher records here (if any).
    ];

    $id = $_POST['id'];

    // Find the teacher with the specified ID.
    $existingTeacher = null;
    foreach ($teachers as &$teacher) {
        if ($teacher['id'] == $id) {
            $existingTeacher = &$teacher;
            break;
        }
    }

    // Update the teacher if found.
    if ($existingTeacher) {
        $existingTeacher['name'] = $_POST['name'];
        $existingTeacher['age'] = (int)$_POST['age'];
        $existingTeacher['phone'] = $_POST['phone'];
        $existingTeacher['subject'] = $_POST['subject'];

        // Redirect back to the teacher list page.
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Teacher not found.</p>";
    }
}
