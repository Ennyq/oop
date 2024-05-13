
<?php 

require "functions.php";
if(isset($_POST['submit'])){
 $response =  registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password']);
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link href="../dist/output.css" rel="stylesheet" />


</head>
<body class="" style="background-image: url(purplebg.jpg) ;" class="w-full h-full bg-cover bg-no-repeat ">


    <div class="flex items-center justify-center pt-40	">

    <div class=" bg-cover bg-no-repeat w-96 h-96" style="background-image: url(saturo.jpg);">
    
        <h1 class="uppercase text-5xl font-bold text-sky-700 mb-5 font-oswald hover:text-red-800  " ></h1>
          
    </div>
 
   
    

    




        <div class="bg-white w-96 h-96 block pt-10 pl-3 items-center justify-center ">
          <h3 class="font-bold pb-3 text-2xl text-purple-700">"When Granted Everything, You Can't Do Anything..."</h3>



          <form action="" method="POST" autocomplete="off">









          <div class=" pl-10 ">
          <svg class="inline  w-8 text-purple-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
</svg>

            <input class="rounded-full bg-purple-700  border px-4 py-1 w-54 " type="text"  name="email" placeholder="Email" value="<?php echo @$_POST['email']; ?>" >
        </div>








                <div class=" pl-10">
                    <svg class="inline  w-8 text-purple-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
            <input class="rounded-full bg-purple-700  border px-4 py-1 w-54 " type="text" id="username" name="username" placeholder="Username"  value="<?php echo @$_POST['username']; ?>" >
        </div>


       













        <div class=" pl-10">
            <svg class="inline w-8 text-purple-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
              
            <input  class="rounded-full bg-purple-700  border px-4 py-1 w-54" type="password" id="password" name="password" placeholder="Password" value="<?php echo @$_POST['password']; ?>" >
</div>





















<div class="pb-3 pl-10">
            <svg class="inline w-8 text-purple-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
              
            <input  class="rounded-full bg-purple-700  border px-4 py-1 w-54" type="password" id="password" name="confirm-password" placeholder="ConfirmPassword" value="<?php echo @$_POST['confirm-password']; ?>" >
</div>







            <div class="pt-5 pl-32 ">
           <button type="submit" name="submit" class="bg-purple-700 rounded px-3 hover:bg-cyan-700 hover:text-white">Register</button>
           </div>
<div class="pt-5 ">
            <span>Aldready a sorcecer?  <a href="index.php" class="hover:bg-cyan-700 rounded">Go back</a></span>

            <?php 
            
            if(@$response == "success"){

                ?>

                <p class="success">Your registration was successfull</p>

                <?php 

            }

            else{
                ?>
                <p class="error"><?php echo @$response; ?> </p>
                <?php
            }
            
            
            ?>

      
        </div>

        </div>
        </div>
    </form>
    </div>


    
</body>
</html>