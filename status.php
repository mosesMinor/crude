<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All sales</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
<?php
require 'navbar.php';
?>

<div class="container">

    <table class="table" id="task">
        <thead>
        <tr>

            <th>task_id</th>
            <th>task_name</th>
            <th>date_tod0</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'DB.php';
        $sql ="SELECT task.task_id, task.task_name,task.date_to_do,task.status";
        $results= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($results))
        {
            extract( $row);//$price $quantity
            echo "<tr>
<td>$title</td>
<td>$quantity</td>
<td>$total</td>
<td>$date_sold</td>
</tr>
";
        }


        ?>


        </tbody>

    </table>


</div>
<script>
    $(document).ready(function() {
        $('#task').DataTable();
    } );
</script>
</body>
</html>

