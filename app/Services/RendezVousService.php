<?php

namespace App\Services;

use App\Models\Agenda;
use App\Models\AgendaEtablissement;
use App\Models\Alerte;
use App\Models\Garanti;
use App\Models\SpecialiteAlerte;
use App\Models\SpecialiteEtablissement;
use App\Models\ReglementationAutorisation;
use App\Models\Specialite;
use App\Services\NotationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prestataire;
use App\Models\NotationRendezVous;
use App\Models\RendezVous;
use Illuminate\Validation\ValidationException;
use Nette\Utils\DateTime;

class RendezVousService
{


    public function existNotation(int $rendez_vous_id,    $patient_alerte_id)
    {
        // var_dump($rendez_vous_id, $patient_alerte_id);
        $rdv = RendezVous::where('id', $rendez_vous_id)

            ->first();

        // Vérifier si la date du rendez-vous est déjà passée
        $dateRdv = $rdv->date_rendez_vous;
        $dateNow = new DateTime();
        $isRdvPassed = $dateRdv < $dateNow;

        // Vérifier si aucune notation n'a été enregistrée pour cet utilisateur
        $notation = NotationRendezVous::where('rendez_vous_id', $rendez_vous_id)
            ->where('patient_alerte_id', $patient_alerte_id)
            ->exists(); // Vérifie si la notation existe pour cet utilisateur

        if ($notation) {

            return false;
        } else {

            // Si la date du rendez-vous est passée et aucune notation n'est enregistrée pour l'utilisateur
            if ($isRdvPassed) {
                return true; // Renvoie true dans ce cas
            } else {
                return false; // Renvoie false sinon
            }
        }
    }
}
