/**
 * Created by Abhijit on 31/1/15.
 */
app.controller('Home', ['$scope', '$http', function($scope, $http) {
    var vm = this;

    $http.get('wp-json/posts/').success(function(res){
        vm.posts = res;
    });

}]);
