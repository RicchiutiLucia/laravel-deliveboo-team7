<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrder;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request){

        $data = $request->all();

        $validator = Validator::make($data,
        [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
           
        ]
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    'success' => false,
                    'errors' => $validator->errors()
                ]
            );
        }

        $newLead = new Lead();
        $newLead ->fill($data);
        $newLead ->save();

        $newOrder = new NewOrder($newLead );
        Mail::to('deliveboogruppo7@gmail.com')->send($newOrder);

        Mail::to($newLead->email)->send($newOrder);

        return response()->json(
            [
                'success' => true
            ]
        );



    }
}
