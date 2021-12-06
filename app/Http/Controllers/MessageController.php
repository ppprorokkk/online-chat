<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        if(Auth::check()){
            $messages = Messages::all();
            return view('message', ['messages' => $messages]);
        }else {
           return redirect('log');
        }
        

    }
    public function add(Request $req){
        
        if(!empty($req['message_text'])){
            $email = Auth::user()->email;
            DB::insert(
            'insert into messages (email, message, date) values (?, ? , current_timestamp())',
             [$email, $req['message_text']]); 
        }
    }

    public function get(){
      $messages = DB::select('select * from messages where date >= DATE_ADD(CURDATE(), INTERVAL -3 HOUR)');
      return view('mess', ['messages' => $messages]);
    }


}
