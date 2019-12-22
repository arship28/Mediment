<?php
    include('common/html_head.php');
?>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include('common/header.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include('common/side_nav.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Add Diseases</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Add Diseases</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php
                if(isset($_GET['result'])){
                    if($_GET['result']=='success'){
                        echo "<div class='alert alert-success'>Data has been submitted</div>";
                    }else if($_GET['result']=='fail'){
                        echo "<div class='alert alert-danger'>Data has not been submitted</div>";
                    }
                }
                ?>
                <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="add_diseases_process.php" method="post">
                                    <div class="form-group">
                                        <label for="name" class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" id="name" name="diseasename">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="det" class="col-md-12">Detail</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" id="det" name="detail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Specialization</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="specialization">
                                                <option value="">Select specialization</option>
                                                <option value="0">Dermatology</option>
                                                <option value="1">Radiology</option>
                                                <option value="2">Medicine</option>
                                                <option value="3">Neurology</option>
                                                <option value="4">Gynaecology</option>
                                                <option value="5">Surgery</option>
                                                <option value="6">Opthamology</option>
                                                <option value="7">Pathology</option>
                                                <option value="8">Pediatrics</option>
                                                <option value="9">Cardiology</option>
                                                <option value="10">Psychiatry</option>
                                                <option value="11">Orthopedics</option>
                                                <option value="12">Oncology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Add Disease">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include('common/footer.php');
            ?>
</body>

</html>
