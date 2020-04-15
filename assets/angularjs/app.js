var myApp = angular.module('myApp', []);
myApp.controller('myController', ['$scope', function($scope){

	$scope.defaultPic ='https://th.bing.com/th/id/OIP.Pd7MI_YlYV5SAuhklet5GQHaHa?w=192&h=193&c=7&o=5&pid=1.7';
	$scope.change = function(newPic){
		$scope.defaultPic=newPic;
	}
	
}])