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

                <h4 class="mb-2 mb-sm-0 pt-1">
                  <span>CUSTOMERS</span>
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
                    <form action="db/employee_add_customers.php" method="POST">
                     <div class="card-header text-center">Add Customer</div>
                     <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-6">

                            <div class="md-form">
                                <input type="text" id="form1" name="c_name" required class="form-control">
                                <label for="form1" class="">Name</label>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-6">

                            <div class="md-form form-sm">
                                <input type="text" id="form2" name="c_email" required class="form-control form-control-sm">
                                <label for="form2" class="">Email</label>
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
<div id="table" class="row wow fadeIn">
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
                            <th>CustomerID</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        <?php
                        $sql = $pdo->prepare("SELECT * from customers");
                        $sql->execute();
                        while($row = $sql->fetch())  
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['c_id']; ?></td>
                                <td><?php echo $row['c_name']; ?></td>
                                <td><?php echo $row['c_email']; ?></td>
                                <td>
                                    <a class="edit_record" data-id="<?= $row['c_id'] ?>" data-action="customers" href=""><i class="fa fa-pencil"></i></a>
                                    <a class="delete_record" data-id="<?= $row['c_id'] ?>" data-action="customer" href=""><i class="fa fa-remove"></i></a>
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

</body>

</html>