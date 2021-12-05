<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class AuthotizeController extends Controller
{

    public function reg_index()
    {
       
       return view('reg');

    }
    public function login_index()
    {
       
       return view('login');

    }
    public function reg(Request $request)
    {
        
        if(!$request['email'])
        {
            return redirect('/reg')->withErrors(['FormError' => 'Поле Email пустое']);
        }
        if(!$request['password'])
        {
            return redirect('/reg')->withErrors(['FormError' => 'Поле Password пустое']);
        }


            $userrep = DB::select('select * from users where email = :email',
            [
                'email' => $request['email'],
            ]);


            $user = [
                'email' => $request['email'],
                'password' => $request['password']
                
            ];

            if($userrep){
                return redirect('/reg')->withErrors(['FormError' => 'Такой пользователь уже существует']);
            }else{

                $user['password'] = Crypt::encryptString($user['password']);
                $usercr = User::create($user);
                if($usercr){
                      
                        return redirect('log');
                }  
                else{
                    return redirect('/reg')->withErrors(['FormError' => 'Пользователь не создан']);
                } 

            }

      
    }

    public function login(Request $request){

       
        if(!$request['email'])
        {
            return redirect('/log')->withErrors(['FormError' => 'Поле Email пустое']);
        }
        if(!$request['password'])
        {
            return redirect('/log')->withErrors(['FormError' => 'Поле Password пустое']);
        }


       
            $user = DB::select('select * from users where email = :email', 
            [
             'email' => $request['email'],
            ]);

            if($user){
    
                if(Crypt::decryptString($user[0]->password) ==  $request['password']){     
                   
                    $us = User::find($user[0]->id);
                    Auth::login($us);
                    return redirect('/');
                }else{
                    return redirect('/log')->withErrors(['FormError' => 'Не вереный пароль']);
                }


            }else{
                return redirect('/log')->withErrors(['FormError' => 'Пользователь с таким email-ом не найден']);
            }



        


        
         

    }
    

    public function logout(){
      Auth::logout();
      return redirect('log');
    }

 

}
