<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  
	public function edit($id){
		return view('edit');
	}

	public function store(Request $request, $id){
		$users = User::find($id);
		$users->name = $request->name;
		$users->email = $request->email;
		$users->save();
		// dd('success');
		return redirect('/')->with('message', 'Data berhasil di update');
	}
}
