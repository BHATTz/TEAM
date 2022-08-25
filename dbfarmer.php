<?php
session_start();

?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="main.css" />
  </head>

  <body style="background-color:#111827">
    
    <!-- header -->

    <?php include("include/header.php"); ?>

    <!-- content -->
    <?php
    include 'conn.php';
    error_reporting(0);
    $userid = $_SESSION['user'];
    $user_search="select * from far where userid='$userid'";
    $query=mysqli_query($con,$user_search);

   
   $array=mysqli_fetch_array($query);
   
   if(isset($_POST['submit']))
   {  
     $name = $_POST['name'];
     $phone = $_POST['phone'];
       $state = $_POST['state'];
       $email = $_POST['email'];
       $address =$_POST['address'];
       $userid = $_POST['userid'];
       $password = $_POST['password'];
       
       $update="update far set name='$name',phone='$phone',state='$state',email='$email',address='$address',userid='$userid',password='$password' where userid='$userid'";
        $fire=mysqli_query($con,$update);
        if($fire)
        {
          ?>
          <script>
              alert("updated successfully");
           </script>
          <?php
        }else{
          ?>
          <script>
              alert("data not inserted successfully");
          </script>
          <?php
        }
       }
       
            
    ?>  
   
  
    <section class="text-gray-600 body-font">
      <div class="flex flex-col sm:flex-row mt-10">
     
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
        <h1 class="font-bold title-font mt-4 text-white text-3xl">Profile</h1>
        <br><br><br><br><br><br>
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
        
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Phoebe Caulfield</h2>
            <div class="p-2 w-full">
              <input type="submit" name="submit" value="Upload photo" class="flex mx-auto text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base"><?php echo"$name";?></p>
            <p class="text-base"><?php echo "@".$userid;?></p>
          </div>
          <br><br>
          <a href="business.php">
          <div class="p-2 w-full">
             <input type="submit" name="submit" value="Available companies" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div> 
          </a>
          </div>
        
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-8">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-2 text-blue-200"
          >
            Register As Farmer
          </h1>
        </div>
        <form method="POST"action="dbfarmer.php">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-base text-gray-300"
                  >Full Name:</label
                >
                <input
                  type="text"
                  id="name"
                  name="name"
                  value="<?php echo $array['name'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="phone" class="leading-7 text-base text-gray-300"
                  >Phone Number:</label
                >
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  value="<?php echo $array['phone'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="state" class="leading-7 text-base text-gray-300"
                  >State:</label
                >
                <input
                  type="text"
                  id="state"
                  name="state"
                  value="<?php echo $array['state'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="pincode" class="leading-7 text-base text-gray-300"
                  >Email Id:</label
                >
                <input
                  type="text"
                  id="email"
                  name="email"
                  value="<?php echo $array['email'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-10 w-2/2">
              <div class="relative">
                <label for="email" class="leading-7 text-base text-gray-300"
                  >Full address/PIN code:</label
                >
                <input
                  type="textbox"
                  id="address"
                  name="address"
                  value="<?php echo $array['address'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-24 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="user_id" class="leading-7 text-base text-gray-300"
                  >User Id:</label
                >
                <input
                  type="text"
                  id="userid"
                  name="userid"
                  value="<?php echo $userid;?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="password" class="leading-7 text-base text-gray-300"
                  >Password:</label
                >
                <input
                  type="password"
                  id="password"
                  name="password"
                  value="<?php echo $array['password'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-full"></div>
            <div class="p-2 w-full">
              <input type="submit" name="submit" value="Submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
          </div>
        </div>
        </form>
       </section> 
       
      
  
 
 <!-- footer -->

 <?php include("include/footer.php"); ?>

<script src="js.js"></script>
</body>
</html>
