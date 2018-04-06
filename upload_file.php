<?php
/**
 * Created by PhpStorm.
 * User: Jipeng
 * Date: 2018/4/6
 * Time: 17:01
 */

if((($_FILES["file"]["type"] == "image/gif")
        ||($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/jpg"))
    &&($_FILES['file']['size']<200000))
{
    if($_FILES['file']['error']>0){
        echo "Return Code: ". $_FILES['file']['error'] . "<br/>";
    }
    else{
        echo "Upload: ". $_FILES["file"]['name'] . "<br/>";
        echo "Type: ". $_FILES['file']['type']. "<br/>";
        echo "Size: ". ($_FILES['file']['size']/1024) . "Kb<br/>";
        echo "Temp file: " . $_FILES['file']['tmp_name']. "<br/>";

        if (file_exists("upload/". $_FILES['file']['name'])){
            echo $_FILES['file']['name'] . " already exists. ";
        }
        else{
            move_uploaded_file($_FILES['file']['tmp_name'], "upload/". $_FILES['file']['name']);
            echo "Stored in: ". "upload/" . $_FILES['file']['name'];

        }
    }
}
else{
    $a = 20000/1024;
    /*echo "File should be gif or jpeg or jpg and must smaller than ".$a . "Kb"."<br/>";
    echo "Upload: ". $_FILES["file"]['name'] . "<br/>";
    echo "Type: ". $_FILES['file']['type']. "<br/>";
    echo "Size: ". ($_FILES['file']['size']/1024) . "Kb<br/>";
    echo "Temp file: " . $_FILES['file']['tmp_name']. "<br/>";
    */
}
?>