<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks=Feedback::all();
        return view('feedbacks.index')->with('feedbacks',$feedbacks);
    }

     public function client()
    {
        $feedbacks=User::join('feedback','feedback.user_id','=','users.id')->where('user_id',auth()->user()->id)->get();
       
        return view('feedbacks.clientView')->with('feedbacks',$feedbacks);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $feedback=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        if($request->hasFile('file')){
            $feedback['file']=$request->file('file')->store('feedbackFiles','public');
        }
        $feedback['user_id']=auth()->user()->id;

      
        Feedback::create($feedback);
        return redirect('/feedbacks/'.auth()->user()->id.'/client');
    }}