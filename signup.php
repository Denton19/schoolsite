<?php
require_once 'src/bootstrap.php';
$title = "New Student";
include 'includes/header.php';
$student = new Student();
$genders = $student->getGenders()->results();

if (isset($_POST) && !empty($_POST)) {
    $studentData = [
        'gender_id' => filter_input(INPUT_POST, 'gender'),
        'student_firstName' => filter_input(INPUT_POST, 'firstName'),
        'student_lastName' => filter_input(INPUT_POST, 'lastName'),
        'student_dob' => filter_input(INPUT_POST, 'dob'),
        'student_email' => filter_input(INPUT_POST, 'email'),
        'student_phone' => filter_input(INPUT_POST, 'phone'),
    ];

    try {
        $student->create($studentData);
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
}
?>

<div class="container mt-3">
</br></br></br><div class = "container"> 
<h2> Students Admission Form</h2>
    <form action="<?php echo filter_input(INPUT_SERVER, 'PHP_SELF'); ?>" method="post">
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <legend>Student's</legend>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" />
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="gender">Select Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <?php foreach ($genders as $gender) { ?>
                                <option value="<?php echo $gender->gender_id; ?>"><?php echo $gender->gender_name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="phone">Contact Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" />
                        <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <legend>Parents'</legend>
                    <div class="form-group">
                        <label for="parentFirstName">First Name</label>
                        <input type="text" class="form-control" id="parentFirstName" name="parentFirstName" />
                    </div>
                    <div class="form-group">
                        <label for="parentLastName">Last Name</label>
                        <input type="text" class="form-control" id="parentLastName" name="parentLastName" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" />
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="parentPhone">Contact Number</label>
                        <input type="text" class="form-control" id="parentPhone" name="parentPhone" aria-describedby="parentPhoneHelp" />
                        <small id="parentPhoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
<?php include 'includes/footer.php';