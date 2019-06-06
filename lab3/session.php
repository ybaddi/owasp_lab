
<?php

//// week random
////$sessionid = md5(rand(1000,3000));
//// strong random
//$sessionid = md5(uniqid(mt_rand(),true));
//$_SESSION['sessionid'] = $sessionid;
//if(isset($_SESSION['sessionid'])){
//echo $_SESSION['sessionid'];
//}
//session_destroy();
//unset($_SESSION['sessionid']);
//$_SESSION= array();
//echo "<br/> session id is :".$_SESSION['sessionid'];
//
//// cookie managemenet
//// setcookie(name,valeur,expired date);
//setcookie("sessionid",$sessionid, time() + 365);
//
session_start();
echo "<br/> session id from cookie is ".$_COOKIE['sessionid'];
//setcookie("sessionid","", time() - 365);
?>
 <?php

if(isset($_COOKIE['sessionid'])){
    header('Location: /Formation_OWASP/lab3/profile.php');
}else {
    ?>
    <form action="profile.php" method="post">
        <?php
        $sessionid = md5(uniqid(mt_rand(), true));

        setcookie("sessionid", $sessionid, time() + 365);
        ?>
        <input type="submit" value="login"/>
    </form>
    <?php}?>


