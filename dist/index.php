<?php 

require("functions.php");
if(isset($_POST['submint'])){
    $response = loginUser($_POST['username'], $_POST['password']);
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
<body class="flex items-center justify-center  w-full h-full bg-cover bg-no-repeat 
"  style="background-image: url(jjk.png) ;">
 
    <div class="flex justify-center items-center mt-24 pt-24  ">
        
       

       
         <div class="pt-10 bg-cyan-500 rounded  ">
            
            
            <div class="grid text-center  m-3">
             
            <h1 class="uppercase text-5xl font-bold text-sky-700 mb-5 font-oswald hover:text-red-800	 " >Jujutsu no Login</h1>

            


            <form action="" method="POST" autocomplete="off"> 
           
           <div class="pb-5 pt-10">
               <svg class="inline  w-8 text-cyan-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
               </svg>
               <input class="rounded-full bg-cyan-700  border px-4 py-1 w-54 " type="text" id="username" name="username" placeholder="Username " value="<?php echo @$_POST['username'] ?>" >
           </div>
       
           <div class="pb-10">
               <svg class="inline w-8 text-cyan-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
               </svg>
               <input class="rounded-full bg-cyan-700  border px-4 py-1 w-54" type="password" id="password" name="password" placeholder="Password" value="<?php echo @$_POST['password'] ?>">
           </div>
       
           <div class="mb-10">
               <button type="submint" name="submint" class=" text-cyan-200  bg-cyan-700 px-4 py-1 text-sm rounded-full w-24 hover:bg-red-800 hover:uppercase hover:text-sky-800">Login</button>
               <p class="error"><?php echo @$response ?></p>
           </div>
       
           <div class="pt-10">
               <span class="bg-cyan-800-red-800" >Are you not a Jujutsu Sorcecer? <a href="register.php" class="hover:bg-purple-800 text-white rounded">Register!</a></span>
           </div>
       
       </form>
       


    </div>
   
</body>
</html>