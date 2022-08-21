<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body style="background-color: #111827">
    <!-- header -->

    <?php include("include/header.php"); ?>
    
    <!-- content -->
  
    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
      <form action="regesterB.php" method="post">
        <div class="flex flex-col text-center w-full mb-8">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-2 text-blue-200"
          >
            Register As Business
          </h1>
        </div>
        
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
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="state" class="leading-7 text-base text-gray-300"
                  >State/City:</label
                >
                <input
                  type="text"
                  id="state"
                  name="state"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>

            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-base text-gray-300"
                  >Email Id:</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="milk_qty" class="leading-7 text-base text-gray-300"
                  >required Qty:</label
                >
                <input
                  type="text"
                  id="milk_qty"
                  name="milk_qty"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="price" class="leading-7 text-base text-gray-300"
                  >Price/kg:</label
                >
                <input
                  type="text"
                  id="price"
                  name="price"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                  id="user_id"
                  name="user_id"
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
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-full"></div>
            <div class="p-2 w-full">
              <input type="submit" value="Submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
          </div>
        </div>
        </form>
        <?php
    include 'conn.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $milk_qty = $_POST['milk_qty'];
        $price = $_POST['price'];
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $query = "insert into bus(name,phone,state,email,qty,price,userid,password)values('$name','$phone','$state','$email','$milk_qty','$price','$user_id','$password')";
        $fire=mysqli_query($con,$query);
        if($fire)
        {
          ?>
          <script>
              location.replace("login.php");
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
      </div>
    </section>
    <!-- footer -->
  <hr>
  <?php include("include/footer.php"); ?>

  </body>
</html>
