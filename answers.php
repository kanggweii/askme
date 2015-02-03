<!DOCTYPE html>
<html ng-app='myApp'>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.8.0/angularfire.min.js"></script>
    <script>
            var myApp = angular.module('myApp', []);
            myApp.controller('userController', ['$scope', function($scope) {
            
            $scope.users = [
            {aName:"Nerdy", rank:"Smart Maximum", answer:"I DUNNO! ALL I KNOW IS, THIS IS THE BEST ANSWER!", score:10}
            ];
            
                
            }]);
    </script>
    <title>AskMe</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body ng-controller="userController">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://ukkk45f01281.kanggweii.koding.io/">ASK</a>
                    </li>
                    <li>
                        <a href="answers.php">Answers</a>
                    </li>
                    <li>
                        <a href="profile.php">Profile</a>
                    </li>
                    <li>
                        <a href="priceplan.php">Services</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <!-- Header -->
    <a name="ask"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Results for:</h1>
                         <h3><?php 
                            echo $_GET['question']; 
                         ?></h3>
                        <p>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="20%" style="text-align:center">User</th>
      <th width="30%" style="text-align:center">Rank</th>
      <th width="40%" style="text-align:center">Answer</th>
      <th width="10%" style="text-align:center"> Score </th>
      <th width="10%"></th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="user in users">
      <td width="20%"><font color="black">{{user.aName}}</font></td>
      <td width="30%"><font color="black">{{user.rank}}</font></td>
      <td><font color="black"><b>{{user.answer}}</b></font></td>
      <td><font color="black">{{user.score}}</font></td>
      <td>
        <button class="btn" ng-click="upVote($user.score)">
          <span class="glyphicon glyphicon"></span>   <font color="green"><b>Up Vote</b></font>
        </button>
        <button class="btn" ng-click="downVote($index)">
          <span class="glyphicon glyphicon"></span>  <font color="red"><b>Down Vote</b></font>
        </button>
      </td>
    </tr>
  </tbody>
</table>
<table align="center">
<tr>
<th><p>
<form class="form-horizontal">
    <font color="black"><textarea ng-model="new.answer" name="comment" rows="2" cols="30" placeholder="Answer Here!"></textarea></font>
    </th>
    <th>
      <button class="btn" ng-click="save()">
          <span class="glyphicon glyphicon-save"></span>   <font color="green"><b>Answer!</b></font>
        </button>
        </th>
    </tr>
  </form>
  </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
