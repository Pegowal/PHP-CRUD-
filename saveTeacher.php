<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission and save the new teacher record.
    // In a real application, you would save the data to a database.

    // For simplicity, we'll use an array to store the records.
    $teachers = [
        // Existing teacher records here (if any).
    ];

    // Get the data from the form.
    $newTeacher = [
        'id' => count($teachers) + 1, // Simple auto-increment ID.
        'name' => $_POST['name'],
        'age' => (int)$_POST['age'],
        'phone' => $_POST['phone'],
        'subject' => $_POST['subject']
    ];

    // Add the new teacher to the array.
    $teachers[] = $newTeacher;

    // Redirect back to the teacher list page.
    header("Location: index.php");
    exit;
}
