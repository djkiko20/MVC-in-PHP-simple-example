<html>
<head>
    <title>ERROR PAGE</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="margin-top: 12%;">
        <div class="alert alert-danger">
            <?php
            if($count == 0){
                echo '<h3>Pogresno korisnicko ime ili lozinka!</h3>';
                header( "refresh:2;url=../index.php/login" );
            } else {
                foreach($data['errors'] as $error){
                    echo $error."<br>";
                }
                header( "refresh:4;url=../index.php/register" );
            }
            ?>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>