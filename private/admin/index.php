<?php require_once '../dataProcessing.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include 'includes/head.inc.php'; ?>
        <title>Full Stack Developer | Admin</title>
  </head>
  <body>

    <div class="content">
      <div class="form-container">

        <form class="form" method="post" action="../dataProcessing.php">
          <input class="input-field" type="email" name="adm_email" placeholder="Enter your Email" required>
          <input class="input-field" type="password" name="adm_pinCode" placeholder="Enter your Pin Code" required>
          <input class="btn" type="submit" value="Login" name="admLogin">
        </form>

      </div>
    </div>

      <script src="js/script.js"></script>
  </body>
</html>
