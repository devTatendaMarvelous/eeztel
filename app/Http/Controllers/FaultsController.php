<?php

namespace App\Http\Controllers;
use App\Models\fault;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;




class FaultsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function create(){
        return view('faults.create');
    }

    /**
     * Create a new fault instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\fault
     */
    protected function store(Request $request)
    {
            $fault=$request->validate([

                'title'=>'required',
                'description'=>'required',
                
            ] );
             if($request->hasFile('file')){
                    $fault['file']=$request->file('file')->store('faultFiles','public');
                }
               $fault['ref']='EZF'.random_int(10000,99999);
               $fault['clientId']=auth()->user()->id;

              
            Fault::create($fault);
            
            
            
            return redirect('/home');
    }


    public function edit($id){
        $fault=Fault::find($id);
        
        if(auth()->user()->role=='client'){
            return view('faults.edit')->with('fault',$fault);
        }else{
            return view('faults.adminEdit')->with('fault',$fault);
        }

    }
    public function technician($id){
        $technicians=User::where('role','Technician')->get();
            return view('faults.assignTechnician')
            ->with('id',$id)->with('technicians',$technicians);
        

    }
       public function updateTechnician(Request $request,$id)
    {
          $technician=USER::find(request()->technician);  
           $fault=Fault::find($id);
            $fault->technician=$technician->name;
            $fault->techId=$technician->id;
            $fault->status='Assigned';
           $fault->save();
            return redirect('/faults');
            
    }

      public function reports()
    {
        $faults=Fault::all();
        $users=User::latest()->get();                 
        return view('faults.report')
            ->with('faults',$faults)
            ->with('users',$users);
    }
    public function index()
    {
        $faults=Fault::all();
        $users=User::latest()->get();                 
        return view('faults.index')
            ->with('faults',$faults)
            ->with('users',$users);
    }
       public function clientConfirmed($id)
    {
           
            $fault=Fault::find($id);
            $fault->status='Completed';
            $fault->save();
            return redirect('/home');            
    }
    public function update(Request $request,$id)
    {
            $fault=$request->validate([
                'title'=>'required',
                'description'=>'required',               
            ]);
             if($request->hasFile('file')){
                    $fault['file']=$request->file('file')->store('faultFiles','public');
                }           
            $fault['clientId']=auth()->user()->id;
            $toUpdate=Fault::find($id);
            if($toUpdate->status==='Completed'){
                return redirect('/home');  
            }

     
            $toUpdate->update($fault);
            return redirect('/home');            
    }
     public function complete(Request $request,$id)
    {
          
            return view('/cards/create')->with('id',$id);            
    }


    public function delete($id)
    {
            $fault = Fault::findOrFail($id);
            $fault ->delete();
            return back();
        
    }
}