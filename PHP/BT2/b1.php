<?php 
    require_once 'inc_connect.php';
    $action  = isset($_POST['action']) ? $_POST['action'] : '';
    $name    = isset($_POST['name']) ? $_POST['name'] : '';
    $birth   = isset($_POST['birth']) ? $_POST['birth'] : '';
    $add = isset($_POST['add']) ? $_POST['add'] : '';
    $sex  = isset($_POST['sex']) ? $_POST['sex'] : -1;

    $errors = [];

    if($action == 'submit') 
    {
        if($name == '') 
        {
            $errors['name'] = 'Vui lòng nhập họ và tên';
        }

        if($birth == '') 
        {
            $errors['birth'] = 'Vui lòng nhập ngày sinh';
        }

        if($add == '') 
        {
            $errors['add'] = 'Vui lòng nhập địa chỉ';
        }

        if($sex < 0) 
        {
            $errors['sex'] = 'Vui lòng chọn một giới tính';
        }

        // Nếu không có lỗi gì thì làm gì?
        if(empty($errors)) 
        {
            $sql = "INSERT INTO dangky(
                                        HoTen,
                                        NgaySinh,
                                        GTinh,
                                        DiaChi
                                    ) VALUES (
                                        '$name',
                                        '$birth',
                                        '$sex',
                                        '$add'
                                    )";
            // Thực thi câu $sql với biến link
            mysqli_query($link,$sql);
            echo "Chúc mừng bạn đã đăng ký thành công";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        .help-block{
            color: #ff1a1a;
        }
    </style>
</head>
<body>
    <form class="form-horizontal" method="POST" action="" style="margin-top: 50px;">
        <div class="form-group">
            <label class="col-sm-3 control-label">Họ và tên</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                <?php if(isset($errors['name'])) : ?>
                    <span class="help-block"><?php echo $errors['name'] ?></span>
                <?php endif ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Ngày sinh</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="birth" placeholder="<?php echo date('Y-m-d')?>" value="<?php echo $birth ?>">
                <?php if(isset($errors['birth'])) : ?>
                    <span class="help-block"><?php echo $errors['birth'] ?></span>
                <?php endif ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Địa chỉ</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="add" value="<?php echo $add ?>">
                <?php if(isset($errors['add'])) : ?>
                    <span class="help-block"><?php echo $errors['add'] ?></span>
                <?php endif ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Giới tính</label>
            <div class="col-sm-6">
                <label class="radio-inline"><input type="radio" name="sex" value="1" <?php echo $sex == 1 ? 'checked="checked"' : '' ?>>Nam</label>
                <label class="radio-inline"><input type="radio" name="sex" value="0" <?php echo $sex == 0 ? 'checked="checked"' : '' ?>>Nữ</label>
                <?php if(isset($errors['sex'])) : ?>
                    <span class="help-block"><?php echo $errors['sex'] ?></span>
                <?php endif ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="hidden" name="action" value="submit">
                <button class="btn btn-sm btn-primary" type="submit">Đăng ký</button>
            </div>
        </div>

    </form>

</body>
</html>