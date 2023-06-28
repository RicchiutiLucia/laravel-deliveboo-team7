<?php

namespace App\Mail;

use App\DishOrder;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\User;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('New Order Created')
        ->view('emails.orderRestaurantMail')
        ->with('order', $this->order);
    }
        
    }

    
    

