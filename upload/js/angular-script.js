var app = angular.module('app',[])
    .directive("compareTo", function () {
        return {
            require: "ngModel",
            scope: {
                otherModelValue: "=compareTo"
            },
            link: function (scope, element, attributes, ngModel) {

                ngModel.$validators.compareTo = function (modelValue) {
                    return modelValue == scope.otherModelValue;
                };

                scope.$watch("otherModelValue", function () {
                    ngModel.$validate();
                });
            }
        };
    })
    .directive("unique", function ($http) {
        return {
            require: "ngModel",
            restrict: 'A',
            link: function (scope, element, attributes, ngModel) {
                element.bind('change blur', function (e) {
                    if (element.val() != '') {
                        ngModel.$setValidity('unique', true);
                        $http.get("/api/unique/" + element.val()).success(function (data) {
                            if (data.status) {
                                ngModel.$setValidity('unique', true);
                            } else {
                                ngModel.$setValidity('unique', false);
                            }
                        });
                    }
                });
            }
        };
    });