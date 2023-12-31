<?php include('../php/dbcon.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="..\style\login.css">
</head>

<body>

  <!-- Login Section -->
  <section id="login" class="login-section-padding">
    <div class="container">
      <div class="mx-auto" style="height: 20px;">
      </div>
      <h1 class="h1-design">Welcome</h1>
    </div>
    <div class="box-border">
      <div class="mx-auto" style="height: 50px;">
      </div>
      <form method="POST" action="login.php">
        <?php include('../php/errors.php'); ?>
        <div class="row">
          <div class="col">
            <fieldset>
              <h3 class="emailfield-design">Email</h3>
              <input type="email" class="email" name="email" placeholder="incup@gmail.com" value="<?php echo $email; ?>"
                required>
            </fieldset>
            <div class="mx-auto" style="height: 50px;">
            </div>
            <fieldset>
              <h3 class="passwordfield-design">Password</h3>
              <input type="password" class="email" name="password" placeholder="•••••••••" required>
            </fieldset>
          </div>
        </div>
        <div class="mx-auto" style="height: 50px;">
        </div>
        <button type="submit" name="login" class="loginfield-design">Login</button>
      </form>
      <div class="mx-auto" style="height: 50px;">
      </div>
      <div style="text-align: center;">
        <span class="account-design">Don't have an account? <span class="register-design">
            <a href="register.php">Register</a>
          </span>
        </span>
      </div>
    </div>
  </section>
</body>

</html>