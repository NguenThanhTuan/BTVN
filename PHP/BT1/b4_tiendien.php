<?php 
	function tiendien($soDien)
    {
        $tienDien;
        if ($soDien <= 100)
        {
            $tienDien = 450 * $soDien;
            echo $tienDien;
        }

        if ($soDien > 100 && $soDien <= 150)
        {
            $tienDien = 750 * $soDien;
            echo $tienDien;
        }

        if ($soDien > 150)
        {
            $tienDien = 950 * $soDien;
            echo $tienDien;
        }
    }
    $soDien = 3009;
    tiendien($soDien);
?>