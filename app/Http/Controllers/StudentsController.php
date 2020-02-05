<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentsController extends Controller
{
    public $students = array("Preab","Sovat","Teach","Rith", "Kanha");
    public function showStudent(){
        //$students = array("Preab","Sovat","Teach","Rith", "Kanha");
        //return view("pages.student",['student'=>$students]);
        return view("pages.student")->with('students',$this->students);
    }
    public function searchStudent($name){
        //public function isValueInArray($value,$array){
        // $isNameFound = false;
        // //loop to compare name all students
        // foreach($this->students as $student){
        //     if($student == $name){
        //         $isNameFound = true;
        //         break;
        //     }
        //      return $isNameFound; 
        // }
        //}
        $result = $name." Not found...";
        if(in_array($name,$this->students)){
            $result = $name." is in the list..";
        }
        return $result;
    }
    public function getAllStudent(){
        $students = Student::all();
        return view('students',compact('students'));
    }
    public function showStudentForm(){
        return view('student.addStudent');
    }
    public function saveStudent(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname'=>'required',
        ]);
        $student = new Student;

        $student->Firstname = $request->get('fname');
        $student->Lastname = $request->get('lname');
        $student->Age = $request->get('age');

        $student->save();
        return redirect("students");
    }

    public function showFormEditStudent($id){
        $student = Student::find($id);
        return view('student.editStudent',compact('student'));
    }
    public function editStudent($id,Request $request){
        $editStudent = Student::find($id);
        $editStudent->Firstname = $request->get('fname');
        $editStudent->Lastname = $request->get('lname');
        $editStudent->Age = $request->get('age');

        $editStudent->save();
        return redirect("students");
    }
    public function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('students');
    }
   
}
