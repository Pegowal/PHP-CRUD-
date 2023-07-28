<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $teachers = [
    ];
    $id = $_GET['id'];
    $teacherIndex = null;
    foreach ($teachers as $index => $teacher) {
        if ($teacher['id'] == $id) {
            $teacherIndex = $index;
            break;
        }
    }
    if ($teacherIndex !== null) {
        array_splice($teachers, $teacherIndex, 1);
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Teacher not found.</p>";
    }
}