<?php
$files = glob("uploads/*.*");
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
	echo '<img src="'.$num.'" alt="random image" style="width:200px;height:200px;">'."&nbsp;&nbsp;";
	}
?>


