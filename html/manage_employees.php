<?php include("session.php");
include("config.php");
include("login_check.php");
include("header.php");
?>

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
                      <span>EMPLOYEE</span>
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
                            <form action="db/add_employees.php" method="POST">
                               <div class="card-header text-center">Add Employee</div>
                               <div class="row">

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <div class="md-form">
                                <input type="text" id="form1" name="emp_name" required class="form-control">
                                <label for="form1" class="">Name</label>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <div class="md-form form-sm">
                                <input type="text" id="form2" name="emp_email" required class="form-control form-control-sm">
                                <label for="form2" class="">Email</label>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <div class="md-form">
                                <input name="password" type="text" id="form3" required class="form-control">
                                <label for="form3" >Password</label>
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
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <?php
                                    $sql = $pdo->prepare("SELECT * from employee");
                                    //$sql->bindParam(':payment', $payment);
                                    $sql->execute();
                                       while($row = $sql->fetch())  
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['emp_name']; ?></td>
                                        <td><?php echo $row['emp_email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td>
                                            <a class="edit_record" data-id="<?= $row['id'] ?>" data-action="employee" href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="delete_record" data-id="<?= $row['id'] ?>" data-action="employee" href="#"><i class="fa fa-remove"></i></a>
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