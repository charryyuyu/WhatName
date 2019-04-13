<?php

require "public_module.php";

$sql = "INSERT INTO biao (`name`) values ('newname')";
// $sql = "SELECT * from biao";

// $con = mysqli_connect("localhost", "root", "root");
// mysqli_select_db("test", $con);

query($sql);
