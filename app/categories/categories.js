app.controller('Categories', ['$scope', '$http','$routeParams', function($scope, $http,$routeParams) {
    var vm = this,
        categorySlug = $routeParams.category;

    $http.get('wp-json/posts/?filter[category_name]=' + $routeParams.category).success(function(data){
        vm.categoryPosts = data;
        vm.categoryName = data[0].terms.category[0].name
    });

}]);
