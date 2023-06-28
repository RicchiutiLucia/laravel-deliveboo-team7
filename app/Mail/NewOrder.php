<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_lead)
    {
        $this->lead = $_lead;
    }

    public function build()
    {

            // return $this->view('view.name');
            return $this->view('emails.orderRestaurantMail')->with([
                'name' => $this->lead['name'],
                'email' => $this->lead['email'],
                'address' => $this->lead['address'],
                'phone' => $this->lead['phone'],
                'total_price' => $this->lead['total_price'],
                'order' => $this->lead['order']
            ]);
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Nuovo ordine dal sito',
            replyTo: $this->lead->email
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.orderRestaurantMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
