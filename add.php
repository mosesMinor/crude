<?php
if(isset($_POST["task_name"]))
{
    require 'DB.php';
    extract ($_POST);
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

            <div class="card"></div>

            <div class="card-header">
                <b>Add a new task</b>
            </div>
            <div class="card-body">

                <?php

                if (isset ($message))
                    echo "<P class='text-danger'> $message</P>"
                ?>

                <form action="save.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">task_name</label>
                        <input type="text"class="form-control" name="task_name" required>



                    </div>
                    <div class="form-group">
                        <label for="title">date_todo</label>
                        <input type="date"class="form-control" name="date_to_do" required>
                        <button class="btn btn-info btn-block">Add task</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

</body>
</html>


