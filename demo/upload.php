<?php
if(isset($_FILES['image']))
{
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false)
    {
        
    }

    if($file_size > 2097152)
    {
        
    }

    if(empty($errors)==true)
    {
        move_uploaded_file($file_tmp,"tmp/".$file_name);
        echo "Success:"."tmp/".$file_name;
    }
    else
    {
        print_r($errors);
    }
}
?>
<html>
<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" >
        <input type="submit">
    </form>

</body>
</html>