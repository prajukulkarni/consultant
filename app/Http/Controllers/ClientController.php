<?php

namespace App\Http\Controllers;
use App\Departments as DerpartmentsModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ClientRegister;
use Session;


class ClientController extends Controller
{
    

      public function view_record()
          {
          	//dd('1');
           $records = [];
           $data['registration'] = ClientRegister::all();
            return view('fetchclient',$data);
          }

      public function destroy($id)
          {
            $registration = ClientRegister::find($id);
            $registration->delete();
            return redirect ()->to('/dashboard');
          }
      public function view2(Request $request)
      {
      
        $registration['registration'] = ClientRegister::all();

            return view('view',compact('registration'));
      }    




        public function view(Request $request)
             {
               // dd('1');
       
            $registration = ClientRegister::find($request->id);
            $registration->cname = $request->cname;
            $registration->filenumber = $request->filenumber;
            $registration->pan = $request->pan;
            $registration->address = $request->address;
            $registration->itpassword = $request->itpassword;
            $registration->gstloginid = $request->gstloginid;
            $registration->gstpassword = $request->gstpassword;
            $registration->gstnumber = $request->gstnumber;
            $registration->aadharnumber = $request->aadharnumber;
            $registration->dob = $request->dob;
            $registration->mobileno = $request->mobileno;
            $registration->emailid = $request->emailid;
  
               return redirect ()->to('/record');
             }

       public function update(Request $request, $id)
             {
                //return 'hi';
               $registration = ClientRegister::find($id);
               return view('edit',compact('registration'));
             }  

        public function updateusers(Request $request)
             {
               // dd('1');
       
            $registration = ClientRegister::find($request->id);
            $registration->cname = $request->cname;
            $registration->filenumber = $request->filenumber;
            $registration->pan = $request->pan;
            $registration->address = $request->address;
            $registration->itpassword = $request->itpassword;
            $registration->gstloginid = $request->gstloginid;
            $registration->gstpassword = $request->gstpassword;
            $registration->gstnumber = $request->gstnumber;
            $registration->aadharnumber = $request->aadharnumber;
            $registration->dob = $request->dob;
            $registration->mobileno = $request->mobileno;
            $registration->emailid = $request->emailid;
            $registration->save();
               return redirect ()->to('/record');
             }

}