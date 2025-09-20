<?php
$file = "students.txt";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $data = "Name: $name | ID: $student_id | Email: $email | Course: $course\n";

    file_put_contents($file, $data, FILE_APPEND);
    echo "✅ Student registered successfully!<br>";
    echo "<a href='index.php'>Go back</a>";
}

if (isset($_POST['clear'])) {
    file_put_contents($file, ""); // clear file
    echo "🧹 File cleared successfully!<br>";
    echo "<a href='index.php'>Go back</a>";
}
?>
