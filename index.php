<?php 
    require_once'./function.php';
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>OOP PHP</title>
</head>

<body>
    <!-- Heading -->
    <div class="container ">
        <div class="row justify-content-md-center">
            <div class=col-md-12>
                <div class="alert alert-success text-center" role="alert">
                    <h2 class="alert-heading ">WELCOME TO TODO APP</h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Form -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <header class="px-4 py-2">
                    <h2>Todo App</h2>
                </header>

                <form class="px-4 py-2" action="?task=create" method="POST">

                    <div class="mb-3">
                        <input type="text" class="form-control" id="title" name="todo" placeholder="Add Task Name"
                            value="<?php echo $todo['name'] ?? ''; ?>">
                        <!-- <?php echo "<p class='text-danger'>$task_name_error</p>"; ?> -->
                    </div>

                    <input type="text" name="id" hidden value="<?php echo $todo['id'] ?? ''; ?>">

                    <button type=" submit" class="btn btn-primary" name="submit">Add Todo</button>
                </form>



                <!-- <?php echo "<p class='text-danger px-4 py-2'>$error</p>"; ?> -->
                <div class="dropdown-divider"></div>
                <div class="mb-2 px-4 py-2">
                    <?php foreach($todo_list as $todo): ?>

                    <div class="card card-body align-item-right bg-light mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5><?php echo $todo['name']; ?> </h5>

                            <div class="d-flex gap-3">
                                <a href="/php_projects/todo_list_mysql?task=edit&id=<?php echo $todo['id']; ?>">
                                    <i class="bi bi-pencil-square text-info"> </i>
                                </a>

                                <button onclick="handleDelete(<?php echo $todo['id']; ?>)"
                                    class="btn p-0 shadow-non text-danger">
                                    <i class="bi bi-x-lg"></i>

                                </button>

                            </div>

                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    function handleDelete(id) {
        if (window.confirm('Are you want to remove this todo?')) {
            location.href = `/php_projects/todo_list_mysql?task=delete&id=${id}`;
        }
    }
    </script>




</body>

</html>