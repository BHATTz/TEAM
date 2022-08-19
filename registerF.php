
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    
  </head>
  <body style="background-color: #111827">
    <!-- header -->

    <header class="text-gray-400 bg-gray-900 body-font">
      <div
        class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
      >
        <a
          class="flex title-font font-medium items-center text-white mb-4 md:mb-0"
        >
          <a href="index.html" class="active">
            <img src="img/photography.png" alt="logo" height="50" width="50"
          /></a>
          <span class="ml-3 text-xl"
            ><a href="index.html" class="active">YourDailydDairyCart</a></span
          >
        </a>
        <nav
          class="md:ml-auto flex flex-wrap items-center text-base justify-center font-serif"
        >
          <a class="mr-5 hover:text-white" a href="aboutus.html">About Us</a>
          <a class="mr-5 hover:text-white" a href="tips.html">Tips</a>
          <a class="mr-5 hover:text-white" a href="team.html">Team</a>
        </nav>

        <button
          class=" font-serif inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
        >
          <a href="http://127.0.0.1:5500/login.html">Login</a>
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
    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-8">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-2 text-blue-200"
          >
            Register As Farmer
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
                  >city:</label
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
              <input type="submit" name="submit" value="Submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
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
        $city = $_POST['city'];
        $email = $_POST['email'];
        $milk_qty = $_POST['milk_qty'];
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $query = "insert into far(name,phone,state,city,email,qty,userid,passowrd)values('$name','$phone','$state','$city','$email','$milk_qty','$user_id','$password')";
        $fire=mysqli_query($con,$query);
        if($fire)
        {
          ?>
          <script>
              alert("data inserted successfully");
          </script>
          <?php
        }else{
          ?>
          <script>
              die("data not inserted successfully");
          </script>
          <?php
        }
    } 
       ?>
      </div>
    </section>
    <!-- footer -->
   <hr>
    <footer class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2
              class="title-font font-medium text-white tracking-widest text-sm mb-3"
            >
              CATEGORIES
            </h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-400 hover:text-white">First Link</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Second Link</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Third Link</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2
              class="title-font font-medium text-white tracking-widest text-sm mb-3"
            >
              CATEGORIES
            </h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-400 hover:text-white">First Link</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Second Link</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Third Link</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2
              class="title-font font-medium text-white tracking-widest text-sm mb-3"
            >
              TEAMS
            </h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-400 hover:text-white">Sarthak Bhatt</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Ritik Rana</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Gaurav kumar</a>
              </li>
              <li>
                <a class="text-gray-400 hover:text-white">Sonu</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2
              class="title-font font-medium text-white tracking-widest text-sm mb-3"
            >
              SUBSCRIBE
            </h2>
            <div
              class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start"
            >
              <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                <label
                  for="footer-field"
                  class="leading-7 text-sm text-gray-400"
                  >Enter email</label
                >
                <input
                  type="text"
                  id="footer-field"
                  name="footer-field"
                  class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:bg-transparent focus:ring-2 focus:ring-green-900 focus:border-green-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
              <button
                class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded"
              >
                Submit
              </button>
            </div>
            <p class="text-gray-500 text-sm mt-2 md:text-left text-center">
              Subscribe to our newsletter to get
              <br class="lg:block hidden" />updated for latest news.
            </p>
          </div>
        </div>
      </div>
      <div class="bg-gray-800 bg-opacity-75">
        <div
          class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col"
        >
          <a
            class="flex title-font font-medium items-center md:justify-start justify-center text-white"
          >
            <a href="index.html" class="active">
              <img src="img/photography.png" alt="logo" height="50" width="50"
            /></a>
            <span class="ml-3 text-xl"
              ><a href="index.html" class="active">YourDailydDairyCart</a></span
            >
          </a>
          <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">
            © 2022 SGGS Team 3 —
            <a
              href="https://twitter.com/knyttneve"
              class="text-gray-500 ml-1"
              target="_blank"
              rel="noopener noreferrer"
              >@YourDailydDairyCart</a
            >
          </p>
          <span
            class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
          >
            <a class="text-gray-400">
              <svg
                fill="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <path
                  d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-400">
              <svg
                fill="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <path
                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-400">
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path
                  d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-400">
              <svg
                fill="currentColor"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="0"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
                ></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>
    <script src="min.js"></script>
  </body>
</html>
