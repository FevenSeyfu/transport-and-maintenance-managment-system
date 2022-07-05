<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transport;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function client() {
        $transports= Transport:: where('requested_by','=',\Auth::user()->username)->get();
        return view('client.dashboard',[
            'transports'=>$transports
        ]);
    }  
    public function driver() {
        return view('driver.dashboard');
      }
    public function Leader() {
        return view('Leader.dashboard');
    }
    public function maintenHead() {
        return view('maintenHead.dashboard');
      }
    public function admin() {
        $count= User::where('isApproved','=','0')->count();
            return view('admin.dashboard',[
                'count' => $count
            ]);
    }  
    public function approval()
    {
        return view('approval');
    }
    public function unapprovedList(){
        $users= User::where('isApproved','=','0')
                            ->get();
                return view('admin.users',compact('users'));
    }
    public function approve($user_id){
        $user = User::findOrFail($user_id);
        $user->update(['isApproved'=> '1']);
        return redirect()->route('admin.users')->withMessage('User Approved Successfully');

    }
    
}
