</br> </br> </br>

<?php
require_once 'src/bootstrap.php';
$title = "View Student";
include 'includes/header.php';
$id = filter_input(INPUT_GET, 'id');
$db = new Student();
$student = $db->find($id);
var_dump($db); 
?>

<h2>View of Student Record</h2>
<div class="container mt-3">
    <form>
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
                        <select class="form-control" id="gender" name="gender">
                            <option value="<?php echo $student->gender_id; ?>"><?php echo $student->gender_name ?></option>
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
                    <p><a class="btn btn-warning" href="students.php" role="button">Back To List »</a></p>

                </fieldset>
            </div>
        </div>
    </form>
</div>
<?php include 'includes/footer.php';
