<html>
<head>
    <title>Registration form</title>
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
    <div class="col-md-4"></div>
    <div class="col-md-4" style="margin-top: 12%;">
        <div class="alert alert-success">
            <?php echo $data['message'];
                header( "refresh:3;url=../index.php/login" );
            ?>
        </div>
    </div>
    <div class="col-md-4"></div>

</div>
</body>
</html>