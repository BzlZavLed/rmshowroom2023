<?php
session_start();
include("../../../db/conn.php");


$html = '';
$query = 'SELECT * FROM clientes ORDER BY id DESC';
$result = $conn3->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<option value="'.$row['nombre'].'" data="'.$row['email'].'">'.$row['nombre'].'|'.$row['email'].'</option>';
    }
}
echo $html;
?> 