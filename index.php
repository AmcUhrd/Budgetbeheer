<!DOCTYPE html>

  <html lang="en" dir="ltr">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="google-signin-client_id" content="130326705414-kn31a741421077es8rhau50jdj2dar1h.apps.googleusercontent.com">

    <title>Budget Beheer</title>

      <!-- Includes -->

        <?php include 'codes/php/bootstrap_include.php';?>

        <!-- Scripts -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!-- Stylesheets -->

          <link rel="stylesheet" href="codes/css/index.css">

    </head>

    <body>

      <?php include 'assets/blocks/header.php';?>

      <div class="container-fluid">

          <div class="g-signin2" data-onsuccess="onSignIn"></div>



        </div>

        <?php include 'assets/blocks/footer.php';?>

    </body>

</html>
