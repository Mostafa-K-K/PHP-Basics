<html>

<body>

    Name : <?php echo $_POST["fname"]; ?><br>
    Username : <?php echo $_POST["username1"]; ?><br>


    Password : <?php echo $_POST["pass1"]; ?><br>
    Confirm : <?php echo $_POST["confirmpass"]; ?><br>


    Email : <?php echo $_POST["email"]; ?><br>
    Phone : <?php echo $_POST["phone"]; ?><br>

    Date of Birth :<?php echo $_POST["dateB"]; ?><br>
    Social : <?php echo $_POST["socialphone"]; ?><br>

    <?php

$users = ['Mostafa', 'Fakher'];
$passwords = ['123', '456'];

array_push($users, $_POST['username1']);
array_push($passwords, $_POST['pass1']);

echo "<br />";
echo "<br />";
echo "<br />";

echo "Users : " . json_encode($users);
echo "<br />";
echo "Passwords of users : " . json_encode($passwords);
?>

</body>

</html>