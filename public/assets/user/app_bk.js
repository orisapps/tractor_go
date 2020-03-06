'use strict';

if (typeof Object.assign != 'function') {
    Object.assign = function (target, varArgs) { // .length of function is 2
        'use strict';
        if (target == null) { // TypeError if undefined or null
            throw new TypeError('Cannot convert undefined or null to object');
        }

        var to = Object(target);

        for (var index = 1; index < arguments.length; index++) {
            var nextSource = arguments[index];

            if (nextSource != null) { // Skip over if undefined or null
                for (var nextKey in nextSource) {
                    // Avoid bugs when hasOwnProperty is shadowed
                    if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
                        to[nextKey] = nextSource[nextKey];
                    }
                }
            }
        }
        return to;
    };
}

let plans = {
    'title': 'availablePlans',
    'description': 'This is a list of available plans on Home Manager',
    "list": [
        {
            "name": "Harrowing",
            "description": "Harrow the land",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Harrowing Land was tractorized at most 2 months ago",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "7000"
                        }
                    ],
                    "total_price": "7000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "7000"
                        }
                    ],
                    "total_price": "7000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Ploughing",
            "description": "Plough the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Ploughing Land was tractorized at most 2 months ago",
                            "unit_price": "28000"
                        }
                    ],
                    "total_price": "28000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "7000"
                        }
                    ],
                    "total_price": "7000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "7000"
                        }
                    ],
                    "total_price": "7000",
                    "cycle": "per project"
                },
            ]
        },

        {
            "name": "Ridging",
            "description": "Ridge the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "7000"
                        }
                    ],
                    "total_price": "7000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "7000"
                        }
                    ],
                    "total_price": "7000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "De-Stumping",
            "description": "De-stump the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "150000"
                        }
                    ],
                    "total_price": "150000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "150000"
                        }
                    ],
                    "total_price": "150000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "80000"
                        }
                    ],
                    "total_price": "80000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "80000"
                        }
                    ],
                    "total_price": "80000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Planting",
            "description": "Plant on the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "20000"
                        }
                    ],
                    "total_price": "20000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "20000"
                        }
                    ],
                    "total_price": "20000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "10000"
                        }
                    ],
                    "total_price": "10000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "10000"
                        }
                    ],
                    "total_price": "10000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Harvesting",
            "description": "Land will undergo harvesting...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "50000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "50000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "30000"
                        }
                    ],
                    "total_price": "30000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "30000"
                        }
                    ],
                    "total_price": "30000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Spraying",
            "description": "Spray the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "600000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "8000"
                        }
                    ],
                    "total_price": "8500000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "2000000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "20000000",
                    "cycle": "per project"
                },
            ]
        },

        {
            "name": "Irrigation",
            "description": "Irrigate the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "600000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "8000"
                        }
                    ],
                    "total_price": "8500000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "2000000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "20000000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Haulage",
            "description": "Haulage on the land",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "600000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "8000"
                        }
                    ],
                    "total_price": "8500000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "2000000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "20000000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Horticulture and Bed Making",
            "description": "Horticulture and Bed Making tractorization...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "600000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Newly Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized for the first time",
                            "unit_price": "8000"
                        }
                    ],
                    "total_price": "8500000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "2000000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Desert",
                    "plan_breakdown": [
                        {
                            "activity": "Land is still in its natural state and never been used for farming.",
                            "unit_price": "2000"
                        }
                    ],
                    "total_price": "20000000",
                    "cycle": "per project"
                },
            ]
        }
    ]
};

angular.module('homeApp', ['ngAnimate'])
    .controller('homeCtrl', ['$scope', '$http', function ($scope, $http) {
        $scope.formParams = {};
        $scope.stage = "";
        $scope.formValidation = false;
        $scope.toggleJSONView = false;
        $scope.toggleFormErrorsView = false;

        $scope.data = {
            propertyType: '',
            serviceType: 'tractorization',
            commercialType: null,
            numberOfRooms: 5,
            propertyFeatures: [],
            services: [],
            notes: ""
        };

        $scope.type = 'Farmer';
        $scope.objectType = 'Farm';

        $scope.availablePropertyFeatures = ['Trees', 'Lakes', 'Caves', 'Streams', 'Barns',
            'Silos', 'Storage Facility', 'Farm House', 'Broiling Houses'];

        $scope.addNewFeature = function () {
            var availableFeatures = getAvailableFeatures();
            if (!availableFeatures.length) {
                $("#property-features-error").fadeIn(1000);
                return;
            }
            $scope.data.propertyFeatures.unshift({
                name: availableFeatures[0],
                quantity: '1',
                availableFeatures: availableFeatures
            });
            setAvailablePropertyFeatures();
        };


        $scope.removeFeature = function () {
            if ($scope.data.propertyFeatures.length > 1) {
                $scope.data.propertyFeatures.shift();
                setAvailablePropertyFeatures();
            }
        };

        $scope.resetFeatures = function () {
            $scope.data.propertyFeatures = [];
            $scope.addNewFeature();
        };

        $scope.addNewFeature();


        $scope.onPropertyFeatureChange = function (feature, oldFeatureName) {
            if (feature.name !== oldFeatureName) {
                setAvailablePropertyFeatures();
            }
        };

        function setAvailablePropertyFeatures() {
            $scope.data.propertyFeatures.forEach(function (feature) {
                feature.availableFeatures = [feature.name].concat(getAvailableFeatures());
            });
        }

        function getAvailableFeatures() {
            var currentFeatures = $scope.data.propertyFeatures.reduce(function (features, feature) {
                return features.concat(feature.name);
            }, []);
            return $scope.availablePropertyFeatures.filter(function (feature) {
                return $.inArray(feature, currentFeatures) === -1;
            });
        }


        $scope.availableServices = plans.list.filter(function (item) {
            return item.type === 'service';
        });

        $scope.addNewService = function () {
            var availableServices = $scope.availableServices;//getAvailableServices('services');
            var length = $scope.data.services.length;

            if (!availableServices.length) {
                $("#service_error").fadeIn(1000);
                return;
            }
            if ($scope.data.services.length === 10) {
                $("#service_error").fadeIn(1000);
                return;
            }
            var newService = Object.assign({}, availableServices[0], {
                quantity: '1',
                plan: availableServices[0].plans[0],
                insurance: true,
                len: length + 1
            });
            $scope.data.services.unshift({
                data: newService,
                availableServices: availableServices
            });
            //setAvailableServices('services');
        };

        $scope.addNewServiceId = function (service_name, service_type) {
            var availableServices = $scope.availableServices;//getAvailableServices('services');
            var length = $scope.data.services.length;

            if (!availableServices.length) {
                $("#service_error").fadeIn(1000);
                return;
            }
            if ($scope.data.services.length === 10) {
                $("#service_error").fadeIn(1000);
                return;
            }
            var newService = Object.assign({}, availableServices[0], {
                quantity: '1',
                plan: availableServices[0].plans[0],
                insurance: true,
                len: length + 1
            });
            $scope.data.services.unshift({
                data: newService,
                availableServices: availableServices
            });
            //setAvailableServices('services');
        };
        $scope.removeService = function () {
            if ($scope.data.services.length > 1) {
                $scope.data.services.shift();
                setAvailableServices('services');
            }
        };
        $scope.resetServices = function () {
            $scope.data.services = [];
            $scope.addNewService();
        };

        $scope.addNewService();

        $scope.onServiceChange = function (service, oldServiceName, serviceType) {
            service.data.quantity = '1';
            service.data.insurance = true;
            console.log("Goke" + service.data.plans);

            $scope.resetServices();
            if (serviceType === 'tractorization') {
                service.data.plan = service.data.plans[0];
                conole.log(service.data.plans[0])
                service.data.len = $scope.data.services.length;
            }
            /*
             if (service.data.name !== oldServiceName) {
             setAvailableServices(serviceType);
             }
             */
        };

        function setAvailableServices(serviceType) {
            var currentServices = $scope.data.services;
            var availableIndex = 'availableServices';
            currentServices.forEach(function (service) {
                service[availableIndex] = [service.data].concat(getAvailableServices());
            });
        }

        function getAvailableServices() {
            var serviceArray = $scope.availableServices;
            var currentServices = $scope.data.services;
            var currentServicesByName = currentServices.reduce(function (services, service) {
                return services.concat(service.data.name);
            }, []);
            return serviceArray.filter(function (service) {
                return $.inArray(service.name, currentServicesByName) === -1;
            });
        }

        $scope.orderSummary = {};
        $scope.calculateOrderSummary = function () {
            $scope.orderSummary = {
                serviceType: $scope.data.serviceType === 'Services',
                itemsForService: getItemsForService(),
                propertyType: $scope.data.propertyType === 'commercial' ? '(Commercial) ' + $scope.data.commercialType : '(Family Owned)',
                propertyFeatures: getPropertyFeatures(),
                totalAmountNoVat: getTotalAmount(),
                totalAmount: vat(getTotalAmount()),
                location: $scope.userSelectedLga +" , "+ $scope.locationState,
                userlga: $scope.userSelectedLga,
                userstate:$scope.locationState
              //  totalAmount: formatCurrency(vat(getTotalAmount())),
            };
            if ($scope.data.notes) {
                $scope.orderSummary.notes = $scope.data.notes;
            }

            $scope.reverseGeocode();
        };

        function getItemsForService() {
            var items = [].concat($scope.data.services);
            var insurance = 0; // default price point for insurance policy
            if ($scope.data.serviceType === 'tractorization') {
                return items.reduce(function (items, item) {
                    var name = item.data.name;
                    var amount = item.data.plan.total_price;
                    var description = '';
                    if (item.data.insurance)
                        description = item.data.quantity + ' "' + item.data.name + '" service(s) for "' + item.data.plan.plan_name + '" land at ' + formatCurrency(Number(item.data.plan.total_price)) + ' ' + item.data.plan.cycle + ' -  ' + formatCurrency(Number(insurance)) + ' insurance per acre';
                    else
                        description = item.data.quantity + ' "' + item.data.name + '" service(s) for "' + item.data.plan.plan_name + '" land at ' + formatCurrency(Number(item.data.plan.total_price)) + ' ' + item.data.plan.cycle + ' -  '  + formatCurrency(Number(insurance)) + ' insurance per acre';

                    return items.concat([{amount: amount, name: name, description: description}]);
                }, []);
            }
        }

        function formatCurrency(num) {
            var p = num.toFixed(2).split(".");
            return "N" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                return  num=="-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
            }, "") + "." + p[1];
        }

        function getPropertyFeatures() {
            return $scope.data.propertyFeatures.map(function (item) {
                return item.quantity + ' ' + item.name + '(s)';
            }).join(', ');
        }

        function vat(totalAmount) {
            return Math.round(totalAmount + (totalAmount * 5 / 100));
        }

        function getTotalAmount() {
            var items = $scope.data.services;
            if ($scope.data.serviceType === 'tractorization') {
                return items.reduce(function (sum, item) {
                    if (item.data.insurance)
                        return sum + parseFloat(item.data.plan.total_price * item.data.quantity + 0);
                    else return sum + parseFloat(item.data.plan.total_price * item.data.quantity);
                }, 0);
            }
        }

        $scope.checkout = function () {
            $scope.calculateOrderSummary();
            var orderSummary = $scope.orderSummary;
            var orderForm = $('<form>', {
                action: '/home/farmer_transactions',
                target: '_top',
                method: 'GET'
            });
            orderForm.append(getJqueryInput('amount', orderSummary.totalAmount));
            orderForm.append(getJqueryInput('lga', orderSummary.userlga));
            orderForm.append(getJqueryInput('state', orderSummary.userstate));
            orderForm.append(getJqueryInput('service_type', 'tractorization'));

            var servicesTitle = orderSummary.itemsForService.map(function (item) {
                return item.name;
            }).join(', ');
            orderForm.append(getJqueryInput('subscription_title', servicesTitle));
            orderForm.append(getJqueryInput('subscription_type', orderSummary.serviceType));

            var buildingSpecification = orderSummary.propertyType + ' with ' + orderSummary.propertyFeatures;
            orderForm.append(getJqueryInput('building_specification', buildingSpecification));

            if (orderSummary.notes) {
                orderForm.append(getJqueryInput('notes', orderSummary.notes));
            }

            orderSummary.itemsForService.forEach(function (item, index) {
                orderForm.append(getJqueryInput("items[" + index + "][description]", item.description));
                orderForm.append(getJqueryInput("items[" + index + "][amount]", item.amount));
                orderForm.append(getJqueryInput('items_description', item.description));
            });
            orderForm.hide().appendTo("body").submit();
        };


        $scope.getLga = function(stateId){
          var lgaUrl = "/home/getLga/" + stateId.id ;
          $scope.locationState = stateId.name;
          $http({
                method: 'GET',
                url: lgaUrl
            }).then(function successCallback(response) {
                $scope.lgas = response.data;
            }, function errorCallback(error) {
                console.log(error);
            });


        }

        $scope.getStates = function(){
            var stateUrl = "/home/getstate/";
            $http({
                method: 'GET',
                url: stateUrl
            }).then(function successCallback(response) {
                $scope.states = response.data;
             }, function errorCallback(error) {
                console.log(error);
            });
        }




        $scope.reverseGeocode = function(){

            var state = $scope.state != null ? $scope.state + " state" : "";
            var lga = $scope.lga != null ? $scope.lga : "";
            var street = $scope.street != null ? $scope.street: "";

            console.log("address: " + street + ', ' + $scope.userSelectedLga + ', '+ $scope.locationState +' , Nigeria');
            geocoder = new google.maps.Geocoder();

            geocoder.geocode( { 'address': street + ', ' + $scope.userSelectedLga + ', '+ $scope.locationState+' , Nigeria' }, function(results, status){
                if (status == google.maps.GeocoderStatus.OK) {

                        console.log('geocoder results:');
                        console.dir(results);
                        getClosestOutlet(results[0].geometry.location);
                }
            });
        };


        $scope.getSelectedLga = function(lgaSelect){
            $scope.userSelectedLga = lgaSelect;
        }
        /*$scope.getState = function(stateId){
            var stateUrl = "/home/getstate/" + stateId;
            $http({
                method: 'GET',
                url: stateUrl
            }).then(function successCallback(response) {
                $scope.locationState = response.data;
             }, function errorCallback(error) {
                console.log(error);
            });

        }*/

        $scope.getStates();


        function getJqueryInput(name, value) {
            return $('<input>', {
                name: name,
                value: value,
                type: 'hidden'
            });
        }

        $scope.formParams = {
            ccEmail: '',
            ccEmailList: []
        };

        $scope.errors = {};
        // Navigation functions
        $scope.next = function (section) {
            //$scope.direction = 1;
            //$scope.stage = stage;

            $scope.formValidation = true;

            if ($scope.homeAppForm.$valid) {
                $scope.direction = 1;
                $scope.section = section;
                $scope.formValidation = false;
                $scope.errors[section] = false;
            } else {
                $scope.errors[section] = true;
            }
        };

        $scope.back = function (section) {
            $scope.direction = 0;
            $scope.section = section;
        };

        // CC email list functions
        $scope.addCCEmail = function () {
            $scope.rowId++;

            var email = {
                email: $scope.formParams.ccEmail,
                row_id: $scope.rowId
            };

            $scope.formParams.ccEmailList.push(email);

            $scope.formParams.ccEmail = '';
        };

        $scope.removeCCEmail = function (row_id) {
            for (var i = 0; i < $scope.formParams.ccEmailList.length; i++) {
                if ($scope.formParams.ccEmailList[i].row_id === row_id) {
                    $scope.formParams.ccEmailList.splice(i, 1);
                    break;
                }
            }
        };


        // Post to desired exposed web service.
        $scope.submitForm = function () {
            var wsUrl = "/home/farmer_transactions";

            // Check form validity and submit data using $http
            if ($scope.homeAppForm.$valid) {
                $scope.formValidation = false;

                $http({
                    method: 'GET',
                    url: wsUrl,
                    data: JSON.stringify($scope.formParams)
                }).then(function successCallback(response) {
                    if (response
                        && response.data
                        && response.data.status
                        && response.data.status === 'success') {
                        $scope.stage = "success";
                    } else {
                        if (response
                            && response.data
                            && response.data.status
                            && response.data.status === 'error') {
                            $scope.stage = "error";
                        }
                    }
                }, function errorCallback(response) {
                    $scope.stage = "error";
                    console.log(response);
                });
            }
        };

        $scope.reset = function () {
            // Clean up scope before destroying
            $scope.formParams = {};
            $scope.stage = "";
        };
    }]).directive('rangeSlider', [function () {
    //directive to show validation errors
    return {
        scope: {
            numberOfRooms: '='
        },
        link: function (scope, element) {
            element.val(scope.numberOfRooms);
            element.rangeslider({
                polyfill: false,
                onSlide: function (position, value) {
                    scope.$apply(function () {
                        scope.numberOfRooms = value;
                    });
                }
            });
        }
    };
}]);
