<?php include 'include/header.php' ?>
<?php include "config/connection.php" ?>



<p>Please fill out Patient information below.</p>
<?php

$id = $_GET['patientid'];
echo 'Copy ID to PatientID field: ' . $id;
$errors = array();

if (isset($_POST['register_patientinfo'])) {

    $firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, 'streetaddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dob = filter_input(INPUT_POST, 'dateofbirth', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $patientid = filter_input(INPUT_POST, 'patientid', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    $query2 = "INSERT INTO PatientInfo (PID,FirstName,LastName,DOB,Email,StreetAddress,City,State,Country,Zip)
    VALUES('$patientid','$firstName','$lastName','$dob','$email', '$address', '$city', '$state', '$country', '$zip')";
    sqlsrv_query($conn, $query2);

    header('Location: loginpage.php');
}
?>
<form action="registerPatientInfo.php" method="post">
    <section>
        <h2>Personal Information</h2>

        <div class="mb-3">
            <label>PatientID</label>
            <input type="text" name="patientid">
        </div>
        <div class="mb-3">
            <label>FirstName</label>
            <input type="text" name="firstname">
        </div>

        <div class="mb-3">
            <label>LastName</label>
            <input type="text" name="lastname">
        </div>


        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email">
        </div>


        <div class="mb-3">
            <label>DateOfBirth</label>
            <input type="date" name="dateofbirth">
        </div>

        <div class="mb-3">
            <label>Street Address</label>
            <input type="text" name="streetaddress">
        </div>

        <div class="mb-3">
            <label>City</label>
            <input type="text" name="city">
        </div>

        <div class="mb-3">
            <label>State</label>
            <input type="text" name="state">
        </div>

        <div class="mb-3">
            <label>Zip</label>
            <input type="text" name="zip">
        </div>

        <div class="mb-3">
            <label>Country</label>
            <input type="text" name="country">
        </div>

    </section>

    <div class="mb-3">
        <input type="submit" name="register_patientinfo" value="Register" class="btn btn-dark w-100">
    </div>
</form>