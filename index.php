<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div id='app'>
        <h1 class="text-center my-3">Todo List Json</h1>
        <div class="container d-flex justify-content-center">
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item" v-for="task in todoList">{{task.text}}</li>
                </ul>
                <div>
                    <input @keyup.enter="saveTasks()" v-model='task' class="form-control my-2" type="text" name="new_task" id="new_task" placeholder="Insert new task">
                    <button @click="saveTasks()" class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./main.js"></script>
</html>