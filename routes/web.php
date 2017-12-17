<?php


/**
 * Test route
 */
Route::get('lara_base', function(){
    $config = Config::get('lara_base.TestLaraBaseConfig');
    $database = \Toolkito\Larabase\Models\TestModel::all();

    return view('lara_base::test',compact('lang','config','database'));
});