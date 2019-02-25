<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use Image;
use Session;
use Auth;
use Illuminate\Database\QueryException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::user()->supper){
            return view('admin.users.create');
        }
        Session::flash('info', 'You cannot create a new admin since you are not a supper admin.');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->hasFile('avatar') && $request->has('avatar')){
            return redirect()->back()->with('error','Image not supported');
        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        if(Auth::user()->supper){
            $validate = User::where('email', $request->email)->count();
            if($validate > 0){
                Session::flash('error', 'The email is arleady in our database.');
                return redirect()->back();
            }
            $slug = str_slug($request->name);
            $check = User::where('slug', $slug)->count();
            try{
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'slug' => $slug,
                    'password' => bcrypt('@24seven'),
                ]);
            }
            catch(QueryException $ex){
                Session::flash('error', 'Admin could not be added. If the problem persists, contact us. \n#info@24seven.co.ke');
                return redirect()->back();
            }
            
            if($check > 0){
                $user->slug = $slug . $user->id;
                $user->save();
            }
            if($user){
                Session::flash('success', $user->name . ' was successifully added.');
                return redirect()->route('users.index');
            }
        }
        Session::flash('info', 'You cannot create a new admin since you are not a supper admin.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        try{
            $user = User::where('slug', $slug)->first();
        }
        catch(QueryException $e){
            Session::flash('error', 'Couldn\'t find user! Please try again.');
            return redirect()->back();
        }
        if($user == null){
            Session::flash('error', 'Couldn\'t find user! Please try again.');
            return redirect()->route('users.index');
        }
        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        if(Auth::user()->supper == true || Auth::user()->slug == $slug){
            $user = User::where('slug', $slug)->first();
            return view('admin.users.edit')->with('user', $user);
        }
        Session::flash('error', 'You are not allowed to edit other users\' info unless you are a Supper Admin!');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if(!$request->hasFile('avatar') && $request->has('avatar')){
            return redirect()->back()->with('error','Image not supported');
        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        if(Auth::user()->supper == true || Auth::user()->slug == $slug){
            $user = User::where('slug', $slug)->first();

            if($request->password != ''){
                if($request->password == $request->confirm_password){
                    $user->password = bcrypt($request->password);
                }
                else{
                    Session::flash('error', 'Confirmation password and the password do not match.');
                    return redirect()->back();
                }
            }             
            if($request->has('avatar')){
                $old_avatar = $user->avatar;
                $avatar = $request->avatar;
                if($old_avatar != 'uploads/users/avatar.png' && $avatar){
                    File::delete($old_avatar);
                }
                $avatar_name = time() . $avatar->getClientOriginalName();
                $avatar_new_name = 'uploads/users/' . $avatar_name;
                $new_avatar = Image::make($avatar->getRealPath())->resize(500, 500);
                $new_avatar->save($avatar_new_name);
                $avatar = $avatar_new_name;
                $user->avatar = $avatar;
            }

            if($request->phone != ''){
                $user->phone = $request->phone;
            }

            $user->name = $request->name;
            $user->email = $request->email;

            if($request->supper == true){
                $supper = true;
            }
            else{
                $supper = false;
            }

            if(Auth::user()->supper){
                
    
                if($request->supper == false && User::where('supper', true)->count() == 1 && $user->supper == true){
                    Session::flash('error', 'Sorry, you are the ONLY REMAINING supper admin!');
                    return redirect()->back();
                }
    
                $user->supper = $supper;
            }
            elseif($user->supper != $supper){
                Session::flash('error', 'You cannot change your supper-admin status since you are not a supper admin!');
                return redirect()->back();
            }
            $result = $user->save();

            if($result){
                Session::flash('success', 'You successifully updated the admin profile.');
                return redirect()->route('users.show', ['slug' => $slug]);
            }

            Session::flash('error', 'You could not update the admin profile.');
            return redirect()->route('users.index');
        }

        Session::flash('error', 'You are not allowed to edit other users\' info unless you are a Supper Admin!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        try{
            $user = User::where('slug', $slug)->first();
        }
        catch(QueryException $ex){
            Session::flash('error', 'Admin could not be found!');
            return redirect()->back();
        }
        
        if(Auth::user()->supper || Auth::user()->slug == $slug){
            if(User::where('supper', true)->count() == 1 && Auth::user()->supper && Auth::user()->slug == $slug){
                Session::flash('error', 'Sorry, you are the ONLY REMAINING supper admin! Make someone else a supper admin then exit.');
                return redirect()->back();
            }
            $avatar = $user->avatar;
            if($avatar != 'uploads/users/avatar.png'){
                File::delete($avatar);
            }
            $user->delete();
            Session::flash('success', 'Admin removed successifully');
            return redirect()->route('users.index');
        }
        Session::flash('error', 'Admin could not be removed! Task only allowed to Supper Admin!');
        return redirect()->back();
    }
}