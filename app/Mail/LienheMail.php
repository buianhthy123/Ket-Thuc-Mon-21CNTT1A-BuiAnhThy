<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class LienheMail extends Mailable
{
    use Queueable, SerializesModels;
    
    
    public $lienheData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($lienheData)
    {
        //
        $this->lienheData = $lienheData;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            replyTo: [
                new Address($this->lienheData['email'], $this->lienheData['name']),
            ],
            
            subject: 'Thông tin liên hệ',
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
            view: 'lienhe.ttlienhe',
            with: [
                'lienheData' => $this->lienheData
            ],
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
