<?php

namespace App\Mail;

use App\Enum\ContactFormType;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $contact;
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
   public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->contact->form_type === ContactFormType::CONSULTATION->value
                ? 'New Consultation Request'
                : 'New Contact Form Submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: $this->contact->form_type === ContactFormType::CONSULTATION->value
                ? 'emails.consultation'
                : 'emails.contact',
            with: [
                'contact' => $this->contact,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
