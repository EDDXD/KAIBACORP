<?php

include('../../cnmd.php');

$t = "";
$qry = "SELECT * FROM card ORDER BY IDCardCode";

if (isset($_POST['c'])) {
    $q = $con->real_escape_string($_POST['c']);
    $qry = "SELECT * 
    FROM card 
    WHERE Name LIKE '%".$q."%' OR 
    Category LIKE '%".$q."%' OR 
    Type LIKE '%".$q."%' OR 
    Description LIKE '%".$q."%'";
}

$searchcards = $con->query($qry);

if($searchcards->num_rows > 0){
    $t.= '<table class = "table">
    <tr class="headtable">
        <th>Imagen</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Detalles</th>
    </tr>';

    while ($row = $searchcards->fetch_assoc()) {
        $t.= '<tr style="color: white">
        <td> <img src="'.$row['Img'].'.jpg" class="imgcard"> </td>
        <td>'.$row['IDCardCode'].'</td>
        <td>'.$row['Name'].'</td>
        <td>'.$row['Category'].'</td>
        <td>'.$row['Type'].'</td>
        <td> <a href="carddetails.php?idcard='.$row['IDCardCode'].'&category='.$row['Category'].'&back='.$row['Extra'].'"> <input type="submit" class="btn btn-info" value="More details..."> </input> </a> </td>
    </tr>';
    }

    $t.= '</table>';
} else {
    $t = "<hr/><h2 style='color: white'>No hubo ninguna coincidencia :( <h2>";
}

echo $t;

$con->close();
?>