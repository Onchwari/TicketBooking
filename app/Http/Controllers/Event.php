<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;
class Event extends Controller
{
    public function addEvent(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Details'=>'required',
            'Venue'=>'required',
            'Time'=>'required',
            'Date'=>'required',
            'Regular'=>'required',
            'VIP'=>'required',
            'MaxAttendees'=>'required',
            'Poster'=>'required'

        ]);
       
        $users=new Events();
        $users->Name=$request->Name;
        $users->Details=$request->Details;
        $users->Venue=$request->Venue;
        $users->Time=$request->Time;
        $users->Date=$request->Date;
        $users->Regular=$request->Regular;
        $users->VIP=$request->VIP;
        $users->MaxAttendees=$request->MaxAttendees;

        if(($request->hasfile('Poster'))){
        
            $file=$request->file('Poster');
            $ext=$file->getClientOriginalExtension();
            $filename = time(). '.'.$ext;
            $file->move('assests/events/', $filename);
            $users->Poster=$filename;   
        }
        
        $res=$users->save();
        if($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()-> with('fail', 'Something went wrong');
        }
    }
    public function viewEvents(){
        $user = DB::table('events')->get();
        
        return view('admin/admindashboard',compact('user'));
    }
    public function delete($id){
        $user = Events::find($id);
        $user->delete();  
        return redirect('/dashboard')->with('status', "Data deleted Successfully");
    }
    public function edit($id){
        $user = Events::find($id);
        return view('admin/edit',compact('user'));
            
    }
    public function update(Request $request,$id){
        $users = Events::find($id);
        $users->Name=$request->Name;
        $users->Details=$request->Details;
        $users->Venue=$request->Venue;
        $users->Time=$request->Time;
        $users->Date=$request->Date;
        $users->Regular=$request->Regular;
        $users->VIP=$request->VIP;
        $users->MaxAttendees=$request->MaxAttendees;
        if(($request->hasfile('Poster')))
        {
            $destination = 'assests/events/'.$users->Photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('Poster');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assests/events/', $filename);
            $users->Poster=$filename;   
        }  
           
            $users->update();
            return redirect('/dashboard');
            
    }

    public function displayEvents(){
        $user = DB::table('events')->get();   
        return view('users/events',compact('user'));
    }
    public function displayDetails(){
        $user = DB::table('events')->get();   
        return view('users/events',compact('user'));
    }
}
