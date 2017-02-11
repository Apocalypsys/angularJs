// Route config
app.config(function($routeProvider, $locationProvider) {
	$routeProvider.when('/', {
		templateUrl : 'templates/home.html'
	}).when('/home', {
		templateUrl : 'templates/home.html'
	}).when('/signup', {
		templateUrl : 'templates/signup.html'
	}).when('/register', {
		templateUrl : 'templates/signup.html'
	}).when('/signin', {
		templateUrl : 'templates/signin.html'
	}).when('/login', {
		templateUrl : 'templates/signup.html'
	}).when('/blog', {
		templateUrl : 'templates/blog.html'
	}).when('/admin', {
		templateUrl : 'templates/admin.html'
	}).otherwise( {
		templateUrl : '/templates/404.html'
	});
	$locationProvider.html5Mode(true);
});

//Icons config
app.config(function($mdIconProvider)
	{
		$mdIconProvider.iconSet('core','../img/icons/sets/core-icons.svg')
			.iconSet('communication','../img/icons/sets/communication-icons.svg')
			.iconSet('device','../img/icons/sets/device-icons.svg')
			.iconSet('social','../img/icons/sets/social-icons.svg');
	});