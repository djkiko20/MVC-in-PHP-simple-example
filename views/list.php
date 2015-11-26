<html>
<head>
    <title>List all user</title>
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
    <div class="col-md-6">
        <h2 style="text-align: center">Professors</h2> <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach($professors as $professor){
                        echo '<tr>';
                        echo '<th>'.$professor['ime'].'</th>';
                        echo '<th>'.$professor['prezime'].'</th>';
                        echo '<th>'.$professor['plata'].'</th>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h2 style="text-align: center">Students</h2> <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Year of study</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach($students as $student){
                    echo '<tr>';
                    echo '<th>'.$student['ime'].'</th>';
                    echo '<th>'.$student['prezime'].'</th>';
                    echo '<th>'.$student['godina'].'</th>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>