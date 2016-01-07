angular.module('app', ['ui.router', 'satellizer'])
.run(function($rootScope) {
    $rootScope.$on('$stateChangeError', console.log.bind(console));
})

.config( function ($stateProvider, $urlRouterProvider, $authProvider,$locationProvider) {
    $stateProvider
        .state('home', {
            url: '/',
            templateUrl: 'templates/home.tpl.html',
            controller: 'homeController as home'
        });
        //.state('register', {
        //    url: '/register',
        //    templateUrl: 'templates/register.tpl.html',
        //    controller: 'RegisterCtrl as register'
        //})
        //.state('dashboard', {
        //    url: '/dashboard',
        //    templateUrl: 'templates/dashboard.tpl.html',
        //    controller: 'DashboardCtrl as dashboard'
        //})


    $locationProvider.html5Mode(true);

    $urlRouterProvider.otherwise('/');

    // $authProvider.facebook({
    //  clientId: '657854390977827'
    //});
    //
    //$authProvider.google({
    //  clientId: 'Google Client ID'
    //});


    $authProvider.loginUrl = 'http://localhost:8000/api/v1/auth/login';
    $authProvider.signupUrl = 'http://localhost:8000/api/v1/auth/register';
})
.factory('UserService', function ($http) {
    return {

    };
})

.controller('homeController', function ($state, $auth) {
    var vm = this;

    vm.user = {};

    //vm.authenticate = function(provider) {
    //  $auth.authenticate(provider);
    //};
    //

    vm.isAuthenticated = function __isAuthenticated(){
        return $auth.isAuthenticated();
    };

    vm.login = function __login() {
        $auth.login({
            email: vm.login.user.email,
            password: vm.login.user.password
        }).then(function (response) {
            console.log(response);
            $state.go('home');
            jQuery('#login').modal('toggle');
            vm.login.user.email = '';
            vm.login.user.password = '';
        }).catch(function (response) {
            console.log(response);
            console.log('Error: Login failed');
            vm.login.user.password = '';
        });
    };
        vm.register = function __register() {
            $auth.signup({
                name: vm.register.user.name,
                number: vm.register.user.number,
                email: vm.register.user.email,
                password: vm.register.user.password
            }).then(function (response) {
                console.log(response);
                $state.go('home');
                jQuery('#login').modal('toggle');
                vm.register.user.name = '';
                vm.register.user.email = '';
                vm.register.user.number = '';
                vm.register.user.password = '';
            }).catch(function (response) {
                console.log(response);
                vm.register.user.password = '';
                console.log('Error: Register failed');
            });
        };
        vm.logout = function __logout() {
            $auth.logout();
            $state.go('home');
        };
});
//
//.controller('RegisterCtrl', function ($state, $auth) {
//    var vm = this;
//
//    vm.user = {};
//
//
//})
//.controller('DashboardCtrl', function ($state, $auth) {
//    var vm = this;
//
//
//})
