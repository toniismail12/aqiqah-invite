<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Models\BioModel;
use App\Models\Deskripsi;
use App\Models\more;

class indexController extends Controller
{
    public function index(Request $request)
    {

        return view('welcome', [
            'invite' => $request->invite,
            'bio'=> BioModel::all(),
            'desc'=> Deskripsi::all(),
            'more'=> more::all(),
        ]);
    }

    public function success(Request $request)
    {

        return view('success', [
            'invite' => $request->invite,
        ]);
    }

    public function sendEmail(Request $request)
    {

        $mailData = [
            'title' => 'Ucapan Aqiqah from '. $request->name,
            'body' =>  $request->message,
        ];
         
        Mail::to('zhafiraalyssandra@gmail.com')->send(new DemoMail($mailData));

        return redirect("/success?invite=".$request->name);
    }
}
