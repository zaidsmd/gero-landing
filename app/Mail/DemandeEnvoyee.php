<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
class DemandeEnvoyee extends Mailable
{
    use Queueable, SerializesModels;

    public $entreprise;

    public function __construct($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    public function build()
    {
        return $this->view('emails.demande_envoyee')
            ->subject('Email de confirmation')
            ->with([
                'entreprise' => $this->entreprise,
            ]);
    }
}

