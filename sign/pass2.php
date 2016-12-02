

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In | EVS</title>

    <style>


		body {
		    background-color: #F5683D;
		}
		
		div.member_signin {
		    text-align: center;
		}
		
		div.member_signin  i.fa.fa-user {
		    color: #FFF;
		    background-color: #337ab7;
		    border-radius: 500px;
		    font-size: 36px;
		    padding: 15px 20px 15px 20px;
		}
		
		div.fa_user {
		    margin-top: -47px;
		    margin-bottom: 15px;
		}
		
		p.member {
		    font-size: 19px;
		    color: #888888;
		    margin-bottom: 20px;
		}
		
		button.login {
		    width: 100%;
		    text-transform: uppercase;
		}
		
		form.loginform div.input-group {
		    width: 100%;
		}
		
		form.loginform input[type="email"], form.loginform input[type="password"] {
		    color: #6C6C6C;
		    text-align: center;
		}
		
		p.forgotpass {
		    margin-top: 10px;
		}
		
		p.forgotpass a {
		    color: #F5683D;
		}

    </style>

 <!-- For fotter icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- /footer icons -->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- Google recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div class="container" style="margin-top:5%; margin-bottom:0%;">
  <div class="panel panel-default  col-md-3 col-md-offset-4">
    <div class="panel member_signin">
      <div class="panel-body">
        <div class="fa_user">
          <i class="fa fa-user"></i>
        </div>
        <p class="member">Reset Password</p>
        <form action="resetted.php" method="post" target="_parent" class="loginform" >
          <div class="form-group">
            
            <div class="input-group">
              <input type="password" name="password" class="form-control" required placeholder="password">
            </div>
          </div>
          <div class="form-group">
            
            <div class="input-group">
              <input type="password" name="password1" class="form-control" required placeholder="re-enter password">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="g-recaptcha" data-sitekey="6LfX4CUTAAAAAO775VT6TUiX47ch_OaGqcUk4gMu" style="-moz-transform:scale(0.77); -ms-transform:scale(0.77); -o-transform:scale(0.77); -moz-transform-origin:0; -ms-transform-origin:0; -o-transform-origin:0; -webkit-transform:scale(0.77); transform:scale(0.77); -webkit-transform-origin:0 0; transform-origin:0; filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.77,M12=0,M21=0,M22=0.77,SizingMethod='auto expand');"></div>
            </div>
          </div>
          
          <input type="submit" value="Reset" name="register" class="btn btn-primary btn-md login">

        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>