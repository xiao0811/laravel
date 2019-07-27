<?php

$app["router"]->get("/", function () {
    return "Hello, world.";
});

$app["router"]->get("/abc", "App\Http\Controllers\XiaoController@index");