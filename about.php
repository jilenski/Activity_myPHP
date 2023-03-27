<form method="post">
    <input type="submit" name="test" id="test" value="Click Here" />
</form>

<?php
function buttontest()
{
   echo '<script>alert("this is the about page")</script>';
}

if(array_key_exists('test',$_POST)){
  buttontest();
}
?>