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
// Sign up controller
app.controller('signUpCtrl',function($scope,$http)
	{
		var param =
		{
			params:
			{
				'type':'check',
				'tblName':'members'
			}
		}
		$http.get('../app/php/database.php',param).success(function(response)
			{
				$scope.test = response.test;
			});
		$scope.checkUserName = function()
			{
				for(var i=0; i<$scope.test.length; i++)
					{
						if($scope.test[i].username == $scope.userData.username)
							{
								//return $scope.signup.username.$error = {'sql':'true'};
								
							}
						else
							{
								//return $scope.signup.username.$error = {'sql':'false'};
							}
					}
			};
		$scope.status = 'empty';
		$scope.data = 'empty';

		$scope.register = function()
			{
				var param =
				{
					params:
					{
						'type':'addUser',
						'tblName':'members',
						'data':$scope.userData
					}
				}
				$http.get('../app/php/database.php',param).success(function(response)
					{
						$scope.status = response.status;
						$scope.data = response.data;
					});
			}
	});
// Admin page controller
app.controller('adminPageCtrl',function($scope,$http)
	{
		//Getting rows from database function
		$scope.getRows = function(arg)
			{
			};
	});