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
          <button
          class="font-serif inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
        >
          <a href="dbbusiness.php">Profile</a>
        </nav>
        &nbsp;&nbsp;

        <button
          class="font-serif inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
        >
          <a href="login.php">LogOut</a>
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
    include("conn.php");
    if($con)
    {
      $search = "SELECT * from far";
      $query = mysqli_query($con,$search);
        
        $user_count = mysqli_num_rows($query);
          for($i =0; $i < $user_count; $i++)
          {
            $details = mysqli_fetch_assoc($query);
            $userid = $details['userid'];
            $name = $details['name'];
            $phone = $details['phone'];
            $email = $details['email'];
            $address = $details['address'];
            $qty = $details['qty'];
            $price = $details['price'];
    ?>

    <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <div class="lg:w-4/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">
              <?php echo"@".$userid;?>
            </h2>
            <h1 class="text-gray-100 text-3xl title-font font-medium mb-4">
            <?php echo $name;?>

            </h1>
            <div class="flex mb-4">
              <a class="flex-grow border-b-2 border-gray-100 py-2 text-lg px-1"
                >Address</a
              >
            </div>
            <p class="leading-relaxed mb-4">
            <?php echo $address;?>
            </p>
            <div class="flex border-t border-gray-200 py-2 ">
              <span class="text-white ml-5">Dairy Animals</span>
              <span class="ml-auto text-gray-100 mr-5">Cows</span>
            </div>
            <div class="flex border-t border-b mb-6 border-gray-200 py-2 ">
              <span class="text-white ml-5">Per Day Production</span>
              <span class="ml-auto text-gray-100 mr-5"><?php echo $qty.  "ltr."?></span>
            </div>
            <div class="flex">
              <span class="title-font font-medium text-3xl text-white-200"
                >&#8377;<?php echo $price;?></span
              ></div>
            <div class="flex">
              <span class="title-font font-medium text-3xl text-white-200"
                ></span
              >
              <div class="flex ml-auto text-white border-0 py-2 px-6">
              <a href="tel:<?php echo $phone.""?>"><?php echo $phone.""?></a>
              &nbsp;&nbsp;
                <a href="mailto:<?php echo $email.""?>"><?php echo $email.""?></a>
 
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
          }
        }
    ?>

    <!-- footer -->

    <?php include("include/footer.php"); ?>

  </body>
</html>
