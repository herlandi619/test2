<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $users = User::all();
        return view('dashboard', [
            'users' => $users
        ]);
    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect('/dashboard');
    }

    public function show($id)
    {   
        $users = User::find($id);
        return view('show',[
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {   

        $users = User::create($request->all());
 
        return redirect('/dashboard');
    }

    public function edit(Request $request, $id)
    {   
        $users = User::find($id);
        return view('edit', [
            'users' => $users
        ]);
    }

    public function update($id)
    {
        $users = User::where('id', $id)->first();
        $users->update(request()->all());

        return redirect('/dashboard');
    }

}
