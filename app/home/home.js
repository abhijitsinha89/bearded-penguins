/**
 * Created by Abhijit on 31/1/15.
 */
app.controller('Home', ['$scope', '$http', function($scope, $http) {
    console.info('111');
    $http.get('wp-json/posts/').success(function(res){
        $scope.posts = res;
    });

}]);
