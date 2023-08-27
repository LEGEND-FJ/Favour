<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title>
<style>
  /* Your CSS styles here */
</style>
</head>
<body>
  <div class="menu">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
    <a href="login.php" class="login-button">Login</a>
  </div>

  <div class="content">
    <?php include $pageContent; ?>
  </div>
</body>
</html>
