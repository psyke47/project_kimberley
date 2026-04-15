<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "New Contact Form: " . $this->formData['name'] . " - " . ($this->formData['services'] ?? 'Inquiry'),
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            to: [new Address('sales@greycode.co.za', 'Greycode Sales')],
            replyTo: [new Address($this->formData['email'], $this->formData['name'])],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-submitted',
            with: ['data' => $this->formData]
        );
    }
}