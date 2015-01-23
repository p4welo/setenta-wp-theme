angular.module("feedback", ['ui.bootstrap','ngResource'])
.controller("feedbackCtrl", function ($scope,$modal) {
        $scope.feedbackModal = function () {
            var modalInstance = $modal.open({
                templateUrl: 'app/feedback/feedbackModal.html',
                controller: function ($scope, $modalInstance) {
                    $scope.feedback = {};
                    $scope.ratings = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

                    $scope.setRate = function (rate) {
                        $scope.feedback.rate = rate;
                    }

                    $scope.select = function (tab) {
                        $scope.feedback.type = tab;
                    }

                    $scope.resolveTabCss = function (tab) {
                        return {'active' : tab == $scope.feedback.type};
                    }

                    $scope.resolveBtnCss = function (r) {
                        return r==$scope.feedback.rate ? 'btn-setenta' : 'btn-default'
                    }

                    $scope.send = function () {
//                        feedbackFactory.sendFeedback($scope.feedback);
                        $modalInstance.close();
                    }

                    $scope.cancel = function () {
                        $modalInstance.dismiss('cancel');
                    };
                }
            });
//            modalInstance.result.then(function () {
//                notificationService.success("Dziękujemy za opinię");
//            });
        }
    })