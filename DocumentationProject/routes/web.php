<?php



Route::get('/', function () {
    return view('tasks');
});


Route::post('/task', function (Request $request) {

});


Route::delete('/task/{task}', function (Task $task) {

});