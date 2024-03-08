<?php

$serverName = "DESKTOP-VFPR8UU";
$database = "GMHealthCare";
$uid = "";
$pass = "";

$connection  = [
"Database" => $database,
"Uid" => $uid,
"PWD" => $pass
];

$conn = sqlsrv_connect($serverName,$connection);
if(!$conn)
    die(print_r(sqlsrv_errors(),true));

/*else
    echo "Connection succesfully"

*/
    /*
$tsql = "select * from Person";


$stmt = sqlsrv_query($conn,$tsql);

if($stmt == false){
    echo 'Error';
}
while($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    echo $obj['LastName'].'</br>';
}
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);*/
?>