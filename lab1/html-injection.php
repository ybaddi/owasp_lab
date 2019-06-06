


<?php echo $_SERVER["PHP_SELF"]; ?>

<form   action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
<input type="text" name="word" />
    <input type="submit" value="submit">
</form>

<?php
echo strip_tags(addcslashes($_POST["word"],"/"));
?>