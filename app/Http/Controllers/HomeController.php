<?php

namespace App\Http\Controllers;

use App\Notifications\TelegramNotification;
use App\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required'
        ]);
        $user = new Order($request->all());
        $user->save();
        $user->notify(new TelegramNotification($user));
        return redirect()->back();
    }
}
