<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class UserCredentialsEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $user;
    public $password;

    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function build()
    {
        $content = "<p>Hello {$this->user->first_name},</p>";
        $content .= "<p>Welcome to our community! Your account has been successfully created. Here are your login credentials:</p>";
        $content .= "<p>Email: {$this->user->email}</p>";
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
            subject: 'User Credentials Email',
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
