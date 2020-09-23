<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Admin;
use App\Contact;
use App\About;
use App\Service;
use App\Motto;
use App\Event;
use App\Review;
use App\Employee;


class AdminController extends Controller
{
    //
    public function index()
    {
    	 $accId=session()->get('username');

        $acc = Admin::where('username',$accId)
        ->get();
        return view('admin.index')->with('profiles', $acc);
    	
    }
    public function contact()
    {
    	// $acc =Contact::all();
    	// return view('admin.info')->with('contacts', $acc);
    	return view('admin.contact');
    }
    public function about()
    {
    	
    	 return view('admin.about');
    }
     public function service()
    {
    	
    	 return view('admin.service');
    }
     public function information()
    {
    	
    	 return view('admin.information');
    }
    //employee
     public function employee()
    {
    	
    	 return view('admin.emp');
    }
    public function upload(Request $req)
    {

    	$user= new Employee;
    	$user->name=$req->name;
    	$user->des=$req->des;
    	$user->edu=$req->edu;
    	if($req->has('img'))
    	{
    		$file=$req->file('img');
    		$file->move(public_path().'/',$file->getClientOriginalName());
    		$user->img=$file->getClientOriginalName();
    	}
    	$user->save();
    	return view('admin.emp');

    }

     public function motto()
    {
    	
    	 return view('admin.motto');
    }
    public function info()
    {
    	 $acc =About::all();
    	  $accc =Contact::all();
    	   $data =Service::all();
    	   $dataa =Motto::all();
    	   $dataaa =Event::all();
    	   $dat =Review::all();
    	   $user=Employee::all();

    	return view('admin.info')->with('admins', $acc)->with('contacts', $accc)->with('services', $data)->with('mottoes', $dataa)->with('events', $dataaa)->with('reviews', $dat)->with('users', $user);

    	
    	// //return view('admin.contact')->with('contacts', $acc);
    	// return view('admin.contact',compact('contacts'));
    }
    public function contactstore(Request $req){

        $account = new Contact;
        $account->address = $req->add;
        $account->email = $req->email;
        $account->mobile = $req->mobile;
        $account->save();

        return view('admin.contact');
    }
    public function aboutstore(Request $req){

        $account = new About;
        $account->about = $req->about;
        $account->save();

        return view('admin.about');
    }
    public function servicestore(Request $req){

        $account = new Service;
        $account->head = $req->head;
        $account->details = $req->details;
        $account->save();

        return view('admin.service');
    }
    public function informationstore(Request $req){

        $account = new Event;
        $account->pro = $req->pro;
        $account->cus = $req->cus;
        $account->aww = $req->aww;
        $account->exp = $req->exp;
        $account->save();

        return view('admin.information');
    }

     public function mottostore(Request $req){

        $account = new Motto;
        $account->motto = $req->motto;
        $account->sol = $req->sol;
        $account->save();

        return view('admin.motto');
    }


    //edit service
    public function editservice($accId){
         $acc = Service::find($accId);
         return view('admin.edit_service')->with('acc', $acc);
     }

    public function editedservice(Request $req,$accId){

        $account = Service::find($accId);
        $account->head = $req->head;
        $account->details = $req->details;
        $account->save();

        return view('admin.service');


    }
    public function deleteservice($accId){
        $acc = Service::find($accId);
        return view('admin.delete_service')->with('acc', $acc);
    }
    public function destroyservice($accId){
        $acc = Service::destroy($accId);
        return redirect()->route('admin.info');
    }

    //about

     public function editabout($accId){
         $acc = About::find($accId);
         return view('admin.edit_about')->with('acc', $acc);
     }

    public function editedabout(Request $req,$accId){

        $account = About::find($accId);
        $account->about = $req->about;
        $account->save();

        return view('admin.about');
    }

    //contact

    public function editcontact($accId){
         $acc = Contact::find($accId);
         return view('admin.edit_contact')->with('acc', $acc);
     }

    public function editedcontact(Request $req,$accId){

        $account = Contact::find($accId);
        $account->address = $req->add;
        $account->email = $req->email;
        $account->mobile = $req->mobile;
        $account->save();

        return view('admin.contact');
    }

    //motto
    public function editmotto($accId){
         $acc = Motto::find($accId);
         return view('admin.edit_motto')->with('acc', $acc);
     }

    public function editedmotto(Request $req,$accId){

        $account = Motto::find($accId);
        $account->motto = $req->motto;
        $account->sol = $req->sol;
        $account->save();

        return view('admin.motto');
    }

    //information
    public function editinformation($accId){
         $acc = Event::find($accId);
         return view('admin.edit_information')->with('acc', $acc);
     }

    public function editedinformation(Request $req,$accId){

        $account = Event::find($accId);
        $account->pro = $req->pro;
        $account->cus = $req->cus;
        $account->aww = $req->aww;
        $account->exp = $req->exp;
        $account->save();

        return view('admin.information');
    }
    

    
    //employee
    public function editemp($accId){
         $acc = Employee::find($accId);
         return view('admin.edit_emp')->with('acc', $acc);
     }

     public function editedemp(Request $req,$accId){

        $user = Employee::find($accId);
        $user->name=$req->name;
    	$user->des=$req->des;
    	$user->edu=$req->edu;
    	if($req->has('img'))
    	{
    		$file=$req->file('img');
    		$file->move(public_path().'/',$file->getClientOriginalName());
    		$user->img=$file->getClientOriginalName();
    	}
    	$user->save();
    	return view('admin.emp');

        
    }

    //profile
    public function editprofile($accId){
         $acc = Admin::find($accId);
         return view('admin.edit_profile')->with('acc', $acc);
     }
     public function editedprofile(Request $req,$accId){

        $account = Admin::find($accId);
        $account->name = $req->name;
        $account->username = $req->username;
        $account->password = $req->password;
        $account->save();

        return view('admin.information');
    }
}
