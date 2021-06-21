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
     <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>Cards</title>
</head>
<body>
 <center><div class="centradito">
     <?php include('header.php') ?>
 </div>
    <hr/><hr/>
   
        <section style="margin-top: 5%;">
            <input class="form-control" type="text" name="search" id="search" placeholder="Buscar una carta...">
        </section>
    </center>

    <center>
        <section id="card_table" class="table"></section>
    </center>

    <script>
        $(obtaincards());
    
        function obtaincards(c) {
            $.ajax({
                url : 'showcards.php',
                type : 'POST',
                dataType : 'html',
                data : { c : c },
            })
    
            .done(function(result){
                $('#card_table').html(result);
            })
        }
    
        $(document).on('keyup', '#search', function(){
            var searchValue = $(this).val();
            if (searchValue != "") {
                obtaincards(searchValue);
            } else {
                obtaincards();
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