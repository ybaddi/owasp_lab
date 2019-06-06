<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset >
    <legend>Formulaire de login</legend>
    <table>
        <tr>
            <td><label>Username</label></td>

            <td><input type="text" name="username" placeholder="please put your username"></td>
        </tr>

        <tr>
            <td><label>Pasword</label></td>
            <td><input type="password" name="password" placeholder="please put your password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="login" name="log"></td>
        </tr>
    </table>



</fieldset>
</form>

<?php
if(isset($_POST['log'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username. " with password : ". $password;
    }
?>