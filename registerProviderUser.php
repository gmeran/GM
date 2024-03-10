<?php include 'include/header.php' ?>
<?php include "config/connection.php" ?>



<h1>Welcome to Provider User Registration Page</h1>

<p>Please fill out Login information below.</p>

<?php


$errors = array();

if (isset($_POST['register_user'])) {
    $username = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $id = filter_input(INPUT_POST, 'providerID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   



    $check_user = "SELECT * FROM ProviderUsers WHERE user = '$username' OR Id = '$id'";
    $result = sqlsrv_query($conn, $check_user);
    $user = sqlsrv_fetch($result);

    if ($user) {
        if ($user['user'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['patientID'] === $id) {
            array_push($errors, "PatientID already exists");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO ProviderUsers (Id,username, pass)
    VALUES('$id','$username','$password')";
        sqlsrv_query($conn, $query); 

  

        header('Location: registerProviderInfo.php?providerid='.$id);
    }
}
?>

<form action="registerProviderUser.php" method="post">
    <section>
        <h2>Login Information</h2>
        
        <div class="mb-3">
            <label>Provider ID</label>
            <input type="text" name="providerID">
        </div>

        <div class="mb-3">
            <label>UserName</label>
            <input type="text" name="user">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password">
        </div>

    </section>

    <div class="mb-3">
        <input type="submit" name="register_user" value="Countinue" class="btn btn-dark w-100">
    </div>
</form>

