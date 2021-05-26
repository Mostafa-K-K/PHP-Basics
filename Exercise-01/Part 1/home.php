<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../home.css">
    <title>Register an account</title>
</head>

<body>
    <form action="safe.php" method="post" id="registeration">
        <div class="container">
            <h1>CREATE ACCOUNT.</h1>
            <p>Please fill your information.</p>
            <hr>

            <div class="allinput">
                <label for="fname"><b>Full Name</b></label>
                <input type="text" placeholder="Enter Your Full Name" name="fname" id="fname" required>

                <label for="username1"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username1" id="username1" required>

                <label for="pass1"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass1" id="pass1" required>

                <label for="confirmpass"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="confirmpass" id="confirmpass" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Your Email" name="email" id="email" required>

                <label for="phone"><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Your Phone Number" name="phone" id="phone" required>

                <label for="dateB"><b>Date of Birth</b></label>
                <input type="date" placeholder="Date of Birth" name="dateB" id="dateB" required>

                <label for="socialphone"><b>Social Security Number</b></label>
                <input type="text" placeholder="Social Security Number" name="socialphone" id="socialphone" required>


            </div>
            <hr>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#loginn">Login</a>.</p>
        </div>
    </form>

    <form action="log.php" method="post" id="loginn">
        <div class="container">
            <h1>LOGIN ACCOUNT.</h1>
            <p>Please fill your Username and Password.</p>
            <hr>

            <div class="allinput">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

                <!-- <span style='color:red;display:<?php echo $viewErr; ?>' id="spanerr" name="spanerr">password or email
                    incorrect</span> -->

            </div>
            <hr>

            <button type="submit" class="registerbtn">Login</button>
        </div>

        <div class="container signin">
            <p>Don't have an account? <a href="#registeration">Create account</a>.</p>
        </div>
    </form>

</body>

</html>