<?php 
    require_once 'inc_connect.php';


    if(isset($_POST['submit']))
    {
        if(isset($_FILES['upimg']))
        { 
            if($_FILES['upimg']['type'] == "image/jpeg" || $_FILES['upimg']['type'] == "image/png" || $_FILES['upimg']['type'] == "image/gif")
            { 
                if($_FILES['upimg']['error'] > 0)
                {
                    echo "File Upload bị lỗi";
                }
                else
                {
                    move_uploaded_file($_FILES['upimg']['tmp_name'], 'upload/'.$_FILES['upimg']['name']);
                    $sql = "INSERT INTO images(imgdata) VALUES ('". $_FILES['upimg']['name'] ."')";
                    mysqli_query($link,$sql);
                    echo "Upload thành công <br />";
                    echo "Kiểu file : ".$_FILES['upimg']['type']."<br />";
                    echo "File size : ".$_FILES['upimg']['size'];
                }
            }
            else
            {
               echo "Kiểu file không hợp lệ";
            }
       }
       else
       {
            echo "Vui lòng chọn file";
       }
    }
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload ảnh</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" style="margin-top: 50px;">
        <div class="form-group">
            <label class="col-sm-3 control-label">Upload Ảnh</label>
            <div class="col-sm-6">
                <input type="file" id="upimg" name="upimg">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="submit"  name="submit" value="Upload">
                <!--<button class="btn btn-sm btn-primary" type="submit">Upload</button>-->
            </div>
        </div>

    </form>

</body>
</html>