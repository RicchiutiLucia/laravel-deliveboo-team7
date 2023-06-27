<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $paymentMethodNonce = $request->input('paymentMethodNonce');
        $amount = $request->input('amount');
        $items = $request->input('items');

        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key'),
        ]);

        // Create a transaction using the payment method nonce
        $result = $gateway->transaction()->sale([
            'amount' => $amount,  // Specify the amount for the transaction
            'paymentMethodNonce' => $paymentMethodNonce,

            'options' => [
                'submitForSettlement' => true,  // Set this to true to settle the transaction immediately
            ],
        ]);

        if ($result->success) {
            // Transaction was successful
            $transactionId = $result->transaction->id;

            // Additional logic, such as updating the order status or sending a confirmation email
            return response()->json(['success' => true, 'transactionId' => $transactionId, 'items', $items]);
        } else {
            // Transaction failed
            $errorMessages = $result->message;
            return response()->json(['success' => false, 'error' => $errorMessages]);
        }
    }
}
