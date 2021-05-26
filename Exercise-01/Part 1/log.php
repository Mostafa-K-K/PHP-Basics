<html>

<body>

    <?php

$users = ['Mostafa', 'Fakher'];
$passwords = ['123', '456'];

for ($i = 0; $i < count($users); $i++) {
    if ($_POST['username'] == $users[$i]) {
        if ($_POST['pass'] == $passwords[$i]) {$exist = 1;}
    }
}
($exist == 1) ? $MSG = 'welcome' . $_POST['username'] : $MSG = 'not valide';

echo $MSG . '<br>';

?>

</body>

</html>