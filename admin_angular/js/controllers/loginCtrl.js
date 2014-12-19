'use strict'

app.controller('loginCtrl', function($scope, $location, loginService){
	$scope.msgtxt = '';
	$scope.login=function(user){
		loginService.login(user, $scope, $location); //call login service
	}
});

app.controller('logoutCtrl', function($scope, $location, loginService){
	$scope.logout=function(user){
		loginService.logout($location); //call logout service
	}
});

app.controller('appCtrl', function($scope, $location, loginService){
	$scope.name = 'test';
	$scope.checkSession=function(){
		loginService.checkSession($scope, $location);
	}
});