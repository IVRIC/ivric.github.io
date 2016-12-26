<?php

namespace App\Http\Controllers;

use App\Subscription;
use Validator;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showFrequentlyAskedQuestions() {
        return view('pages.faq');
    }

    public function storeSubscribedEmail(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:subs,email'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors(["subscription" => $validator->errors()->all()]);
        }
        Subscription::create(['email'=>$request->get('email')]);
        $request->session()->flash('success', 'Successfully Subscribed');
        return redirect()->back();
    }
}
