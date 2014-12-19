'use strict';
/* http://docs.angularjs.org/#!angular.service */

// Declare app level module which depends on filters, and services
var app = angular.module('loginApp', ['ngRoute']);
  app.config(['$routeProvider', function($routeProvider) {

    $routeProvider.when('/login', {templateUrl: 'app/partials/login.html', controller: 'loginCtrl'});
    $routeProvider.when('/partial', {templateUrl: 'app/partials/partial1.html'});
    $routeProvider.otherwise({redirectTo: '/partial'});

  }]);