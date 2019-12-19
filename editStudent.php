</br></br></br>
<?php
require_once 'src/bootstrap.php';
$title = "Edit Student";
include 'includes/header.php';

$id = filter_input(INPUT_GET, 'id');

$db = new Student();
$student = $db->find($id);
$genders = $db->getGenders()->results();

if (isset($_PUT) && !empty($_PUT)) {
    $studentData = [
        'gender_id' => filter_input(INPUT_POST, 'gender'),
        'student_firstName' => filter_input(INPUT_POST, 'firstName'),
        'student_lastName' => filter_input(INPUT_POST, 'lastName'),
        'student_dob' => filter_input(INPUT_POST, 'dob'),
        'student_email' => filter_input(INPUT_POST, 'email'),
        'student_phone' => filter_input(INPUT_POST, 'phone'),
    ];

    try {
        $db->upate($studentData);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    $db = Db::connect();
    $parentData = [
        'student_id' => $db->lastInsertId(),
        'parent_firstName' => filter_input(INPUT_POST, 'parentFirstName'),
        'parent_lastName' => filter_input(INPUT_POST, 'parentLastName'),
        'parent_phone' => filter_input(INPUT_POST, 'parentPhone'),
    ];
    $db->insert('parents', $parentData);
} ?>
<div class="container mt-3"></div>
    <form method="post" action="<?php echo filter_input(INPUT_SERVER, 'PHP_SELF'); ?>">
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <legend>Student</legend>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $student->student_firstName; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $student->student_lastName; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $student->student_dob; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="gender">Select Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <?php foreach ($genders as $gender) { ?>
                                <option value="<?php echo $gender->gender_id; ?>" <?php if($student->gender_id === $gender->gender_id) echo 'selected'; ?>><?php echo $gender->gender_name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $student->student_email; ?>" />
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" value="<?php echo $student->student_phone; ?>" />
                        <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <legend>Parent</legend>
                    <div class="form-group">
                        <label for="parentFirstName">First Name</label>
                        <input type="text" class="form-control" id="parentFirstName" name="parentFirstName" value="<?php echo $student->parent_firstName; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="parentLastName">Last Name</label>
                        <input type="text" class="form-control" id="parentLastName" name="parentLastName"  value="<?php echo $student->parent_lastName; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="parentPhone">Contact Number</label>
                        <input type="text" class="form-control" id="parentPhone" name="parentPhone" aria-describedby="parentPhoneHelp" value="<?php echo $student->parent_phone; ?>" />
                        <small id="parentPhoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                    </div>
                </fieldset>
                <a href="students.php" class="btn btn-info">Back To List</a>
                <input type="hidden" name="_method" value="PUT" />
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </div>
    </form>
<?php include 'includes/footer.php';
