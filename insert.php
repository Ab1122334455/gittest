<?php
$db = pg_connect("host=localhost port=5432 dbname=ibb user=postgres password=IBB@12345");
$query = "select * from book";
$res = pg_query($query);
$arr=pg_fetch_array($res);
echo $arr["DOP"];
?>
