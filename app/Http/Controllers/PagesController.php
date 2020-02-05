<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function action(){
        $action = "action";
        return view('pages.action',compact('action'));
    }
    public function about(){
        $about = "about";
        return view('pages.about',['about' => $about]);
    }
    public function join(){
        $join = "join";
        return view('pages.join')->with('join_us',$join);
    }
    public function news(){
        $news = "news";
        return view('pages.news',compact('news'));
    }
    public function contact(){
        $contact = "contact";
        return view('pages.contact',compact('contact'));
    }
    // public function hello(){
    //     $hello = "hello";
    //     $teachers = array("Channak","Ronan","Sieha","Rady","Rith");
    //     return view('pages.hello',['text'=> $teachers]);
    // }
    public function showCustomer(){
        // $customer = "customer";
        $customers = array("Chandaraty","Maly","Sampas","Donat");
        return view("pages.customer",['customer'=>$customers]);
    }
    public function listCustomer(){
        // $customer = "customer";
        $customers = array(

            '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),
            
            '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),
            
            '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),
            
            '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org')
            
        );
        return view("pages.table_customer",compact('customers'));
    }
}
