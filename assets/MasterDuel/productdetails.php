<?php 
session_start();
if (isset($_SESSION['email'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap441/css/bootstrap.min.css">
    <link rel="stylesheet" href="cardsproducts.css">
   <link rel="shortcut icon" href="../../ass/img/chun_lo_astro_logo_eQ3_icon.ico" />
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>Detalles del Set</title>
</head>
<body>
    <?php
        $id = $_GET['idproduct'];
    ?>
    <div class="centradito">
     <?php include('headerdt.php') ?>
</div>
        <?php
           include('../../cnmd.php');
            $result1 = $con->query("SELECT * FROM product WHERE IDProductCode = '$id'") or die($con->error);
        ?>
        
        <center>
                <hr/><hr/><hr/>
                <h3>Información del Set de Cartas</h3>
                <table class="table" id="one_product">
                    <tr id="product">
                        <th>Imagen</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Fecha de lanzamiento</th>
                        <th>Precio</th>
                    </tr>
                <?php
                    while ($row1 = $result1->fetch_assoc()):
                ?>
                    <tr style="color: white">
                        <td> <img src="<?php echo $row1['Img']; ?>.jpg" class="imgproduct"></td>
                        <td><?php echo $row1['IDProductCode']; ?></td>
                        <td><?php echo $row1['Name']; ?></td>
                        <td><?php echo $row1['ReleaseDate']; ?></td>
                        <td><?php echo $row1['Price']; ?></td>
                    </tr>
                <?php
                    endwhile;
                ?>
                </table>
        </center>
    <?php
        $result2 = $con->query("SELECT * FROM product WHERE IDProductCode = '$id'") or die($con->error);
    ?>
        <center>
                <table class="table" id="one_product">
                    <tr id='product'>
                        <th>Descripción</th>
                    </tr>
                <?php
                    while ($row2 = $result2->fetch_assoc()):
                ?>
                    <tr style="color: white">
                        <td><?php echo $row2['Description']; ?></td>
                    </tr>
                <?php
                    endwhile;
                ?>
                </table>
        </center>
    <?php
        $result3 = $con->query("SELECT C.Img, C.Name, CAP.CardRarity, CAP.CardIndPrice FROM card C INNER JOIN cardproduct CAP ON C.IDCardCode = CAP.IDCardCode INNER JOIN product P ON CAP.IDProductCode = P.IDProductCode WHERE P.IDProductCode = '$id'") or die($con->error);
    ?>
        <center>
                <hr/><hr/><hr/>
                <h3>Set de Cartas</h3>
                <table class="table" id="one_card">
                    <tr id="card">
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Rareza</th>
                        <th>Precio</th>
                    </tr>
                <?php
                    while ($row3 = $result3->fetch_assoc()):
                ?>
                    <tr style="color: white">
                        <td> <img src="<?php echo $row3['Img']; ?>.jpg" class="imgcard"> </td>
                        <td><?php echo $row3['Name']; ?></td>
                        <td><?php echo $row3['CardRarity']; ?></td>
                        <td>$<?php echo $row3['CardIndPrice']; ?></td>
                    </tr>
                <?php
                    endwhile;
                ?>
                </table>
        </center>

        <?php
            function pre_r( $array ) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>

    <script>
        const body = document.querySelector('body');

        load();

        function load(){
            const dm = localStorage.getItem('darkmode');
            
            if(!dm){
                store('false');
            } else if(dm == 'true'){
                body.classList.add('darkmode');
            }
        }
    </script>
</body>
</html>
<?php 

}
else{
    header('Location: ../../login.php');
}
 ?>