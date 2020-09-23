<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\Service;
use App\Motto;
use App\Review;
use App\Event;
use App\Employee;

class HomeController extends Controller
{
    //
    public function index()
    {
        $acc =About::all();
        $accc =Contact::all();
        $data =Service::all();
        $dataa =Motto::all();
        $dataaa =Event::all();
        $dat=Review::all();
        $user=Employee::all();
         // return view('home.index')->with('admins', $acc); 
        return view('home.index')->with('admins', $acc)->with('contacts', $accc)->with('services', $data)->with('mottoes', $dataa)->with('events', $dataaa)->with('reviews', $dat)->with('users', $user);
    	//return view('home.index');
    }
   // public function review(Request $req){

   //      $account = new Review;
   //      $account->fname = $req->fname;
   //      $account->lname = $req->lname;
   //      // $account->sel = $req->sel;
   //      $account->mobile = $req->mobile;
   //      $account->mess = $req->mess;
   //      $account->save();

   //      return view('home.index');
   //  }
    public function review()
    {
      return view('home.review');
    }

    public function reviewstore(Request $req){

        $account = new Review;
        $account->name = $req->name;
        $account->msg = $req->msg;
        $account->save();

        return view('home.review');
    }
}
