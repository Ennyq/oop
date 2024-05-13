<?php 

require("functions.php");

if(!isset($_SESSION['user'])){
    header("location: index.php");
    exit();
}


if(isset($_GET['logout'])){
    logoutUser();
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body style="background-image: url(almightytodo.gif) ;" class="w-full h-full bg-cover bg-no-repeat  ">

    <div class="text-cyan-900 font-bold text-9xl text-center ">
    <H1 class=" hover:text-red-800 pt-32 md:text-2xl lg:text-9xl">WELCOME MY BROTHER <?php echo $_SESSION['user'] ?> </H1>                
</div>

<div class="grid pt-10 pl-32">
    <span class="text-sky-700 text-2xl font-bold  text-center ">"The bells of the Gion monastery in India echo with the warning that all things are impermenant.  </span>
    
    <span class="text-sky-700 text-2xl font-bold  text-center ">The blossoms of the sala trees teach us through their hues that what flourishes must fade. However! We are the exception!"</span>
    </div>

  
  
  
  <div class="   pt-32 flex items-center justify-center">
    <a href="?logout" class= "text-cyan-200  bg-cyan-700 px-4 py-1 text-sm rounded-full w-24 hover:bg-red-800 hover:uppercase hover:text-sky-800 ">Logout</a>
    </div>
</body>
</html>






