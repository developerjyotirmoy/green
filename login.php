<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/a.css">
	<title></title>
</head>
<body>
	<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="" />
            <p id="profile-name" class="profile-name-card"></p>
            <form  class="form-signin" method="POST" action="a.php">
                
            	<input type="text" name="name" id="userPassword" class="form-control form-group" placeholder="username" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">enter</button>
            </form><!-- /form -->
        </div>
    </div>
</div>
</div>
</body>
</html>