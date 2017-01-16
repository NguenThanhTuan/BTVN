<?php 
    function ngto($a) 
    {
        if ($a < 2) return "false";
        for ($i = 2; $i <= sqrt($a); $i++ )
            if ($a % $i == 0) return "false";
            return "true";
    };
    $d = 2711;
    echo ngto($d);
 ?>