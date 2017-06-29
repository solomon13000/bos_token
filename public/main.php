<!DOCTYPE html>
<html lang="en" ng-app="myApp">  
    <head>
		<title>MyStore</title>
	
        <meta charset="UTF8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="assets/css/main.css" rel="stylesheet" type="text/css">
		<link href="assets/css/sweetalert.min.css" rel="stylesheet" type="text/css">
		<link href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Add the usual things here -->

	</head>
    <body>
	
		<?php include 'assets/templates/theme/header.php';?>

	    <div id="maincontent">
            <div id="view" ui-view></div>
        </div>
		
		<?php include 'assets/templates/theme/footer.php';?>

        <script src="assets/vendor/angular/angular.min.js"></script>
		<script src="assets/vendor/angular-messages/angular-messages.min.js"></script>
        <!--<script src="assets/vendor/angular-route/angular-route.min.js"></script> -->
		<script src="assets/vendor/angular-ui-router/release/angular-ui-router.min.js"></script>
        <script src="assets/vendor/angular-bootstrap/ui-bootstrap.min.js"></script>
		<script src="assets/vendor/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
		<script src="assets/vendor/satellizer/dist/satellizer.js"></script>
		<script src="assets/vendor/ngSweetAlert/SweetAlert.min.js"></script>
		<script src="assets/vendor/sweetalert/dist/sweetalert.min.js"></script>
		<script src="assets/js/myApp.js"></script>
		
		<script src="assets/js/controllers/main/EmployeeController.js"></script>
		<script src="assets/js/controllers/main/AuthenticationController.js"></script>
		<script src="assets/js/controllers/main/UserController.js"></script>
		
		<script src="assets/js/controllers/modal/employee/AddEmployeeController.js"></script>
		<script src="assets/js/controllers/modal/employee/ViewEmployeeController.js"></script>
		<script src="assets/js/controllers/modal/employee/UpdateEmployeeController.js"></script>
	
		<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
		
		<script src="assets/js/services/modalService.js"></script>

    </body>
</html>  