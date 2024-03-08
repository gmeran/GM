<?php include 'include/header.php' ?>


<h1>Welcome to GM HealthCare Login Page</h1>
<img src="img/gmlogo.png" class="w-25 mb-3" alt="">



    <div class="mb-3">
        <label for="user" class="form-label">UserName</label>
        <input type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password " class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit" name="submit" value="Login" class="btn btn-dark w-100">
    </div>

    <form action="registerpage.php">
        <input type="submit" name="submit" value="Register" class="btn btn-dark w-100">
    </form>

