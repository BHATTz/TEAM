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
            <p class="text-base">Farmer Name</p>
            <p class="text-base">@haryana</p>
          </div>
          <br><br>
          <a href="business.php">
          <div class="p-2 w-full">
             <input type="submit" name="submit" value="Available companies" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div> 
          </a>
                   
    
        </div>
        <div class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
      <br><br><br><br>
        <div class="flex flex-col text-center w-full mb-8">
          <h1
            class="sm:text-2xl text-2xl font-medium title-font mb-2 text-blue-200"
          >
            Fields to Update
          </h1>
        </div>
        <form method="post" action="registerF.php">
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
                  >State:</label
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
                <label for="pincode" class="leading-7 text-base text-gray-300"
                  >City:</label
                >
                <input
                  type="text"
                  id="city"
                  name="city"
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
                  >Milk Qty:</label
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
              <input type="submit" name="submit" value="Update" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
          </div>
</div>
        </div>
        </form>
  </div>
       </section> 
 
 <!-- footer -->

 <?php include("include/footer.php"); ?>

<script src="js.js"></script>
</body>
</html>
