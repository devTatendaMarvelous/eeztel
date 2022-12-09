<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\Fault;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards=User::join('cards','cards.user_id','=','users.id')->get();
      return view('cards.index')->with('cards', $cards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
           // dd($request);
        $card=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'timeIn'=>'required',
            'timeOut'=>'required',
            'reportDate'=>'required',
            'totalTime'=>'required',
            
        ]);

        if($request->hasFile('file')){
            $card['file']=$request->file('file')->store('jobCards','public');
        }
        $fault=Fault::find($id);
        $user=User::find($fault->clientId);
        $card['client']=$user->name;
        $card['user_id']=auth()->user()->id;
        $card['status']='Waiting Client Approval';

        $fault->status='Waiting';
       $fault->save();
        Card::create($card);
        return redirect('/cards');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card=Card::find($id);
        return view('cards.edit')->with('card', $card);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storedcard=Card::find($id);
          $card=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
       
        
        $storedcard->update($card);
        return redirect('/cards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Card::destroy($id);
       return back();
        //
    }
}
