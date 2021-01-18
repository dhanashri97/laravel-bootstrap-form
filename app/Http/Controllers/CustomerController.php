<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    function submit(){
    //   var_dump(request('first-name'));
//        echo (request('first-name'));
//        echo (request('last-name'));
//        echo (request('mobile-number'));
//        echo (request('email'));
        // return view('customer',['collection'=>$data['data']]);
        $data = array(
            'firstName'=>request('first-name'),
            'lastName'=>request('last-name'),
            'mobileNumber'=>request('mobile-number'),
            'email'=>request('email')
        );
        return view('tabledata')->with($data);
    }

}
