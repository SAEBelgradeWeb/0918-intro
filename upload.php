<?php
include_once "templates/functions.php";
$dir = getcwd()."/storage";

if(isset($_FILES['upload'])) {
    if($_FILES['upload']['type'] !== "image/jpeg") {
        echo "This file type " . $_FILES['upload']['type'] . " is not allowed, plese upload JPG";
    } else {
        move_uploaded_file(
            $_FILES['upload']['tmp_name'],
            $dir."/".time()."_".$_FILES['upload']['name']
        );
        echo "Thank you for uploading!";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">

    <div>
        <label for="message">Message</label>
        <input type="text" id="message" name="message">
    </div>


    <div>
    <label for="upload">Upload an image</label>
    <input type="file" id="upload" name="upload">
    </div>
    <div>
    <button>Submit</button>
    </div>
</form>

<?php

$images = scandir($dir);
array_splice($images, 0 , 2);

foreach ($images as $image): ?>
    <img src="/storage/<?= $image ?>" alt="" width="60">
    
<?php endforeach;
