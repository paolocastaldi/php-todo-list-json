<?php

if (isset($_POST['text'])) {
    $new_task = $_POST['text'];
    $json = file_get_contents('tasks.json');
    $todo = json_decode($json, true);
    $todo[] = ['text' => $new_task];
    $new_json = json_encode($todo);
    file_put_contents('tasks.json', $new_json);

    echo $new_json;
}