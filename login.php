<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body style="background-color: #111827">
    <!-- header -->

    <?php include("include/header.php"); ?>

    <!-- content -->

    <section class="text-gray-600 body-font">
    <form method="post" action="login.php">
      <div class="container px-10 py-24 mx-auto flex flex-wrap items-center">
        <br />
        <div
          class="lg:w-2/5 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"
        >
          <p class="text-2xl text-white mt-1">
            Don't Have An Account?<br />
            Please first Register your self.
          </p>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <button
            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
          >
            <a href="reg.html">Register</a>
          </button>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <div
          class="lg:w-2/1 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"
        >
          <h2 class="text-white text-lg font-medium title-font mb-5">
            Login In
          </h2>
          <div class="relative mb-4">
            <label for="type:" class="leading-7 text-sm text-white"
              >Select type:</label
            >
            <select
              type="opt"
              id="opt"
              name="opt"
              class="w-full bg-gray-300 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            >
            <option value="#">Select</option>
            <option value="farmer">farmer</option>
            <option value="business">business</option>
             </select>
            </div>
          <div class="relative mb-4">
            <label for="full-name" class="leading-7 text-sm text-white"
              >User Id</label
            >
            <input
              type="text"
              id="userid"
              name="userid"
              class="w-full bg-gray-300 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>
          <div class="relative mb-4">
            <label for="password" class="leading-7 text-sm text-white"
              >Password</label
            >
            <input
              type="password"
              id="password"
              name="password"
              class="w-full bg-gray-300 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>
          <button
          class="text-xs text-gray-500 mt-3">forgot Password -></button>
      </div>
      </form>
      <?php
     include 'conn.php';
     if(isset($_POST['submit']))
     {
         $userid = $_POST['userid'];
         $password = $_POST['password'];
         $option = $_POST['opt'];
         switch($option)
         {
          case "business":
         $user_search="select * from bus where userid='$userid' ";
         $query=mysqli_query($con,$user_search);
        
        $user_count=mysqli_num_rows($query);
         if($user_count)
         {
           $user_pass=mysqli_fetch_assoc($query);
           $db_pass=$user_pass['password'];
         if($password===$db_pass)
         {
           ?>
           <script>
               alert("login successfully");
              location.replace("business.php");
           </script>
           <?php
         }
         else{
          ?>
          <script>
          alert("incorrect password");
          </script>
          <?php
         }
        }else{
          ?>
           <script>
               alert("invalid username");
           </script>
           <?php
        }
      break;
      case "farmer":
        $user_search="select * from far where userid='$userid' ";
        $query=mysqli_query($con,$user_search);
       
       $user_count=mysqli_num_rows($query);
        if($user_count)
        {
          $user_pass=mysqli_fetch_assoc($query);
          $db_pass=$user_pass['password'];
        if($password===$db_pass)
        {
          ?>
          <script>
              alert("login successfully");
             location.replace("farmer.php");
          </script>
          <?php
        }
        else{
         ?>
         <script>
         alert("incorrect password");
         </script>
         <?php
        }
       }else{
         ?>
          <script>
              alert("invalid username");
          </script>
          <?php
       }
       break;
      }
     } 
    



      ?>
    </section>

    <!-- Footer -->

    
    <?php include("include/footer.php"); ?>

  </body>
</html>
