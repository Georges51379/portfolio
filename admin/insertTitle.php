<?php
session_start();
include('db/connection.php');

if(isset($_POST['addTitle'])){
  $title = $_POST['title'];
  $status = $_POST['titleStatus'];

$hashedToken = random_bytes(20);
$_SESSION['token'] = bin2hex($hashedToken);

$insertSQL = mysqli_query($con, "INSERT INTO title (token, titleName, titleStatus)
                          VALUES ('".$_SESSION['token']."', '$title', '$status')");

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icons/logo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <title>Admin | Insert Title</title>
  </head>
  <body>
    <?php include 'includes/topnav.inc.php'; ?>

    <div class="site-header">
      <div class="title">
        <h2>insert title</h2>
      </div>

      <div class="form-wrapper">
        <form name="titleForm" method="post" enctype="multipart/form-data">
          <div class="form-group has-success has-feedback">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="title" required>
          <span id="Success2Status" class="sr-only">(success)</span>
          </div>
          <div class="form-group has-warning has-feedback">
            <label for="title status">title status</label>
            <select type="text" name="titleStatus" class="adminform_input" required>
  						<option value="--Select An Option--">-Select An Option--</option>
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            <span id="Warning2Status" class="sr-only">(warning)</span>
          </div>

          <button type="submit" name="addTitle" class="btn btn-success">add title</button>
        </form>
      </div>
    </div>


        <script src="js/script.js"></script>
      </body>
    </html>
