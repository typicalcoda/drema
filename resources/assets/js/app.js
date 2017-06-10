import MenuTabs from './views/menu/tabs.js';
import Routes from './routes.js';

(function(){
	const app = angular.module('drema', ['ngRoute','ngSanitize', 'ngAnimate']);
	app.config(Routes);
	app.controller('MainController', ['$scope', "$sce", function($scope, $sce){
		$scope.menu = MenuTabs;

		$scope.selectedPage = $scope.menu[0]; // the text space thingi/block part of the nav
		$scope.activeMenuTab = 1; //selects first tab in menu by default

		$scope.selectTab = function(tab){
			$scope.selectedPage = $scope.menu[tab - 1]; //because index starts from 0
			$scope.activeMenuTab = tab;
		}
		$scope.SkipValidation = function(val){
			return $sce.trustAsHtml(val);
		}
	}]);
	app.controller('CollectionsController', ['$scope', '$sce', function($scope,$sce){

		$scope.noCollections = true;
		$scope.showCollectionCreationForm = function(){
			$scope.noCollections = false;
			
		}

	}]);
	app.directive('menu', function() {
		return {
			templateUrl: '/partials/menu',
			restrict: 'E'
		};
	});

}());