<?php
session_start();
include('db/connection.php');
date_default_timezone_set('Asia/Beirut');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['editTitle']))
{
  $titleName=$_POST['titleName'];
	$titleStatus=$_POST['titleStatus'];
	$titleToken=$_GET['titleToken'];

$sql=mysqli_query($con,"UPDATE title SET titleName='$titleName',titleStatus='$titleStatus', titleUpdateDate='$currentTime'
									WHERE token = '".$_GET['titleToken']."'");
$_SESSION['msg']="title Updated !!";
header("location:title.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icons/logo.png">
    <!--FONT AWESOME CDN SECTION-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css" rel="stylesheet">

    <title>Admin | Edit Title</title>
  </head>
  <body>
    <?php include 'includes/topnav.inc.php'; ?>


    <div class="site-header">
      <div class="title">
        <h2>edit title</h2>
      </div>

      <div class="form-wrapper">
        <form name="titleForm" method="post" enctype="multipart/form-data">
<?php
  $query=mysqli_query($con,"SELECT * FROM title WHERE token = '".$_GET['titleToken']."'");
  while($row=mysqli_fetch_array($query)){
?>
          <div class="form-group has-success has-feedback">
            <label for="title">title</label>
            <input type="text" class="form-control" name="titleName" id="title" placeholder="title" value="<?php echo htmlentities($row['titleName']); ?>" required>
            <span id="Success2Status" class="sr-only">(success)</span>
          </div>
          <div class="form-group has-warning has-feedback">
            <label for="title status">title status</label>
            <select type="text" name="titleStatus" class="adminform_input" required>
              <option value="<?php echo htmlentities($row['titleStatus']); ?>"><?php echo htmlentities($row['titleStatus']);?></option>
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            <span id="Warning2Status" class="sr-only">(warning)</span>
          </div>
<?php } ?>
          <button type="submit" name="editTitle" class="btn btn-success">edit title</button>
        </form>
      </div>
    </div>

        <script src="js/script.js"></script>
      </body>
      </html>
