<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fault;
use App\Models\User;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(auth()->user()->role=='Client'){
             
                   $faults=Fault::where('clientId',auth()->user()->id)->latest()->get();
                   $users=User::all();
                   
            return view('client')
            ->with('faults',$faults)
            ->with('users',$users);
        }if(auth()->user()->role=='Technician'){
             
                   $faults=Fault::where('techId',auth()->user()->id)->latest()->get();
                   $users=User::all();
                   
            return view('technicians.index')
            ->with('faults',$faults)
            ->with('users',$users);

        }else{
            $pending=count(Fault::where('status','Pending')->get());
            $assigned=count(Fault::where('status','Assigned')->get());
            $waiting=count(Fault::where('status','Waiting')->get());
            $completed=count(Fault::where('status','Completed')->get());
             $unresolvedFaults=Fault::where('status','Pending')->get();
              $users=User::latest()->get(); 

           

            return view('home')->with(['pending'=>$pending,'assigned'=> $assigned,'waiting'=>$waiting,'completed'=>$completed,'unresolvedFaults'=>$unresolvedFaults,'users'=>$users]);
        }
      
    }
}
