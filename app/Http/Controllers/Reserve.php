<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\Events;
use App\Mail\ReservationConfirmation;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;
use DB;
class Reserve extends Controller
{
    public function reserve($id){
        $user = Events::find($id);
        return view('users/reservetickets',compact('user'));
            
    }
    public function makeReserve(Request $request){
        $request->validate([
            'Name'=>'required',
            'Email'=>'required',
            'FullName'=>'required',
            'TicketType'=>'required',
            'NumberofTickets'=>'required|numeric|max:5',
            'TotalPrice'=>'required',
            
        ]);
       
        $users=new Reservation();
        $users->Name=$request->Name;
        $users->Email=$request->Email;
        $users->FullName=$request->FullName;
        $users->TicketType=$request->TicketType;
        $users->NumberofTickets=$request->NumberofTickets;
        $users->TotalPrice=$request->TotalPrice;
        //send email
        $user = $users; 
        Mail::to($user->Email)->send(new ReservationConfirmation($user));

        $res=$users->save();
        if($res){
            return redirect('/events')->with('success','You have registered successfully');
            
        }else{
            return redirect('/events')-> with('fail', 'Something went wrong');
        }
    

        
            
    }
    
}
