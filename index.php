<?php  
$link = [
    "Introduzione",
    "Norme sulla privacy",
    "Termini di servizio",
    "Tecnologie",
    "Domande frequenti"
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header >

    <div class="nav-bar border-bottom ">

        <div class="logo d-flex align-items-center ms-3">
        <img  src="img/logo.svg" alt="logo">  <h2 class="ms-2 text-secondary">Privacy e termini</h2>
        </div>
        <ul class="nav ">
            <?php 
                for( $i = 0; $i<count($link); $i++ ) {
                    echo "<li class='nav-item'>" . "<a class='nav-link text-secondary' href='#'>" . $link[$i] . "</a>" . "</li>";
                }
            ?>
        </ul>
    </div>
    
       
    
</header>



    
</body>
</html>