<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{

    public function __construct(){
        $this->returnUrl="/users";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view("backend.users.index",["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.users.insert_form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        $user=new User();
        $data=$this->prepare($request,$user->getFillable());
        $user->fill($data);

        $user->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view("backend.users.update_form", ["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user,UserRequest $request)
    {

        $data=$this->prepare($request,$user->getFillable());
        $user->fill($data);

        $user->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

        $user->delete();

        return response()->json(["message"=>"Done","id"=>$user->user_id]);
    }

    public function passwordForm(User $user){

        return view("backend.users.password_form", ["user"=>$user]);

    }

    public function changePassword(User $user, UserRequest   $request){


        $data=$this->prepare($request,$user->getFillable());
        $user->fill($data);

        $user->save(); 
        return Redirect::to($this->returnUrl);
    }
}
