<?php
require_once 'src/bootstrap.php';
$title = "New User";
include 'includes/header.php';
$user = new User();

if (isset($_POST) && !empty($_POST)) {
    $userData = [
        'email' => filter_input(INPUT_POST, 'email'),
        'firstName' => filter_input(INPUT_POST, 'firstName'),
        'lastName' => filter_input(INPUT_POST, 'lastName'),
        'password' => password_hash(filter_input(INPUT_POST, 'password'), PASSWORD_DEFAULT),
        'username' => filter_input(INPUT_POST, 'username'),
    ];

    try {
        $user->create($userData);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} ?>
<div class="container mt-3">
    <form action="<?php echo filter_input(INPUT_SERVER, 'PHP_SELF'); ?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="firstname" class="control-label col-md-2">Firstname</label>
            <div class="col-md-5">
                <input type="text" name="firstName" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="control-label col-md-2">Lastname</label>
            <div class="col-md-5">
                <input type="text" name="lastName" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-md-2">Email</label>
            <div class="col-md-5">
                <input type="email" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="control-label col-md-2">Username</label>
            <div class="col-md-5">
                <input type="text" name="username" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-md-2">Password</label>
            <div class="col-md-5">
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create user</button>
    </form>
</div>
<?php include 'includes/footer.php';