
<!DOCTYPE html>
<html lang="en-GB">

<?php include 'include/style.php'; ?>
<?php include 'include/nav.php'; ?>
<?php include 'include/staff_login_style.php'; ?>

<head>
    <title>Admin Login</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="server" content="patienthub-chesterfield">
    <meta name="app-id" content="DEFBC">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- <link rel="stylesheet" type="text/css" href="/assets/third_party/fullcalendar/fullcalendar.min.css?cv=2023.2.416" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="/assets/third_party/fullcalendar-scheduler/scheduler.min.css?cv=2023.2.416" /> -->
    <link rel="stylesheet" type="text/css" href="/assets/third_party/fullcalendar-scheduler/main.min.css?cv=2023.2.416" />
    <link rel="stylesheet" type="text/css" href="/assets/third_party/daterangepicker/daterangepicker.css?cv=2023.2.416" /><script type="text/javascript" src="/assets/legacy/misc.js?cv=2023.2.416"></script>

    <link type="text/css" rel="stylesheet" media="all" href="/assets/legacy/ckeditor/style.css?cv=2023.2.416"/>
    <link type="text/css" rel="stylesheet" media="all" href="/assets/legacy/jquery-ui/jquery-ui.min.css?cv=2023.2.416"/>

</head>
<header>
    <div class="nav-bar"></div>
</header>

<body id="page-login" class="app header-fixed pace-done">


    <div class="app-body">
        <main class="main" id="content">

        <div class="col-lg-6 col-md-12 col-sm-12 mb-5 no-gutters login-form">
			<h2>Admin login</h2>
<form method="post" action="process_staff_login.php" class="loginform username login_step" >


        
    <title>Admin Login</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="server" content="patienthub-chesterfield">
        <meta name="app-id" content="DEFBC">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <div   class="fields_group mb-3" data-number_of_required_fields="2" >
                <p></p>
            <div class="alert alert-danger hidden rounded" role="alert"></div>

        <label for="username">Username:</label>
            <input type="text" name="username" required><br>
    </div>

    <label for="password">Password:</label>
            <input type="password" name="password" required><br>

    <input type="hidden" name="authentication_flow[id]" value="AFL0000011DEFBC1" /><input type="hidden" name="authentication_flow[start_process]" value="1" /><div class="row">
        <div class="col-12">
            <button class="btn btn-primary px-4 mb-1 back-button" onclick="window.location.href='StaffIntranet.php'">Back</button>
            <button type="submit" class="btn btn-primary px-4 mb-1 login_step_submit">Next</button>
        </div>
    </div>
</form>
	
		</div>

				</div>
			</div>
        </div>
    
    </main>

    <div>
        <footer>
        <?php  include "include/foot.php" ?>
        </footer>
   
        <accessibility footer>
        <?php  include "accessibility.php" ?>
        </accessibility>
    </div>


</html>
