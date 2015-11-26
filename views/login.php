<html>
    <head>
        <title>Login form</title>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
    </head>
<body>
<div class="row">
    <div class="col-md-4 col-xs-4 col-lg-4"></div>

    <div class="col-md-4 col-xs-4 col-lg-4" style="margin-top: 12%;-webkit-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.76); -moz-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.76); box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.76);">
        <h1 style="text-align: center;">Login form</h1>
        <form role="form" method="POST" action="../index.php/login">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>

    <div class="col-md-4 col-xs-4 col-lg-4"></div>
</div>
</body>
</html>
