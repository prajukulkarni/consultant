<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ClientRegister;
use Session;


class MasterController extends Controller
{

    public function logout(Request $request)
          {
            Session::flush();
            return redirect('/login');
          }
      
      public function adddetails()
          {
            return view('addclientdetails');
          }
      public function store(Request $request)
          {
            //return 'hii';
            $user = new ClientRegister();
            $user->id = $request->id;
            $user->cname = $request->cname;
            $user->filenumber = $request->filenumber;
            $user->pan = $request->pan;
            $user->address = $request->address;
            $user->itpassword = $request->itpassword;
            $user->gstloginid = $request->gstloginid;
            $user->gstpassword = $request->gstpassword;
            $user->gstnumber = $request->gstnumber;
            $user->aadharnumber = $request->aadharnumber;
            $user->dob = $request->dob;
            $user->mobileno = $request->mobileno;
            $user->emailid = $request->emailid;
            $user->save();
            return redirect('addclientdetails');
          }

      public function view_record()
          {
            //return 'hiii';
           $records = [];
           $data['registration'] = ClientRegister::all();

          // print_r($data);

           //dd();

           //$records = $user->toArray();
           return view('dashboard',$data);
         }

      public function destroy($id)
          {
             $registration = ClientRegister::find($id);
             $registration->delete();
             return redirect ()->to('/dashboard');
          }

}