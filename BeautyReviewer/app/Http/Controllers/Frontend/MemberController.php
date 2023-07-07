<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\FrontendRequest\RegisterRequest;
use App\Http\Requests\FrontendRequest\LoginRequest;
use App\Http\Requests\FrontendRequest\UpdateAccountRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showregister()
    {
        return view('Frontend.Member.Register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $datapassword=bcrypt($request->password);
        $dataregister=$request->all();
        $dataregister['password']=$datapassword;
        $dataregister['level']=0;


        $file = $request->avatar;
        if (!empty($file)) {
            $dataregister['avatar']=$file->getClientOriginalName();
            $file->move('Frontend/avatar',$file->getClientOriginalName());
        };

         //dd($dataregister);

        if (User::create($dataregister)) {
            return redirect('/')->with('success',('register success.'));
        }
        else{
            return redirect('/shop/register')->withError('error',('register error.'));
        }
    }
    public function showlogin()
    {
        return view('Frontend.Member.Login');
    }
    public function login(LoginRequest $request)
    {
        $login = [
            'email'=> $request->email,
            'password'=> $request->password,
            'level'=>0
        ];
        // $remember= false;
        // if($request->remember_me){
        //     $remember= true;    
        // }
        if(Auth::attempt($login)){
            return redirect('/')->with('success',('login success.'));
        }else{
            return redirect()->back()->withError('Email or password is not correct.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function account()
    {
        $User=Auth::user();
        //dd($User) ;
        return view('Frontend.Account.account',compact('User'));
    }
    public function updateaccount(UpdateAccountRequest $request)
    {
        //lay id auth
        $userid=Auth::id();
        //tim kiem user theo id
        $user= User::findOrfail($userid);
        $data=$request->all();
        
        $file=$request->avatar;
        if(!empty($file)){
            $data['avatar']=$file->getClientOriginalName();
        }
        if($data['password']){
            $data['password']=bcrypt($data['password']);
        }else{
            $data['password']=$user->password;
        }
        if($user->update($data)){
            if(!empty($file)){
                $file->move('Frontend/avatar',$file->getClientOriginalName());
            }
            return redirect()->back()->with('success',('Update profile success.'));
        }else{
            return redirect()->back()->withError('Update profile error.');
        }
         return redirect('Frontend.Account.account');
    }
    public function showforgotpass()
    {
        return view('Frontend.Member.Forgotpassword');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
