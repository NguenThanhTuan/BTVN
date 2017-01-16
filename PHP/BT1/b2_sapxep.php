<?php 
	echo "Vòng lặp for". "<br>";
	for ($i = 0; $i < 5; $i++)
	{
		$array[] =  rand(1, 30);
	}
	sort($array);
	echo "Sắp xếp tăng dần: ";
	print_r("<pre>");
	print_r($array);

	rsort($array);
	echo "<br>". "Sắp xếp giảm dần: ";
	print_r ("<pre>");
	print_r($array);
		
	echo "<br>". "Vòng lặp while". "<br>";
	$i = 0;
	while ($i < 6) 
	{
		$i++;
		$array1[] = rand(1, 30);
	}
	sort($array1);
	echo "Sắp xếp tăng dần: ";
	print_r("<pre>");
	print_r($array1);

	rsort($array1);
	echo "<br>". "Sắp xếp giảm dần: ";
	print_r ("<pre>");
	print_r($array1);

	echo "Vòng lặp do...while". "<br>";
	$i = 0;
	do
	{
		
		$array2[] = rand(1, 30);
		$i++;

	} while($i < 7);
	sort($array2);
	echo "Sắp xếp tăng dần: ";
	print_r("<pre>");
	print_r($array2);

	rsort($array2);
	echo "<br>". "Sắp xếp giảm dần: ";
	print_r ("<pre>");
	print_r($array2);
?>
	