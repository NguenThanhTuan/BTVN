<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="success">
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Quê quán</th>
                    <th>Sở thích</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                    <td> <?php echo $_SESSION ['name']; ?> </td>
                    <td> <?php echo $_SESSION ['birth']; ?> </td>
                    <td> <?php echo $_SESSION['sex']; ?> </td>
                    <td> <?php echo $_SESSION['add']; ?> </td>
                    <td> <?php echo $_SESSION['sothich']; ?> </td>
            	</tr>
            </tbody>
        </table>
    </div>

</body>
</html>