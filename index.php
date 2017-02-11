<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Angular Material style sheet -->
		<link rel="stylesheet" href="/src/css/material/material.css">
		<!-- app style sheet -->
		<link rel="stylesheet" href="/app/css/style.css">
		<base href="/" />
		<title>Hello world!</title>
	</head>
	<body ng-app="simpleApp" ng-cloak>
		<!-- HTML -->
		
		<div ng-controller="AppCtrl" layout="column" style="height:100%" >
			<section layout="row" flex >
				<md-sidenav md-component-id="left" >
					<md-toolbar md-whiteframe="10">
						<div class="md-toolbar-tools">
							<span flex>
								<h1>
									Menu
								</h1>
							</span>
							<md-button class="md-icon-button" aria-label="Menu" ng-click="toggleLeft()" >
								<md-icon md-svg-icon="img/icons/ic_close_24px.svg"></md-icon>
							</md-button>
						</div>
					</md-toolbar>
					
					<md-content layout-padding >
						<div layout="column" layout-align="center stretch">
							<md-button class='md-raised {{isActive("Home")}}' href="/" >Home</md-button>
							<md-button class='md-raised {{isActive("Blog")}}' href="/blog" >Blog</md-button>
							<md-button class='md-raised {{isActive("Sign up")}}' href="/signup" >Sign up</md-button>
							<md-button class='md-raised {{isActive("Sign in")}}' href="/signin" >Sign in</md-button>	
							<md-button class='md-raised {{isActive("Admin")}}' href="/admin" >Administration</md-button>
						</div>
					</md-content>
				</md-sidenav>
				
				<md-content flex >
					<md-toolbar class="high-index" md-whiteframe="10" >
						<div class="md-toolbar-tools">
							<md-button class="md-icon-button" aria-label="Menu" ng-click="toggleLeft()" >
								<md-icon md-svg-icon="img/icons/menu.svg"></md-icon>
							</md-button>
							<span >
								<h1>{{currentPage()}}</h1>
							</span>
						</div>	
					</md-toolbar>
					<md-toolbar class="low-index" >
					</md-toolbar>
				
					<div>
						<div ng-view layout-padding >
						</div>
					</div>
				</md-content>
			</section>
		</div>
			
		<!-- Angular Material requires Angular.js Libraries -->
		<script src="/src/js/angular/angular.min.js"></script>
		<script src="/src/js/angular/angular-animate.min.js"></script>
		<script src="/src/js/angular/angular-aria.min.js"></script>
		<script src="/src/js/angular/angular-messages.min.js"></script>
		<script src="/src/js/angular/angular-route.min.js"></script>
		
		<!-- Angular Material Library -->
		<script src="/src/js/material/material.js"></script>
		
		<!-- Application JS source  -->
		<script src="/app/js/module.js"></script>
		<script src="/app/js/config.js"></script>
		<script src="/app/js/controller.js"></script>
		
	</body>
</html>