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



//by using controller function method
// Route::get('action', 'PagesController@action')-> name('action');
// Route::get('about', 'PagesController@about')-> name('about');
// Route::get('join', 'PagesController@join')-> name('join');
// Route::get('news', 'PagesController@news')-> name('news');
// Route::get('contact', 'PagesController@contact')-> name('contact');
// Route::get('customer', 'PagesController@showCustomer')-> name('customer');
Route::get('table_customer', 'PagesController@listCustomer')-> name('table_customer');
Route::get('student', 'StudentsController@showStudent');
// Route::get('students', 'PostsController@getPosts')->name('students');
Route::get('student/{name}', 'StudentsController@searchStudent');
Route::get('subject', 'SubjectController@showSubject')-> name('subject');
//add
Route::get('students', 'StudentsController@getAllStudent')->name('students');
Route::get('addStudent', 'StudentsController@showStudentForm')-> name('addStudent');
Route::post('save', 'StudentsController@saveStudent');
//edit
Route::get('edit/{id}', 'StudentsController@showFormEditStudent')->name('edit');
Route::put('update/{id}', 'StudentsController@editStudent')->name('update');
//delete
Route::get('delete/{id}', 'StudentsController@deleteStudent')->name('delete');


//route controller resource
Route::resource('getStudent','StudentController');
























// Route::get('/action', function () {
//     return view('pages.action');
// })-> name('about');
// Route::get('/about', function () {
//     return view('pages.about');
// })-> name('about');
// Route::get('/contact', function () {
//     return view('pages.contact');
// })-> name('contact');
// Route::get('/join', function () {
//     return view('pages.join');
// })-> name('join');
// Route::get('/news', function () {
//     return view('pages.news');
// })-> name('news');

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