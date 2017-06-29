var app = angular.module('myApp', ['ui.router', 'satellizer', 'ui.bootstrap', 'oitozero.ngSweetAlert','ngMessages']).run(function($rootScope) {
	$rootScope.$on('$stateChangeError', console.log.bind(console));
});

app.config(function($stateProvider, $urlRouterProvider, $authProvider,$provide){
	
	$authProvider.loginUrl = '/api/authenticate';
	
	$urlRouterProvider.otherwise('/Login');
	
    $stateProvider
	.state('Employee', {
        url: '/Employee',
		templateUrl: '../assets/templates/main/Employee.php',
        controller: 'EmployeeController'
    })
	.state('User', {
		url: '/User',
        templateUrl: '../assets/templates/main/User.php',
        controller: 'UserController'
    })
	.state('Login',{
		url: '/Login',
		templateUrl: '../assets/templates/main/Login.php',
		controller: 'AuthenticationController'
	});	 
});