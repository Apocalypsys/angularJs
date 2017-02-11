<?php
require_once('config.php');
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
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
                if($type == "check")
                    {
                        //SELECT `username`,`email` FROM `members`
                        $query = "SELECT `username`,`email` FROM `members`";
                        if($result = $mysqli->query($query))
                        {
                            $i = 0;
                            while($row = $result->fetch_assoc())
                            {
                                $rows[$i] = $row;
                                $i++;
                            }
                            $data["status"] = "success";
                            $data["test"] = $rows;
                            $result->free();
                        }
                        $mysqli->close();
                    }
            }
    }

echo json_encode($data);
?>