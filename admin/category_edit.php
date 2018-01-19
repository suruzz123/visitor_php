<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
        VISITORS
    </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">

                        <li>
                            <a class="active" href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="active" href="category.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Category</span>
                            </a>
                        </li>

                        <li>
                            <a class="active" href="category_view.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Category View</span>
                            </a>
                        </li>

                        <li>
                            <a class="active" href="product.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Product</span>
                            </a>
                        </li>

                        <li>
                            <a class="active" href="product_view.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Product View</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
<section id="main-content">
<section class="wrapper">

<div class="row">
    <div class="col-md-8">
        <h1>Category Form</h1>
        <?php
                              error_reporting(0);
                                       include("db.php");
                                       $id = $_REQUEST['id'];

                                         $sql = "SELECT * FROM visitors WHERE id ='$id'";
                                         $result = mysqli_query($con,$sql);
                                       $row = mysqli_fetch_assoc($result);
                             ?>
        <form action="category_insert.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <div class="form-group">
                <label for="category_name">category name</label>
                <input class="form-control" id="category_name" name="category_name" type="text" placeholder="Enter category name" value="<?php echo $row['category_name'];?>">
            </div>
            <div class="form-group">
                <label for="category_details">category details</label>
                <input class="form-control" id="category_details" name="category_details" type="text" placeholder="Enter category details" value="<?php echo $row['category_details'];?>">
            </div>
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
</div>

</section>

</section>
        <!--main content end-->
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->

    <!-- calendar -->
   
    <!-- //calendar -->
</body>

</html>