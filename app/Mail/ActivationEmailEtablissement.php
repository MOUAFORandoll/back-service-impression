<?php

namespace App\Mail;

use App\Models\Etablissement;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ActivationEmailEtablissement  extends Mailable
{
    use Queueable, SerializesModels;
    public $etablissement;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Etablissement $etablissement)
    {

        $this->etablissement = $etablissement;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@medsurlink.com')
            ->subject(config('app.name') . ' Demande d\'activation')
            ->with(['etablissement' => $this->etablissement])
            ->markdown('emails.activate-etablissement');
    }
}
