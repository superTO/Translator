<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class getmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $document;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        //$this->document_name = $document;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mailcontext');
        //->to($this->user->email)
        //->view('email.mailcontext');
    }
}
