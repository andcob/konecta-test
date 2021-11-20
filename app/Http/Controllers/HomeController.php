<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $week_day = null;

        return view('home',compact('week_day'));
    }

    /**
     * Muestra el día de la semana.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dayWeek(Request $request)
    {
        $this->validate($request, [
            'day' => 'required|numeric|min:1|max:7',
        ]);

        $input = $request->all();
        $form_day = $input['day']-1;
        $week_days = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
        $week_day = $week_days[$form_day];

        return view('home',compact('week_day'));
    }
}
