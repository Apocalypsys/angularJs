//Index controller
app.controller('AppCtrl', function ($scope, $mdSidenav, $location)
	{
		// Side nav function
    $scope.toggleLeft = buildToggler('left');
		
    function buildToggler(navID)
			{
				return function()
					{
						$mdSidenav(navID).toggle();
					};
			}
			
		//Current page function
		$scope.$location = $location;
		$scope.currentPage = function()
			{
				if ($location.path() == "/")
					{
						return "Home";
					}
				else if ($location.path() == "/home")
					{
						$location.path("/");
						return "Home";
					}
				else if ($location.path() == "/signup")
					{
						return "Sign up";
					}
				else if ($location.path() == "/register")
					{
						$location.path("/signup");
						return "Sign up";
					}
				else if ($location.path() == "/signin")
					{
						return "Sign in";
					}
				else if ($location.path() == "/login")
					{
						$location.path("/signin");
						return "Sign in";
					}
				else if ($location.path() == "/blog")
					{
						return "Blog";
					}
				else if ($location.path() == "/admin")
					{
						return "Admin";
					}
				else
					{
						$location.path("/404");
						return "404 ERROR";
					}
			};
			
		// Is active function
		$scope.isActive = function(arg)
			{
				if(arg == $scope.currentPage())
					{
						return "md-primary";
					}
				else
					{
						return "";
					}
			};
  });

// Admin page controller
app.controller('adminPageCtrl',function($scope,$http)
	{
		//Getting rows from database function
		$scope.getRows = function(arg)
			{
			};
	});