<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transport;
use App\Models\driver;
use App\Models\Cars;
use App\Models\Feedback;

class TransportController extends Controller
{
    public function transportreq(){
        return view('client.request');
    
    }
    public function transportreqPost(Request $request){
        $id=\Auth::user()->id;
       
        $user=User::find($id);
        $transport = Transport::create([
            'user_id' =>$user->id,
            'requested_by' =>$user->username,
            'travelers_name'=> $request->input('travelers_name'),
            'destination'=> $request->input('destination'),
            'reason'=> $request->input('reason'),
            'starting_time'=> $request->input('starting_time'),
            'ending_time'=> $request->input('ending_time'),
            
        ]);
       return redirect()->route('client')->with('info','Request has been sent waiting for Approval...');
    }
    public function ReqCompleted($id){
        $transport= Transport::where('id',$id);
        $transport->update(['request_status'=> 'Completed']);
        return redirect()->route('client.feedback')->with('success','Request has been completed please enter feedback...');
    }
    public function feedback(){
       return view('client.feedback');
    }
    public function feedbackpost(Request $request){
        $user=User::find(\Auth::user()->id);
        $feedback = Feedback::create([
            'feedback_By'=>$user->fullName(),
            'feedback_rate'=>$request->input('feedback_rate'),
            'feedback_text'=>$request->input('feedback_text'),
        ]);
        return redirect()->route('client')->with('success','Thank you for your feedback...');
    }
    public function transportAuth(){
        $requests= Transport::all();
        return view('Leader.TransRequests',[
            'requests'=> $requests
        ]);
    }
    public function Approve($id)
    {   
        $transports= Transport::find($id);
        $drivers= driver::where('driver_status','=','Available')->get();
        $cars=Cars::where('car_status','=','Available')->get();
        return view('Leader.ApproveTran')->with(compact('transports','drivers','cars'));
    }
    public function update(Request $request, $id)
    {   
        $user=User::find(\Auth::user()->id);
        $driver= driver::where('id',$request->input('driver_id'))->first();
        $cars=Cars::where('license_plate_number',$request->input('car_license_num'))->first();
        $transport = Transport::where('id',$id)->update([
            'driver_id'=> $request->input('driver_id'),
            'driver_name'=>$driver->driverFullName(),
            'Approved_by'=>$user->fullName(),
            'car_license_num'=> $request->input('car_license_num'),
            'request_status'=> 'Approved',
        ]);
        $cars->update(['car_status'=> 'Assigned']);
        $driver->update(['driver_status'=> 'Assigned']);
        return redirect()->route('TransportAuth');
    }
    
    public function deny($id)
    {
        $user=User::find(\Auth::user()->id);
        $transport = Transport::where('id',$id)->update([
            'request_status' => 'denied',
            'driver_name' => 'Not Assigned',
            'car_license_num' => 'Not Assigned',
            'Approved_by'=>$user->fullName(),
        ]);
        return redirect()->route('TransportAuth')->with('warning','A request has been denied');
        
    }
    
}
