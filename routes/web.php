<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})-> name('/');
Route::get('/action', function () {
    return view('pages.action');
})-> name('action');
Route::get('/about', function () {
    return view('pages.about');
})-> name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})-> name('contact');
Route::get('/join', function () {
    return view('pages.join');
})-> name('join');
Route::get('/news', function () {
    return view('pages.news');
})-> name('news');

Route::get('/teacher/{index}',function($index){
    //declear variable $teachers to store array of teacher
    $teachers = array('Channak','Ronan','Sieha','Rady','Rith');
    //to count index of teachers
    $countArray = count($teachers)-1;
    $result = "";
    if($index <= $countArray){
        $result = "This teacher is: ".$teachers[$index];
    }else{
        $result = "This array is: ";
        $item = "";
        //loop to display all element in array
        for($a = 0; $a<= $countArray; $a++){
            //give condition to last element don't have ","
            $item.= "[$a] ".$teachers[$a];
            if($a < $countArray){
                $item.= ",";
            }
        }
        $result.= $item."<br> No teacher with this index: ".$index."<br> The largest index is: ".$countArray;
        
    }
    return $result;
});