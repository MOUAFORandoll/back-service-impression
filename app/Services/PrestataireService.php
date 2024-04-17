<?php

namespace App\Services;

use App\Models\Agenda;
use App\Models\AgendaEtablissement;
use App\Models\Alerte;
use App\Models\Garanti;
use App\Models\SpecialiteAlerte;
use App\Models\SpecialiteEtablissement;
use App\Models\ReglementationAutorisation;
use App\Models\Consultation;
use App\Services\NotationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prestataire;
use App\Models\Notation;
use App\Models\AgendaRendezVous;
use Illuminate\Validation\ValidationException;
use Nette\Utils\DateTime;

class PrestataireService
{



    public function __construct()
    {
    }


    public function nombrealertePrestataire(int  $prestataire_id)
    {
        $alertes = Alerte::where(
            "prestataire_id",
            $prestataire_id
        )->get();

        return  count($alertes);
    }
    public function haveAgendaRendezVous(int  $prestataire_id)
    {
        $agenda = AgendaRendezVous::where(
            "prestataire_id",
            $prestataire_id
        )->whereDate('date', '>=', new DateTime('2024-02-29'))->get();

        return  count($agenda) != 0;
    }
    public function nombreConsultations(int  $prestataire_id)
    {
        $agenda = Consultation::where(
            "prestataire_id",
            $prestataire_id
        )->get();

        return  count($agenda);
    }
}
