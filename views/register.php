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
    <div class="col-md-4 col-xs-4 col-lg-4"></div>

    <div class="col-md-4 col-xs-4 col-lg-4" style="-webkit-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.76);-moz-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.76);box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.76);">
        <h1 style="text-align: center;">Registration form</h1>
        <form role="form" method="POST" action="../index.php/register">
            <div class="form-group">
                <label for="fakultet">Faculty:</label>
                <select class="form-control" id="fakultet" name="fakultet">
                    <?php
                        foreach($fakulteti as $faks){
                            echo "<option value='".$faks['id_fakultet']."'>".$faks['naziv']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="checkbox">
                <label><input type="radio" name="tip" id="tip1" value="1"> Professor</label>
                <label><input type="radio" name="tip" id="tip2" value="2"> Student</label>
            </div>
            <div class="form-group">
                <label for="ime">Name:</label>
                <input type="text" class="form-control" id="ime" name="ime" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="prezime">Surname:</label>
                <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Enter your surname">
            </div>
            <div class="form-group" id="za_profesor">
                <label for="plata">Salary:</label>
                <input type="text" class="form-control" id="plata" name="plata" placeholder="Enter your salary">
            </div>
            <div class="form-group" id="za_student">
                <label for="godina">Year of studies:</label>
                <input type="text" class="form-control" id="godina" name="godina" placeholder="Enter your year of studies">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-default">Register</button>
        </form>
    </div>

    <div class="col-md-4 col-xs-4 col-lg-4"></div>
</div>

<script>
    $(document).ready(function() {
        $('#tip1').change(function() { //professor register
            $('#za_student').css('display', 'none');
            $('#za_profesor').css('display', 'block');
        });
        $('#tip2').change(function() { //student register
            $('#za_profesor').css('display', 'none');
            $('#za_student').css('display', 'block');
        });
    });
</script>

</body>
</html>
