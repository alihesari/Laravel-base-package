<?php
/**
 * Test route
 */
Route::get('lara_base', function(){
    $test_result = Toolkito\Larabase\Larabase::testFunction();
    return view('lara_base::test',compact('test_result'));
});