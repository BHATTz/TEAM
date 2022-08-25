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
                >Information</a
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
              <span class="text-white ml-5">Product Quantity</span>
              <span class="ml-auto text-gray-100 mr-5"> <?php echo $qty;?> KG</span>
            </div>
            <div class="flex">
              <span class="title-font font-medium text-3xl text-white-200"
                ></span
              >
              <div class="flex ml-auto text-white border-0 py-2 px-6">
              <?php echo $phone." , ".$email;?>
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
