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
    <title>Cards</title>
</head>
<body><div class="centradito">
     <?php include('header.php') ?></div>
    <hr/><hr/>
    <center>
        <section style="margin-top: 5%;">
            <input class="form-control" type="text" name="search" id="search" placeholder="Buscar una caja por nombre o fecha...">
        </section>
    </center>

    <center>
        <section id="product_table"></section>
    </center>

    <script>
        $(obtainproducts());
    
        function obtainproducts(p) {
            $.ajax({
                url : 'showproducts.php',
                type : 'POST',
                dataType : 'html',
                data : { p : p },
            })
    
            .done(function(result){
                $('#product_table').html(result);
            })
        }
    
        $(document).on('keyup', '#search', function(){
            var searchValue = $(this).val();
            if (searchValue != "") {
                obtainproducts(searchValue);
            } else {
                obtainproducts();
            }
        });
    </script>

    <script>
        const darkm = document.querySelector('#dark');
        const body = document.querySelector('body');

        load();

        darkm.addEventListener('click', e =>{
            body.classList.toggle('darkmode');
            store(body.classList.contains('darkmode'));
        });

        function load(){
            const dm = localStorage.getItem('darkmode');

            if(!dm){
                store('false');
            } else if(dm == 'true'){
                body.classList.add('darkmode');
            }
        }

        function store(value){
            localStorage.setItem('darkmode', value);
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