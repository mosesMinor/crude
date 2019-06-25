<?php
if(isset($_POST["status"])) {
    require 'DB.php';
    extract ($_POST);
    $sql="INSERT INTO `task`(`task_id`, `task_name`, `date_to_do`, `status`) 
VALUES (null ,'$task_name','$date_todo','$status')";
    mysqli_query($conn, $sql);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add task</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<?php
require 'navbar.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">

                <div class="card-header">
                    Add a new task
                </div>
                <div class="card-body">
                    <form action="save.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">task_name</label>
                            <input type="text" class="form-control" name="task_name"id="task_name">

                        </div>

                        <div class="form-group">
                            <label for="title">date_todo</label>
                            <input type="date" class="form-control" name="date_to_do"id="date_to_do">
                        </div>

                        <div class="form-group">
                            <label for="title">status</label>
                            <input type="text" step="0.50" class="form-control" name="status"id="status">

                            <button class="btn btn-info btn-block">save task</button>

                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
</body>
</html>

