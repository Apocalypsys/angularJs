<?php
$dir = "C:/xampp/htdocs/MyProjects/Angular/img/icons";

$files = scandir($dir);
$filename = array();
$a = 0;
for($i = 0; $i < count($files);$i++)
	{
		if($files[$i] != "." && $files[$i] != ".." && !is_dir($files[$i]))
			{
				$filename[$a] = $files[$i];
				$a++;
			}
	}
$data["status"] = "success";
$data["icons"] = $filename;
echo(json_encode($data))
?>