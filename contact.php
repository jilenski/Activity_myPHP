<form method="post" action="">
  <input type="text" name="inputtxt" value="<?= isset($_POST['inputtxt']) ? htmlspecialchars($_POST['inputtxt']) : '' ?>" />
  <input type="submit" name="submit" />
</form>

<?php
if(isset($_POST['submit'])) {
  echo 'You entered: ', htmlspecialchars($_POST['inputtxt']);
}
?>