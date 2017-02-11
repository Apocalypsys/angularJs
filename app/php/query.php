<?php
function getRows($tblName)
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
								return $data;
							}
						$mysqli->close();
					}
?>