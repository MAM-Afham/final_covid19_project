<?php

namespace App\Http\Controllers;

use App\Models\helpGuide;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\helpGuidRequest;
use App\Models\User;

class helpGuideController extends Controller
{
   //store help guides
   public function index()
   {
    return view('helpGuide');
   }

    public function hgstore(helpGuidRequest $request)
    {

      $validateddata=$request->validated();
      $name=Auth::user()->name ;
      $data= new helpGuide;
      $data->link= $validateddata['link'];
      $data->description=$validateddata['description'];
      $data->username=$name;
      $data->save();
      return redirect('/home')->with('message','Help guide Added Successfully');

    }
    // show help & guides to help & guid page
    public function show()
    {
        Paginator::useBootstrapFive();
        $helpGuids=helpGuide::orderBy("id", "desc")->get();
        $users=User::all();

        return view('helpGuide',compact('helpGuids','users'));
    }
}
