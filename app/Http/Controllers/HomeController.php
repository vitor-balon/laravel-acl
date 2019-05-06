<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Notice;

class HomeController extends Controller
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
        // $all = Notice::all();
        $all = Notice::where('user_id', auth()->user()->id)->get();

        return view('home', compact('all'));
    }

    public function update($id)
    {
        $item = Notice::find($id);

        // $this->authorize('update-notice', $item);

        if(Gate::denies('update-notice', $item))
        {
            abort(403, 'Acceso Negado');
        }

        return view('updatepost', compact('item'));
    }
}
