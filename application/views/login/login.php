<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login Form Design | CodeLab</title> -->
    <link rel="stylesheet" href="<?= base_url ('assets/admin') ?> /css/login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
      Login Admin
      </div>
      <form action="#">
              <div class="field">
                <input type="text" required>
                <label>Email Address</label>
              </div>
              <div class="field">
                <input type="password" required>
                <label>Password</label>
              </div>
             <!-- <div class="content">
                <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
                </div>
              <div class="pass-link">
              <a href="#">Forgot password?</a></div>
              </div> -->
              <div class="field">
                <input type="submit" value="Login">
              </div>
      </form>
</div>
</body>
</html>
