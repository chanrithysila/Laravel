<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public $subjects = [
        ['name'=>'Java','score'=>100],
        ['name'=>'JavaScript','score'=>90],
        ['name'=>'PHP','score'=>70],
        ['name'=>'Bootstrap','score'=>100],
        ['name'=>'Laravel','score'=>100]
    ];
    public function showSubject(){
        // $subjects = array(          
        //      ['Java',100],
        //     ['JavaScript',90],
        //     ['PHP',70],
        //     ['Bootstrap',100],
        //     ['Laravel',100])
        // ;
        // return view('pages.subject',['subject'=>$subjects]);
        return view('pages.subject')->with('subjects',$this->subjects);
    }
}
