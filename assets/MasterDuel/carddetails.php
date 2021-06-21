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
    <title>Detalles de la carta</title>
</head>
<body>
    <?php
        $id = $_GET['idcard'];
        $cat = $_GET['category'];
        $back = $_GET['back'];
    ?><div class="centradito">
        <?php include('headerdt.php') ?>
</div>
        <?php
            include('../../cnmd.php');
        ?>
        
        <?php
            if($cat == "Monster"){
                $mresult1 = $con->query("SELECT * FROM card C INNER JOIN cardmonster CM ON C.IDCardCode = CM.IDCardCode WHERE C.IDCardCode = $id") or die($con->error);
        ?>
                <center>
                        <hr/><hr/><hr/>
                        <h3>Detalles de la carta</h3>
                        <table class="table table-responsive-sm" id="one_card">
                            <?php
                                if($back == "normal"){
                                    echo "<tr id='backmonsternormal'>";
                                }
                                if ($back == "effect") {
                                    echo "<tr id='backmonstereffect'>";
                                }
                                if ($back == "ritual") {
                                    echo "<tr id='backmonsterritual'>";
                                }
                                if($back == "fusion"){
                                    echo "<tr id='backmonsterfusion'>";
                                }
                                if ($back == "synchro") {
                                    echo "<tr id='backmonstersynchro'>";
                                }
                                if ($back == "xyz") {
                                    echo "<tr id='backmonsterxyz'>";
                                }
                            ?>
                                <th>Imagen</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Tipo</th>
                            </tr>
                        <?php
                            while ($row1 = $mresult1->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td> <img src="<?php echo $row1['Img']; ?>.jpg" class="imgcard"></td>
                                <td><?php echo $row1['IDCardCode']; ?></td>
                                <td><?php echo $row1['Name']; ?></td>
                                <td><?php echo $row1['Category']; ?></td>
                                <td><?php echo $row1['Type']; ?></td>
                            </tr>
                            <?php $imgx = $row1['Img']; $codex = $row1['IDCardCode']; $namex = $row1['Name']; $categoryx = $row1['Category']; $typex = $row1['Type']; ?>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
            <?php
                $mresult2 = $con->query("SELECT * FROM card C INNER JOIN cardmonster CM ON C.IDCardCode = CM.IDCardCode WHERE C.IDCardCode = $id") or die($con->error);
            ?>
                <center>
                        <table class="table" id="one_card">
                            <?php
                                if($back == "normal"){
                                    echo "<tr id='backmonsternormal'>";
                                }
                                if ($back == "effect") {
                                    echo "<tr id='backmonstereffect'>";
                                }
                                if ($back == "ritual") {
                                    echo "<tr id='backmonsterritual'>";
                                }
                                if($back == "fusion"){
                                    echo "<tr id='backmonsterfusion'>";
                                }
                                if ($back == "synchro") {
                                    echo "<tr id='backmonstersynchro'>";
                                }
                                if ($back == "xyz") {
                                    echo "<tr id='backmonsterxyz'>";
                                }
                            ?>
                                <th>Atributo</th>
                                <th>Level</th>
                                <th>ATK / DEF</th>
                                <th>Description</th>
                                <th>Banlist</th>
                                <th>Archivo</th>
                            </tr>
                        <?php
                            while ($row2 = $mresult2->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td><?php echo $row2['Attribute']; ?></td>
                                <td><?php echo $row2['Level']; ?></td>
                                <td><?php echo $row2['ATK']; ?> / <?php echo $row2['DEF']; ?></td>
                                <td id="dt"><?php echo $row2['Description']; ?></td>
                                <td><?php echo $row2['Banlist']; ?></td>
                                <td> <input type="submit" onclick="genMonsterXML()" class="btn btn-success"value="Descargar en formato XML"> </input> </td>
                                <?php $attributex = $row2['Attribute']; $levelx = $row2['Level']; $atkx = $row2['ATK']; $defx = $row2['DEF']; $descriptionx = $row2['Description']; $banlistx = $row2['Banlist']; ?>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
            <?php
                $mresult3 = $con->query("SELECT P.IDProductCode, P.Name, P.ReleaseDate FROM product P INNER JOIN cardproduct CAP ON P.IDProductCode = CAP.IDProductCode WHERE CAP.IDCardCode = $id") or die($con->error);
            ?>
                <center>
                        <h3>Set de Caja</h3>
                        <table class="table" id="one_card">
                            <tr id="product">
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Fecha de lanzamiento</th>
                            </tr>
                        <?php
                            while ($row3 = $mresult3->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td><?php echo $row3['IDProductCode']; ?></td>
                                <td><?php echo $row3['Name']; ?></td>
                                <td><?php echo $row3['ReleaseDate']; ?></td>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
        <?php
            }
        ?>

        <?php
            if($cat == "Spell") {
                $sresult1 = $con->query("SELECT * FROM card WHERE IDCardCode = $id") or die($con->error);
        ?>   
                <center>
                        <hr/><hr/><hr/>
                        <h3>Detalles de la Carta</h3>
                        <table class="table" id="one_card">
                            <tr id="backspell">
                                <th>Imagen</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Tipo</th>
                            </tr>
                        <?php
                            while ($row1 = $sresult1->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td> <img src="<?php echo $row1['Img']; ?>.jpg" class="imgcard"></td>
                                <td><?php echo $row1['IDCardCode']; ?></td>
                                <td><?php echo $row1['Name']; ?></td>
                                <td><?php echo $row1['Category']; ?></td>
                                <td><?php echo $row1['Type']; ?></td>
                            </tr>
                            <?php $imgx = $row1['Img']; $codex = $row1['IDCardCode']; $namex = $row1['Name']; $categoryx = $row1['Category']; $typex = $row1['Type']; ?>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
            <?php
                $sresult2 = $con->query("SELECT * FROM card WHERE IDCardCode = $id") or die($con->error);
            ?>
                <center>
                        <table class="table" id="one_card">
                            <tr id="backspell">
                                <th>Description</th>
                                <th>Banlist</th>
                                <th>Archivo</th>
                            </tr>
                        <?php
                            while ($row2 = $sresult2->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td id="dt"><?php echo $row2['Description']; ?></td>
                                <td><?php echo $row2['Banlist']; ?></td>
                                <td> <input type="submit" onclick="genSpellTrapXML()" class="btn btn-success" value="Descargar en formato XML"> </input> </td>
                                <?php $descriptionx = $row2['Description']; $banlistx = $row2['Banlist']; ?>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
            <?php
                $sresult3 = $con->query("SELECT P.IDProductCode, P.Name, P.ReleaseDate FROM product P INNER JOIN cardproduct CAP ON P.IDProductCode = CAP.IDProductCode WHERE CAP.IDCardCode = $id") or die($con->error);
            ?>
                <center>
                        <h3>Set de Cajas</h3>
                        <table class="table" id="one_card">
                            <tr id="product">
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Fecha de Lanzamiento</th>
                            </tr>
                        <?php
                            while ($row3 = $sresult3->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td><?php echo $row3['IDProductCode']; ?></td>
                                <td><?php echo $row3['Name']; ?></td>
                                <td><?php echo $row3['ReleaseDate']; ?></td>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
        <?php
                $attributex = 0; $levelx = 0; $atkx = 0; $defx = 0;
            }
        ?>

        <?php
            if($cat == "Trap"){
                $tresult1 = $con->query("SELECT * FROM card WHERE IDCardCode = $id") or die($con->error);
        ?>
                <center>
                        <hr/><hr/><hr/>
                        <h3>Detalles de la carta</h3>
                        <table class="table" id="one_card">
                            <tr id="backtrap">
                                <th>Imagen</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Tipo</th>
                            </tr>
                        <?php
                            while ($row1 = $tresult1->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td> <img src="<?php echo $row1['Img']; ?>.jpg" class="imgcard"></td>
                                <td><?php echo $row1['IDCardCode']; ?></td>
                                <td><?php echo $row1['Name']; ?></td>
                                <td><?php echo $row1['Category']; ?></td>
                                <td><?php echo $row1['Type']; ?></td>
                            </tr>
                            <?php $imgx = $row1['Img']; $codex = $row1['IDCardCode']; $namex = $row1['Name']; $categoryx = $row1['Category']; $typex = $row1['Type']; ?>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
            <?php
                $tresult2 = $con->query("SELECT * FROM card WHERE IDCardCode = $id") or die($con->error);
            ?>
                <center>
                        <table class="table" id="one_card">
                            <tr id="backtrap">
                                <th>Description</th>
                                <th>Banlist</th>
                                <th>Archivo</th>
                            </tr>
                        <?php
                            while ($row2 = $tresult2->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td id="dt"><?php echo $row2['Description']; ?></td>
                                <td><?php echo $row2['Banlist']; ?></td>
                                <td> <input type="submit" onclick="genSpellTrapXML()" class="btn btn-success" value="Descargar en formato XML"> </input> </td>
                            </tr>
                            <?php $descriptionx = $row2['Description']; $banlistx = $row2['Banlist']; ?>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
            <?php
                $tresult3 = $con->query("SELECT P.IDProductCode, P.Name, P.ReleaseDate FROM product P INNER JOIN cardproduct CAP ON P.IDProductCode = CAP.IDProductCode WHERE CAP.IDCardCode = $id") or die($con->error);
            ?>
                <center>
                        <h3>Set de Caja</h3>
                        <table class="table" id="one_card">
                            <tr id="product">
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Fecha de Lanzamiento</th>
                            </tr>
                        <?php
                            while ($row3 = $tresult3->fetch_assoc()):
                        ?>
                            <tr style="color: white">
                                <td><?php echo $row3['IDProductCode']; ?></td>
                                <td><?php echo $row3['Name']; ?></td>
                                <td><?php echo $row3['ReleaseDate']; ?></td>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                        </table>
                </center>
        <?php
                $attributex = 0; $levelx = 0; $atkx = 0; $defx = 0;
            }
        ?>

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
    
    <script>
        function genMonsterXML(){
                var xmltext = "<CARD> <DETAILS> <IMAGE><?php echo $imgx ?></IMAGE> <CODE><?php echo $codex ?></CODE> <NAME><?php echo $namex ?></NAME> <CATEGORY><?php echo $categoryx ?></CATEGORY> <TYPE><?php echo $typex ?></TYPE> <ATTRIBUTE><?php echo $attributex ?></ATTRIBUTE> <LEVEL><?php echo $levelx ?></LEVEL> <ATK><?php echo $atkx ?></ATK> <DEF><?php echo $defx ?></DEF> <BANLIST><?php echo $banlistx ?></BANLIST> </DETAILS> <DESCRIPTION><?php echo $descriptionx ?></DESCRIPTION> </CARD>";
            
                var filename = "<?php echo $imgx ?>.xml";
                var doc = document.createElement('a');
                var myblob = new Blob([xmltext], {type: 'text/plain'});

                doc.setAttribute('href', window.URL.createObjectURL(myblob));
                doc.setAttribute('download', filename);

                doc.dataset.downloadurl = ['text/plain', doc.download, doc.href].join(':');
                doc.draggable = true; 
                doc.classList.add('dragout');

                doc.click();
            }

        function genSpellTrapXML(){
                var xmltext = "<CARD> <DETAILS> <IMAGE><?php echo $imgx ?></IMAGE> <CODE><?php echo $codex ?></CODE> <NAME><?php echo $namex ?></NAME> <CATEGORY><?php echo $categoryx ?></CATEGORY> <TYPE><?php echo $typex ?></TYPE> <BANLIST><?php echo $banlistx ?></BANLIST> <DESCRIPTION><?php echo $descriptionx ?></DESCRIPTION></DETAILS> </CARD>";

                var filename = "<?php echo $imgx ?>.xml";
                var doc = document.createElement('a');
                var myblob = new Blob([xmltext], {type: 'text/plain'});

                doc.setAttribute('href', window.URL.createObjectURL(myblob));
                doc.setAttribute('download', filename);

                doc.dataset.downloadurl = ['text/plain', doc.download, doc.href].join(':');
                doc.draggable = true; 
                doc.classList.add('dragout');

                doc.click();
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