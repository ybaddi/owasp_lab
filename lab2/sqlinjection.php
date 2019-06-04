<?php
/**
 * Created by PhpStorm.
 * User: bad
 * Date: 6/4/19
 * Time: 1:55 PM
 */


$con = mysqli_connect("10.155.2.74","root","baddiroot","test");
if(!$con){
die(mysqli_connect_error());
}


$id = $_GET['id'];




$result = mysqli_query($con,"SELECT * FROM users WHERE id=".$id);


if(mysqli_num_rows($result) > 0) {

    while ($data = mysqli_fetch_assoc($result)) {


        echo $data['name']."<br/>";
    }
}

echo "<br/>success";



?>