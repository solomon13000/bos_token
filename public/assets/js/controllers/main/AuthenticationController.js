angular.module("myApp").controller('AuthenticationController', function($auth,$state,$http,$rootScope,$scope) {
    	
	$scope.login = function(){		
		
		var credentials = {
             email: $scope.email,
             password: $scope.password
        }
		
		$http({
			method: 'GET',
			url: '/api/v1/authenticate/user',
			params: credentials
		}).then(function successCallback(response){
			$state.go('Employee');
		}, function errorCallback(response) {
			$scope.loginError = true;
			$scope.loginErrorText = response.data.error;
		});
	}
	
});