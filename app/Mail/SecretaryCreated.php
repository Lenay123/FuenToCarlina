<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SecretaryCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $secretary;
    public $password;
    
    public function __construct($secretary, $password)
    {
        $this->secretary = $secretary;
        $this->password = $password;
    }
    
    public function build()
    {
        $content = "<p>Hello {$this->secretary->first_name},</p>";
        $content .= "<p>Welcome to our community! Your account has been successfully created. Here are your login credentials:</p>";
        $content .= "<p>Email: {$this->secretary->email}</p>";
        $content .= "<p>Password: {$this->password}</p>";
        $content .= "<p>You can login <a href='https://barangayconnect.online/'>here</a>. Feel free to change your password after logging in for the first time. Thank you for joining us!</p>";
    
        return $this->subject('User Credentials Email')->html($content);
    }
    

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Secretary Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
