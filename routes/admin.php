<?php 











Route::namespace('defController')->prefix('shico')->group(function(){
    Route::get('test/{id}',"userController@show")->name('shico');
});