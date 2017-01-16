<?php 
    require_once 'inc_connect.php';
    $sql = 'DELETE FROM dangky WHERE id = 2';
    if (mysqli_query($link, $sql))
    {
        echo "Xóa thành công". "<br>";
    }
    echo "Đã xóa: " . mysqli_affected_rows($link);
    mysqli_close($link);
?>