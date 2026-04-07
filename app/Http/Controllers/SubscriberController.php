<?php

namespace App\Http\Controllers;

use App\Models\EmailList;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index(EmailList $emailList)
    {
        return view('subscribers.index',
            [
                'emailList' => $emailList,
                'subscribers' => $emailList->subscribers()
            ]);
    }
}
