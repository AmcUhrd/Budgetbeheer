<!DOCTYPE html>

  <html lang="en" dir="ltr">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Budget Beheer</title>

      <!-- Includes -->

        <?php include 'codes/php/bootstrap_include.php';?>

        <!-- Scripts -->

        <!-- Stylesheets -->

          <link rel="stylesheet" href="codes/css/index.css">

    </head>

    <body>

      <?php include 'assets/blocks/header.php';?>

      <div class="container-fluid">

          <form class="form-signin col-md-2" id="login">
            <span id="reauth-email" class="reauth-email">
            </span>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                  <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
          </form><!-- /form -->

        </div>

        <?php include 'assets/blocks/footer.php';?>

    </body>

</html>
