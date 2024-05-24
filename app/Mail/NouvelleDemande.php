<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
class NouvelleDemande extends Mailable
{
    use Queueable, SerializesModels;

    public $entreprise;
    public $telephone;
    public $email;

    public function __construct($entreprise, $telephone, $email)
    {
        $this->entreprise = $entreprise;
        $this->telephone = $telephone;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.nouvelle_demande')
            ->subject('Nouvelle demande de demonstration ('.$this->entreprise .')')
            ->with([
                'entreprise' => $this->entreprise,
                'telephone' => $this->telephone,
                'email' => $this->email,
            ]);
    }
}

