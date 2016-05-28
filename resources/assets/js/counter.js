angular.module('diaspora')

.controller('CounterController', ['$scope', 'App', function($scope, App)
{
	// Listening for the event for the new count
	$scope.$on('COUNT_READY', function()
	{
		$scope.registered = App.count;
		console.log(App.count);
	});
}]);