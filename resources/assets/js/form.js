'use strict'

angular.module('diaspora', ['ngAnimate'])

.controller('RegistrationController', ['$scope', '$http', 'App', '$rootScope', function($scope, $http, App, $rootScope)
{
	$scope.getRegistered = function()
	{
		$http.get('/count').success(function( response )
		{
			console.log(response);
			App.count = response;

			$rootScope.$broadcast('COUNT_READY');
		});
	}


	$scope.processRegistrationForm = function()
	{
		$scope.inputFocusc = false;
		$scope.formProcessing = true;

		// console.log($scope.user);

		$http.post('/register', $scope.user).success(function(response)
		{
			console.log(response);

			$scope.formProcessing = false;
			$scope.doneProcessing = true;
			App.count = response.count;

			// Event to alert the new count
			$rootScope.$broadcast('COUNT_READY');
		});
	}

	$scope.newRegistrationProcess = function()
	{
		$scope.doneProcessing = false;
		$scope.inputFocus = true;
		$scope.user = {};
	}

	$scope.getRegistered();
}]);