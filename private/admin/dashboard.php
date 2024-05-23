<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/head.inc.php'; ?>
        <title>Full Stack Developer | Admin</title>
    </head>
    <body>  
            <?php include 'includes/topnav.inc.php';  ?>

        <div class="content">
        <div class="chart-container">
            <canvas id="projectChart"></canvas>
        </div>
        <div class="bars-container">
            <div class="bar" id="visitorBar">Visitors: 100</div>
            <div class="bar" id="projectBar">Projects: 50</div>
        </div>
        <div class="chart-container">
            <canvas id="revenueChart"></canvas>
        </div>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>
