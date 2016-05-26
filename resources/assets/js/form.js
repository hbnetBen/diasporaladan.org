'use strict'

angular.module('diaspora', [])

.controller('RegistrationController', ['$scope', '$http', function($scope, $http)
{
	$scope.getRegistered = function()
	{
		$http.get('/count').success(function( response )
		{
			$scope.registered = response + ' personnes se sont déjà inscrites';
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
		});
	}

	$scope.newRegistrationProcess = function()
	{
		$scope.doneProcessing = false;
		$scope.inputFocus = true;
		$scope.user = {};
		$scope.getRegistered();
	}



	$scope.getRegistered();

}])

.controller('ContactController', ['$scope', '$http', function($scope, $http)
{
	$scope.processContactForm = function()
	{
		$scope.inputFocus = false;
		$scope.formProcessing = true;

		// console.log($scope.user);

		$http.post('/contact', $scope.contact).success(function(response)
		{
			console.log(response);

			$scope.formProcessing = false;
			$scope.doneContacting = true;
		});
	}

	$scope.newContactProcess = function()
	{
		$scope.doneContacting = false;
		$scope.inputFocus = true;
		$scope.contact = {};
	}

}]);