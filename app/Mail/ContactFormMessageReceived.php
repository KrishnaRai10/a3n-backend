<?php

namespace App\Mail;

use App\Models\ContactDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public ContactDetail $contact)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We have received your message'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-message-received',
            with: [
                'contact' => $this->contact,
            ],
        );
    }
}
