<!--Main Navigation-->
<header>
 <!--Navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark deep-purple fixed-top scrolling-navbar">
    <div class="container">

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" >

        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a href="./employee_dashboard.php" class="nav-link waves-effect waves-light"><i class="fa fa-pie-chart mr-2" ></i> <span class="clearfix d-none d-sm-inline-block">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="./employee_add_customer.php" class="nav-link waves-effect waves-light"><i class="fa fa-lightbulb-o mr-2" ></i> <span class="clearfix d-none d-sm-inline-block">Customer</span></a>
            </li>
            <li class="nav-item">
                <a href="./logout.php" class="nav-link waves-effect waves-light"><i class="fa fa-user mr-2" ></i> <span class="clearfix d-none d-sm-inline-block">Logout</span></a>
            </li>

        </ul>                   

    </div>

</div>
</nav>

<!-- Sidebar -->
<div class="sidebar-fixed position-fixed navbar-expand-lg navbar-dark " id="navbarSupportedContent">

    <!-- Brand -->
    <div class="view overlay z-depth-1">
        <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <img src="../img/dashboard-logo.png" class="center" width="120" height="120">
</div>

<div class="list-group list-group-flush">
    <a href="./employee_dashboard.php" class="list-group-item list-group-item-action waves-effect">
        <li class="fa fa-pie-chart mr-3"></li>Dashboard
    </a>
     <a href="./employee_add_customer.php" class="list-group-item list-group-item-action waves-effect">
        <li class="fa fa-lightbulb-o mr-3"></li>Customers
    </a>
    <a href="./logout.php" class="list-group-item list-group-item-action waves-effect">
        <li class="fa fa-user mr-3"></li>Logout
    </a>
</div>

</div>
<!-- Sidebar -->

</header>
    <!--Main Navigation-->