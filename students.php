<?php
require_once 'src/bootstrap.php';
$title = "Students";
include 'includes/header.php';
$db = new Student();
$students = $db->findAll()->results();
var_dump($students); ?>
<div class="container mt-3">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student->student_id; ?></td>
                <td><?php echo $student->student_firstName; ?></td>
                <td><?php echo $student->student_lastName; ?></td>
                <td><?php echo $student->gender_name; ?></td>
                <td><?php echo $student->student_email; ?></td>
                <td>
                    <a href="viewStudent.php?id=<?php echo $student->student_id; ?>" class = "btn btn-info">View </a>
                    <a href="editStudent.php?id=<?php echo $student->student_id; ?>" class = "btn btn-primary">Edit </a>
                    <a onclick="return confirm('Are YOU Sure You Want To Delete This Record?');"
                       href="delete.php?id=<?php echo $student->student_id; ?>" class = "btn btn-danger">Delete </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include 'includes/footer.php';
