<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showFrequentlyAskedQuestions() {
        return view('pages.faq');
    }

    public function storeSubscribedEmail(Request $request) {
//        $validator = Validator::make($request->all(),[
//            'email' => 'required|email|unique:subscriptions,email'
//        ]);
//        if ($validator->fails()){
//            return redirect()->back();
//        }
        return redirect()->back();
    }
}
