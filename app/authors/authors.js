app.controller('Authors', ['$scope', '$http','$routeParams', function($scope, $http,$routeParams) {
    var vm = this,
        authorSlug = $routeParams.author;

    $http.get('wp-json/posts/?filter[author_name]=' + authorSlug).success(function(data){
        vm.authorPosts = data;
        vm.authorName = data[0].author.name;
    });

}]);
