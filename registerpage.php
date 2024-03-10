<?php include 'include/header.php' ?>


<h1>Welcome to GM HealthCare Registration Page</h1>
<img src="img/gmlogo.png" class="w-25 mb-3" alt="">


<h2>Choose Type Of Users that you want to Register</h2>

<form action="registerPatientUser.php">
    <input type="submit" name="submit" value="Register for Patient" class="btn btn-dark w-100">
</form>

<form action="registerpage.php">
    <input type="submit" style="margin: 10px;" name="submit" value="Register for Provider" class="btn btn-dark w-100">
</form>