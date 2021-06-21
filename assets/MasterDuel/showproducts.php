<?php

include('../../cnmd.php');

$t = "";
$qry = "SELECT * FROM product ORDER BY IDProductCode";

if (isset($_POST['p'])) {
    $q = $con->real_escape_string($_POST['p']);
    $qry = "SELECT * 
    FROM product 
    WHERE Name LIKE '%".$q."%' OR 
    ReleaseDate LIKE '%".$q."%'";
}

$searchproducts = $con->query($qry);

if($searchproducts->num_rows > 0){
    $t.= '<table class = "table">
    <tr class="headtable">
        <th>Image</th>
        <th>Product Code</th>
        <th>Name</th>
        <th>Release Date</th>
        <th>Details</th>
    </tr>';

    while ($row = $searchproducts->fetch_assoc()) {
        $t.= '<tr style="color: white">
        <td> <img src="'.$row['Img'].'.jpg" class="imgproduct"> </td>
        <td>'.$row['IDProductCode'].'</td>
        <td>'.$row['Name'].'</td>
        <td>'.$row['ReleaseDate'].'</td>
        <td> <a href="productdetails.php?idproduct='.$row['IDProductCode'].'"> <input type="submit" class="btn btn-info" value="More details..."> </input> </a> </td>
    </tr>';
    }

    $t.= '</table>';
} else {
    $t = "<hr/><h2 style='color: white'>No hubo ninguna coincidencia :( <h2>";
}

echo $t;

$con->close();
?>