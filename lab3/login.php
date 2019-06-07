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
    $md5password = md5($_POST['password']);

    $con = mysqli_connect("localhost","root","baddiroot","test");
    $query = "SELECT * FROM users WHERE name='$username' AND password='$md5password'";

    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result) !=0){
        while($data = mysqli_fetch_assoc($result))   {

            if($md5password == $data['password'] and $username == $data['name']){
                echo "login succes";
                setcookie("username",$data['name'],time() + 365);
                setcookie("password",$data['password'],time() + 365);
            }else{
                echo "login failed";
            }
        }
    }
}
?>