const Routes = ['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    
	$locationProvider.html5Mode(true);
	
    $routeProvider
    .when("/dashboard", {
        templateUrl : "views/dashboard"
    })
    .when('/search', {
        templateUrl : 'views/search'
    })
     .when('/collections', {
        templateUrl : 'views/collections',
        controller: 'CollectionsController'
    })
}];

export default Routes;