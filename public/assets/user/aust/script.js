(function(){
  
  var mainController = function($scope, mock) {
  $scope.title = 'Cascading Dropdown Lists with AngularJS';

  //This data could be static or come from a http call
  $scope.states = mock.getStates;
  $scope.cities = mock.getCities;
  $scope.cityList = [];
  
  $scope.displayCity = function(city) {
    alert('Welcome to ' + city);
  };

  $scope.getCity = function(state) {
    $scope.city = ""; //clear city view model
    if (state) {
      for (var i in $scope.cities) {

        if (state.id === $scope.cities[i].id) {
          $scope.cityList = $scope.cities[i].names;
        }

      }
    } else {
      $scope.cityList = []; //empty cityList array
      
    }
    

  };



};

homeApp.mainController('mainController', mainController);
}());
