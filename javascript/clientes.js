/* angular.module("clientes", []);
angular.module("clientes").controller("Ctrl", ['$scope', '$http', 
   
    function($scope, $https){
        var url = "../clientes/lista_clientes.php";

        $https.get(url).then( function(response) {
          $scope.lista_clientes = response.data; 
        });
    }
]) */

angular.module('clientes', []); 
angular.module('clientes').controller('Ctrl', ['$scope', '$http', 

    function($scope, $http) {  
      var REQ = {
        url: 'clientes/lista_clientes.php',
        method: 'GET'
      };
      $http(REQ)
        .then(function(response){
          $scope.clientes = response.data;
          console.log('Data: ', $scope.clientes.data);
        });
    }
]);