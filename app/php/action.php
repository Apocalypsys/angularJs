<?php
error_reporting("0");

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "web";

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);

if($mysqli->connect_errno)
	{
		$data["status"] = "error";
		$data["message"] = "MySQL connection problem : ".$mysqli->connect_errno.":".$mysqli->connect_error;
	}
else
	{
		if(isset($_REQUEST["type"]) && !empty($_REQUEST["type"]) && isset($_REQUEST["tblName"]) && !empty($_REQUEST["tblName"]))
			{
				$type = $_REQUEST["type"];
				$tblName = $_REQUEST["tblName"];
				if($type == "view")
					{
						$query = "SELECT * FROM `$tblName` WHERE 1";
						if($result = $mysqli->query($query))
							{
								$i = 0;	
								while($row = $result->fetch_assoc())
									{
										$rows[$i] = $row;
										$i++;
									}
								$data["status"] = "success";
								$data["rows"] = $rows;
								$result->free();
							}
						$mysqli->close();
					}
				if($type == "checkUser")
					{
						$username = $_REQUEST["username"];
						$query = "SELECT `username` FROM `$tblName` WHERE `users`.`username`='$username'";
						if($result = $mysqli->query($query))
							{
								$rows = $result->num_rows;
									
								$result->free();
							}
						$mysqli->close();
					}
				if($type == "addUser")
					{
						$userData = json_decode($_REQUEST["data"]);
						settype($userData,"array");
						$username = $userData["username"];
						$email = $userData["email"];
						$password = sha1($userData["password"]);
						
						$query = "SELECT `username` FROM `$tblName` WHERE `users`.`username`='$username'";
						if($result = $mysqli->query($query))
							{
								if($result->num_rows > 0)
									{
										$data["status"] = "userError";
										$data["message"] = "1";
									}
								$result->free();
							}
						//$query = "SELECT `username` FROM `$tblName` WHERE `users`.`username`='$username'";
						//$query = "SELECT `email` FROM `$tblName` WHERE `users`.`username`='$email'";
						//$query = "INSERT INTO `$tblName`(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
					}
			}
	}
echo json_encode($data);
?>