<?php include("session.php");
include("config.php");
include("login_check.php");
include("header.php");


$query = $pdo->prepare("SELECT months.month_id, 
    months.month as month, 
    (SELECT COUNT(*) 
    FROM reservations 
    WHERE month = months.month_id) total_reservations
    FROM months");


$pie_chat_data = array();
$result =$query->execute();
$i = 0;
while($row = $query->fetch()) {
    $pie_chat_data[$i]['month'] = $row['month'];
    $pie_chat_data[$i]['total_reservations'] = $row['total_reservations'];
    $i++;
}   

?>

<!DOCTYPE html>
<html lang="en">
<body class="grey lighten-3">
    <?php include("sidebar.php"); ?>
    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">
                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">
                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <span>WELCOME!</span>
                    </h4>

                </div>

            </div>
            <!-- Heading -->

            <!--Grid row-->
            <div id="dashboard" class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-12">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="myChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            <br>
            <!--Grid row-->
            <div id="table" class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-12'>
                    <!--Card-->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Grid column-->
                            <div class="col-md-12 mb-12">
                                <!--Card-->
                                <div class="card mb-4">
                                    <!-- Card header -->
                                    <div class="card-header text-center">
                                        Pie Chart
                                    </div>
                                    <!--Card content-->
                                    <div class="card-body">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

    <?php include("footer.php"); ?>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <!-- Charts -->
    <script>
// Line
var jArray = <?php echo json_encode($pie_chat_data); ?>;
var pie_chat_array = [];
var pie_chart_labels = [];
for(var i=0; i<jArray.length; i++){
    pie_chat_array[i] = jArray[i].total_reservations;
    pie_chart_labels.push(jArray[i].month);
}
console.log(pie_chart_labels);
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: pie_chart_labels,
        datasets: [{
            label: 'Reservations',
            data: pie_chat_array,
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2),',
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',,
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
//pie
var ctxP = document.getElementById("pieChart").getContext('2d');

var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: pie_chart_labels,
        datasets: [{
            labels: pie_chart_labels,
            data: pie_chat_array,
            backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
    },
    options: {
        responsive: true
    }
});


</script>

</body>

</html>