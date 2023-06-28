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
            'message' => 'required'
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

        $pippo = new Lead();
        $pippo->fill($data);
        $pippo->save();

        $newOrder = new NewOrder($pippo);
        Mail::to('deliveboogruppo7@gmail.com')->send($newOrder);

        return response()->json(
            [
                'success' => true
            ]
        );



    }
}
