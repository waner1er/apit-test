<?php

namespace App\Http\Controllers;


use Dymantic\InstagramFeed\Profile;
use App\Http\Controllers\Controller;



class InstagramController extends Controller
{
    public function index()
    {

        $datas = Profile::where('username', 'wanerrivet')->first()->feed(10);
        $profile = Profile::where('username', 'wanerrivet')->first();

        return view('instagram', ['datas' => $datas, 'profile' => $profile]);
    }

}
