<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewOrderCustomer extends Mailable
{
    use Queueable, SerializesModels;

    protected $userData;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_userData)
    {
        $this->userData = $_userData;
    }

    public function build()
    {
        //dd($this->userData);
        return $this->view('emails.orderGuestMail')->with(
            'order',
            $this->userData
            /* [
                'name' => $this->userData['name'],
                'email' => $this->userData['email'],
                'phone' => $this->userData['phone'],
                'address' => $this->userData['address'],
            ] */
        );
    }
}
