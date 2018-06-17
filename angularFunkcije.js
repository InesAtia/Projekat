//verifikacija kontakt i registracijskih formi:

var app = angular.module ('myApp', []);
app.controller('myCtrl',function($scope,$http){    
        $scope.insertData=function(){      
            $http.post(
                "actionReg.php", 
                {
                'korisnikUsername':$scope.korisnikUsername,
                'korisnikPassword':$scope.korisnikPassword,
                'korisnikIme':$scope.korisnikIme,
                'korisnikPrezime':$scope.korisnikPrezime,
                'korisnikDrzava':$scope.korisnikDrzava,
                'korisnikGrad':$scope.korisnikGrad,
                'korisnikAdresa':$scope.korisnikAdresa,
                'korisnikTelefon':$scope.korisnikTelefon,
                'korisnikEmail':$scope.korisnikEmail,
                'brojKartice':$scope.brojKartice,
                'tipKartice':$scope.tipKartice,
                'imeKartice':$scope.imeKartice,
                'datumKartice':$scope.datumKartice,
                'ulogaId':$scope.ulogaId
              
            }
            ).success(function(data){
                alert(data);
                
            });
        }

        });


        app.controller('kontakt', function($scope, $http){
            $scope.sendMessage=function(){
                $http.post(
                    "contactForm",
                    {
                        'ime':$scope.ime,
                        'email':$scope.email,
                        'pitanje':$scope.pitanje

                    }
                    ).success(function(data){
                        alert(data);
                    });
            }
        });



// app.controller("contactForm", ['$scope', '$http', function ($scope, $http) {
//         $scope.url = 'contact.php';
//         $scope.formsubmit = function (isValid) {
 
//             if (isValid) {
 
//                 $http.post($scope.url, 
//                     {"name": $scope.name, 
//                     "email": $scope.email, 
//                     "message": $scope.message
                    
//                 }).success(function (data, status) {
//                             $scope.status = status;
//                             $scope.data = data;
//                             $scope.result = data; 
//                         })
//             } else {
//                 alert('Form is not valid');
//             }
 
//         }
 
//     }]);
    