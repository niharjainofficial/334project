<?php include("session.php");
include("config.php");
include("login_check.php");
include("header.php");
?>

<body class="grey lighten-3">

 <?php include("employee_sidebar.php"); ?>

 <!--Main layout-->
 <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1 text-center">
                  <span>RESERVATION</span>
              </h4>

          </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div id="update" class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-lg-12 col-md-12 mb-12">
            <!--Card-->
            <div class="card">
                <!--Card content-->
                <div class="card-body">
                    <form action="db/employee_reservation.php" method="POST">
                     <div class="card-header text-center">Add Reservation</div>
                     <div class="row">

                        <!--Grid column-->
                        <div class="col-md-2 mb-2">

                            <div class="mdl-selectfield">
                                <p><label>Pick Date</label></p>
                                <select class="browser-default" name = "day">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="21">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-2 mb-2">

                            <div class="mdl-selectfield">
                                <p><label>Pick Month</label></p>
                                <select class="browser-default" name="month">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">Decembers</option>
                                </select>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-2 mb-2">

                            <div class="mdl-selectfield">
                                <p><label>Pick Year</label></p>
                                <select class="browser-default" name = "year">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    
                                </select>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-2 mb-2">

                            <div class="mdl-selectfield">
                                <p><label>Select Room Type</label></p>
                                <select class="browser-default" name="room_id" >
                                    <?php
                                    $sql = $pdo->prepare("SELECT room_id, room_desc from room");
                                    $sql->execute();
                                    while($row = $sql->fetch())  
                                    {
                                        ?>
                                        <option value = "<?= $row['room_id']?>"> <?php echo $row['room_desc']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-2 mb-2">

                            <div class="mdl-selectfield">
                                <p><label>Select Employee</label></p>
                                <select class="browser-default" name ="id" >
                                    <?php
                                    $sql = $pdo->prepare("SELECT id, emp_name from employee");
                                    $sql->execute();
                                    while($row = $sql->fetch())  
                                    {
                                        ?>
                                        <option value = "<?= $row['id']?>"> <?php echo $row['emp_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>
                        <!--Grid column-->
                        <div class="col-md-12 mb-12" style="text-align: center;">
                            <input type="submit" class="btn btn-deep-purple" value="Submit"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <!--Grid column-->  

</div>
<br/>
<div id="table" class="table-responsive row wow fadeIn">
    <!--Grid column-->
    <div class="col-md-12">
        <!--Card-->
        <div class="card">

            <!--Card content-->
            <div class="card-body">

                <!-- Table  -->
                <table class="table table-hover">
                    <!-- Table head -->
                    <thead class="deep-purple lighten-4">
                        <tr>
                            <th>ReservationID</th>
                            <th>EmployeeID</th>
                            <th>RoomID</th>
                            <th>Check-in Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        <?php
                        $sql = $pdo->prepare("SELECT * from reservations");
                        $sql->execute();
                        while($row = $sql->fetch())  
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['res_id']; ?></td>
                                <td><?php echo $row['emp_id']; ?></td>
                                <td><?php echo $row['room_id']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <a class="edit_record" data-id="<?= $row['res_id'] ?>" data-action="ereservations" href=""><i class="fa fa-pencil"></i></a>
                                    <a class="delete_record" data-id="<?= $row['res_id'] ?>" data-action="ereservations" href=""><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                        <?php } ?> 
                    </tbody>
                    <!-- Table body -->
                </table>
                <!-- Table  -->

            </div>

        </div>
        <!--/.Card--> 
    </div> 
    <!--Grid column-->                                
</div>

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

</body>

</html>