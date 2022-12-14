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

    <header class="text-gray-400 bg-gray-900 body-font">
      <div
        class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-left"
      >
        <a
          class="flex title-font font-serif items-center text-white mb-4 md:mb-0"
        >
          <a href="index.php" class="active">
            <img src="img/photography.png" alt="logo" height="50" width="50"
          /></a>
          <span class="ml-3 text-xl"
            ><a href="index.php" class="active">YourDailydDairyCart</a></span
          >
        </a>
        <nav
          class="md:ml-auto flex flex-wrap items-center text-base justify-center font-serif"
        >
          <a class="mr-5 hover:text-white"href="aboutus.php">About Us</a>
          <a class="mr-5 hover:text-white"href="tips.php">Tips</a>
          <a class="mr-5 hover:text-white"href="team.php">Team</a>
        </nav>

        <button
          class="font-serif inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
        >
          <a href="business.php">Go Back</a>
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-4 h-4 ml-1"
            viewBox="0 0 24 24"
          >
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
      </div>
    </header>

    <!-- content -->
    <?php
    error_reporting(0);
    $userid = $_SESSION['user'];
    echo $userid;
    include("conn.php");
    
  
         $user_search="select * from bus where userid='$userid'";
         $query=mysqli_query($con,$user_search);

        
        $array=mysqli_fetch_array($query);
         if(isset($_POST['submit']))
         {    
        
          $name = $_POST['name'];
          $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address =$_POST['address'];
            $userid = $_POST['userid'];
            $password = $_POST['password'];
            $qty = $_POST['qty'];
            $price= $_POST['price'];
            $update="update bus set name='$name',phone='$phone',email='$email',address='$address',userid='$userid',password='$password',qty='$qty',price='$price' where userid='$userid'";
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
            <p class="text-base"><?php echo "Required Quantity in litre:".$qty;?></p>
            <p class="text-base"><?php echo "Per Litre Price:".$price;?></p>
          </div>
          <br><br>
          <a href="supplier.php">
          <div class="p-2 w-full">
             <input type="submit" name="submit" value="Supplier Requests" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div> 
          </a>
          </div>
        
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-8">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-2 text-blue-200"
          >
            Registered Data
          </h1>
        </div>
        <form method="POST" action="dbbusiness.php">
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
            <div class="p-10 w-2/2">
              <div class="relative">
                <label for="pincode" class="leading-7 text-base text-gray-300"
                  >Email Id:</label
                >
                <input
                  type="text"
                  id="email"
                  name="email"
                  value="<?php echo $array['email'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-24 leading-8 transition-colors duration-200 ease-in-out"
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
                  value="<?php echo $array['userid'];?>"
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
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="state" class="leading-7 text-base text-gray-300"
                  >Total Quantity:</label
                >
                <input
                  type="text"
                  id="qty"
                  name="qty"
                  value="<?php echo $array['qty'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="pincode" class="leading-7 text-base text-gray-300"
                  >Per Liter Price:</label
                >
                <input
                  type="text"
                  id="price"
                  name="price"
                  value="<?php echo $array['price'];?>"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="p-2 w-full">
              <input type="submit" name="submit" value="update" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
        </form>
       </section> 
       
       
 
 <!-- footer -->

 <?php include("include/footer.php"); ?>

<script src="js.js"></script>
</body>
</html>