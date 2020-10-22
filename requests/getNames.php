<?php

require __DIR__.'/../db/connect.php';

$sql="SELECT * FROM person";

$stmt=$conn->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);


include __DIR__.'/../view/namelist.php';