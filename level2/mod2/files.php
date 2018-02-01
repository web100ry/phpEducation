<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31.01.18
 * Time: 22:04
 */
print_r($_FILES); // масив даних по передачі файлів
if ($FILES['uf']['error']==0){
    $t=$_FILES['uf']['tmp_name'];
    $n=$_FILES['uf']['name'];
    move_uploaded_file($t,"upload/".time().".txt");
}

?>
<form action="files.php" method="POST" enctype="multipart/form-data">
<input type="file" name="uf">
    <input type="submit" name="Send">

</form>
