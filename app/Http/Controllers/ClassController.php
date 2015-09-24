<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddClassRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Classes;
use App\User_classes;
use DB;
use Auth;


class ClassController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $classes = DB::table('users', 'user_classes', 'classes')
                ->select('users.*', 'classes.*', 'user_classes.*', 'user_classes.id as uc_id', 'users.id as u_id')
                ->join('user_classes', 'user_id', '=', 'users.id' )
                ->join('classes', 'class_id', '=', 'classes.id')
                ->where('users.id', Auth::id())
                ->get();

        return view('home', compact('classes'));
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        Classes::create($request->all());

        return redirect('/');
    }

    public function addClass($id)
    {
        $users = User::all()->where('id', $id)->lists('last_name', 'id');

        $classes = Classes::all()->lists('class_code', 'id');

        return view('addClass', compact('users', 'classes'));
    }

    public function storeClass(AddClassRequest $request)
    {

        $classes = new User_classes;
        $classes->user_id = $request->user_id;
        $classes->class_id = $request->class_id;
        $classes->date_taken = Carbon::createFromFormat('m/d/Y', $request->date_taken)->format('Y-m-d');
        $classes->note = $request->note;
        $classes->save();

        flash()->success('Your class has been added.');

        return redirect('/');
    }

    public function deleteClass($id)
    {
        $deleteClass = User_classes::find($id);

        $deleteClass->delete();

        flash()->success('Your class has been deleted.');

        return redirect('/');
    }

    public function getEditClass($id)
    {
        $classes = User_classes::all()->where('id', $id);

        $users = User::all()->lists('last_name', 'id');

        return view('editClass', compact('classes','users'));
    }
}