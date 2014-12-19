'use strict'

app
.config(function ( $httpProvider) {
	delete $httpProvider.defaults.headers.common['X-Requested-With'];
})
.factory('loginService', function($http){
	return{
		login:function(user,scope,location){
			var $promise=$http.post('http://www.api.domagi.com/login.php', user);
			$promise.then(function(msg){
				if(msg.data.success){
					scope.msgtxt = 'Correct information';
					location.path( "/partial" );
				}else{
					scope.msgtxt = 'Incorrect information';
				}
			});
		},
		logout:function(location){
			var $promise=$http.post('http://www.api.domagi.com/logout.php');
			$promise.then(function(msg){
				if(msg.data=='success'){
					location.path( "/login" );
				}else{
					location.path( "/partial" );
				}
			});
		},
		checkSession:function(scope,location){
  			var $promise=$http.get('http://www.api.domagi.com/user_session.php');

  			$promise.then(function(msg){
  				if( msg.data.session ){
  					scope.name = msg.data.user.name;
  				}else{
  					location.path( "/login" );
  				}
  			});
		}
	}
});