<?php include 'include/header.php' ?>
<?php include "config/connection.php" ?>

<?php
if (isset($_POST['login_user'])) {


    $username = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $userErr = $passErr = '';
    if (empty($userErr) && empty($passErr)) {
        $patientQuery = "SELECT * FROM PatientUsers WHERE username='$username' AND pass='$password'";
        $providerQuery = "SELECT * FROM ProviderUsers WHERE username='$username' AND pass='$password'";

        $patientResult = sqlsrv_query($conn, $patientQuery);
        $providerResult = sqlsrv_query($conn, $providerQuery);

        if (sqlsrv_has_rows($patientResult) == 1 ) {
            header('Location: dashboard.php');
        }

        elseif(sqlsrv_has_rows($providerResult) == 1 ){
            header('Location: dashboard.php');
        }
        else {
            echo 'Wrong Username or Password';
        }
    }
}
?>
<h1>Welcome to GM HealthCare Login Page</h1>
<img src="img/gmlogo.png" class="w-25 mb-3" alt="">


<form method="post" action="loginpage.php">

    <div class="mb-3">
        <label>UserName</label>
        <input type="text"  name="user">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" >
    </div>

    <div class="mb-3">
        <input type="submit" name="login_user" value="Login" class="btn btn-dark w-100">
    </div>
</form>


<form action="registerpage.php">
    <input type="submit" name="submit" value="Register" class="btn btn-dark w-100">
</form>