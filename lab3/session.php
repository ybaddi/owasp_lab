<?php
/**
 * Created by PhpStorm.
 * User: bad
 * Date: 6/6/19
 * Time: 12:09 AM
 */
session_start();
// week random
//$sessionid = md5(rand(1000,3000));
// strong random
$sessionid = md5(uniqid(mt_rand(),true));
$_SESSION['sessionid'] = $sessionid;
if(isset($_SESSION['sessionid'])){
echo $_SESSION['sessionid'];
}
session_destroy();
unset($_SESSION['sessionid']);
$_SESSION= array();
echo "<br/> session id is :".$_SESSION['sessionid'];

// cookie managemenet
// setcookie(name,valeur,expired date);
setcookie("sessionid",$sessionid, time() + 365);

echo "<br/> session id from cookie is ".$_COOKIE['sessionid'];


