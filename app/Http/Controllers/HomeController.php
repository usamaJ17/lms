<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $student =  User::role('student')->count();
        $teacher =  User::role('teacher')->count();
        $fee = Fee::sum('fee');
        return view('home')->with(compact('student','teacher','fee'));
    }
    public function email()
    {
        $users = User::all();
        return view('email')->with(compact('users'));
    }
    public function sendEmail(Request $req)
    {
        $subject = $req->input('subject');
        $email = $req->input('email');
        $body = $req->input('body');

        Mail::to($email)->send(new SendEmail($subject, $body));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
