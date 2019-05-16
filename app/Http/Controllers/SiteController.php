<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Notice;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function update($id)
    {
        $item = Notice::find($id);

        // $this->authorize('update-notice', $item);

        if(Gate::denies('edit_notice', $item))
        {
            abort(403, 'Acceso Negado');
        }        

        return view('updatepost', compact('item'));
    }

    public function rolesPermissions()
    {
        $name = auth()->user()->name;

        echo "<h1>$name</h1>";

        foreach(auth()->user()->roles as $key => $value)
        {
            echo $value->name;
            echo "<br>";
            echo '<hr>';
            
            $permissions = $value->permissions;

            foreach($permissions as $secondKey => $secondValue)
            {
                echo $secondValue->name;
                echo "<br>";
            }

            echo '<hr>';
            echo "<br><br>";
            echo "<br><br>";
        }
    }
}
