<?php
if(isset($_POST['username'])){
    $usernameAttempt = $_POST['username'];
    $passwordAttempt = $_POST['password'];
    if($usernameAttempt=="user51" && $passwordAttempt == "Ajax2025"){
        echo 'JSC_NietLiever010?'
        exit();
    }
}
?>

<h1>Hashing</h1>
<h2>Opdracht</h2>
Stel, we hebben toegang tot de volgende gegevens uit een database:

<table>
    <tr><th>Gebruikersnaam</th><th>Password</th></tr>
    <tr><td>user51</td><td>de514776b2744fa0c2f51b70009b89d7</td></tr>
</table>

De gebruiker is z'n wachtwoord vergeten, maar weet wel dat het iets met een Amsterdamse voetbalclub was, met daarachter het jaartal 2025. Met de hashing-machine hieronder kan je hashes maken en vergelijken met de database hierboven. Log in met de juiste gegevens om de flag te krijgen.

<hr>
<h2>Hashing-machine</h2>

<form method="POST" action="hashing.php">
    Invoer: <input type="text" name="encrypt"/> 
    <input type="submit" Value="hash!"/ >
</form>
<?php
if(isset($_POST['encrypt'])){
    echo md5($_POST['encrypt']);
}
?>

<hr>
</h2>Inloggen</h2>
<form method="POST" action="hashing.php">
    Gebruikersnaam: <input type="text" name="username" placeholder="Gebruikersnaam..." /> 
    Wachtwoord: <input type="password" name="password" placeholder="Password...  /> 
    <input type="submit" Value="Login"/ >
</form>