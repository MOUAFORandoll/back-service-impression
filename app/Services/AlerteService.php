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
use App\Models\Etablissement;
use App\Models\Notation;
use App\Models\Patient;
use App\Models\Prestataire;
use App\Models\RendezVous;
use App\Models\SpecialitePrestataire;
use Illuminate\Validation\ValidationException;
use Nette\Utils\DateTime;
use App\Models\AgendaRendezVous;
use App\Models\AgendaPrestatairePermanent;
use Carbon\Carbon;
use DateTimeZone;

class AlerteService
{


    private $NotationService;

    public function __construct(NotationService $NotationService)
    {
        $this->NotationService = $NotationService;
    }

    public function index(Request $request)
    {
        $size = $request->size ?? 25;
        $notations = Notation::latest()->paginate($size);

        return $notations;
    }
    /**
     * Show the form for creating a new resource or update if existing .
     *
     * @return        \Illuminate\Http\JsonResponse

     */
    public function subScribeAlerte(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'alert_id' => 'required|integer',
                'etablissement_id' => 'required|integer',



            ]);

            $alert_id = $validatedData['alert_id'];
            $etablissement_id = $validatedData['etablissement_id'];

            $alerte = Alerte::where('id', $alert_id)
                ->first();
            $alerte
                ->etablissement_id
                =  $etablissement_id;

            $alerte->save();

            return $alerte;
        } catch (ValidationException $exception) {
            return response()->json([
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function addSpecialiteAlerte($specialite, int  $alerte)
    {

        foreach ($specialite as $specialite_id) {
            $SpecialiteAlerte =   SpecialiteAlerte::create([

                "specialite_id"  => $specialite_id,
                "alerte_id"  => $alerte


            ]);

            $SpecialiteAlerte->save();
        }
    }
    /**
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getListAlerte($user_id)
    {


        try {
            // $validatedData = $request->validate([
            //     'user_id' => 'required|integer',
            // ]);

            // $user_id = $validatedData['user_id'];

            $listAlerte = Alerte::where('user_id', $user_id)
                ->whereNotNull('etablissement_id')
                ->with(['etablissement'])

                ->get();
            $final = [];


            foreach ($listAlerte as $alert) {
                $etablissement  = $this->getEtablissement($alert->etablissement_id);
                if ($etablissement != null) {
                    $final[] = [
                        "id" =>   $alert->id,

                        'name_user' =>  $alert->name_user,
                        'phone_user' =>  $alert->phone_user,
                        'birthday_user' =>  $alert->birthday_user,
                        'poids_user' =>  $alert->poids_user,
                        'taille_user' =>  $alert->taille_user,
                        'email_user' =>  $alert->email_user,
                        'etablissement_id' =>  $alert->etablissement_id,
                        'etablissement ' => $etablissement,
                        'niveau_urgence' =>  $alert->niveau_urgence,
                        'description' =>  $alert->description,
                        'ville' =>  $alert->ville,
                        'longitude' =>  $alert->longitude,
                        'latitude' =>  $alert->latitude,
                        'sexe_user' =>  $alert->sexe_user,
                        'created_at' =>  $alert->created_at,
                        'updated_at' =>  $alert->updated_at,
                    ];
                }
            }
            return $final;
        } catch (ValidationException $exception) {
            return response()->json([
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    /**
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getNote(int $etablissement_id)
    {


        $notE =   $this->NotationService->getNote($etablissement_id);
        // Initialisation de la somme
        $somme = 0;

        // Parcourir les clés et ajouter les valeurs à la somme
        foreach ($notE as $cle => $valeur) {
            $somme += $valeur;
        }
        return count($notE) != 0 ? $somme / count($notE) : 0;
    }

    public function matchSpeciality($specialite, int  $etablissement_id)
    {
        $sps = [];


        foreach ($specialite as  $valeur) {
            $exist = SpecialiteEtablissement::where('specialite_id', $valeur)
                ->where('etablissement_id', $etablissement_id)->with(['specialiteetablissement'])->whereNull('deleted_at')
                ->get();
            if (count($exist)  !=  0) {
                if ($exist->first()->deleted_at ==  Null) {
                    $sps[] = $exist->first()->specialiteetablissement;
                }
            }
        }


        return  $sps;
    }
    public function specialitySearch($specialite)
    {
        $sps = [];


        foreach ($specialite as  $valeur) {
            $exist = Specialite::where('id', $valeur)
                ->get();
            if (count($exist)  !=  0) {
                if ($exist->first()->deleted_at ==  Null) {
                    $sps[] = $exist->first();
                }
            }
        }


        return  $sps;
    }
    public function specialityMatchAndAllInEtablissement($specialiteSearch, $etablissement)
    {

        $listSpecialiteFinal = [];
        foreach ($specialiteSearch as  $valeur) {
            $exist = SpecialiteEtablissement::where('specialite_id', $valeur)
                ->where('etablissement_id', $etablissement->id)
                ->with(['specialiteetablissement'])
                ->whereNull('deleted_at')
                ->get();

            if (count($exist)  !=  0) {
                if ($exist->first()->deleted_at ==  Null) {
                    $listSpecialiteFinal[] = $exist->first()->specialiteetablissement;
                }
            }
        }


        $specialiteEtablissement = SpecialiteEtablissement::where('etablissement_id', $etablissement->id)
            ->with(['specialiteetablissement'])
            ->whereNull('deleted_at')
            ->get();

        foreach ($specialiteEtablissement as $valeur) {
            if (!$this->findBuyId($listSpecialiteFinal, $valeur)) {
                $listSpecialiteFinal[] = $valeur->specialiteetablissement;
            }
        }

        return
            array_values(array_unique(
                $listSpecialiteFinal
            ));
    }
    public function specialitye($etablissement)
    {

        $listSpecialiteFinal = [];



        $specialiteEtablissement = SpecialiteEtablissement::where('etablissement_id', $etablissement->id)
            ->with(['specialiteetablissement'])
            ->whereNull('deleted_at')
            ->get();

        foreach ($specialiteEtablissement as $valeur) {
            if ($valeur->specialiteetablissement != null) {
                $listSpecialiteFinal[] = $valeur->specialiteetablissement->libelle;
            }
        }

        return
            array_values(array_unique(
                $listSpecialiteFinal
            ));
    }
    public function specialityMatchAndAllInPrestataire($specialiteSearch, $prestataire)
    {

        $listSpecialiteFinal = [];
        foreach ($specialiteSearch as  $valeur) {
            $exist = SpecialitePrestataire::where('specialite_id', $valeur)
                ->where('prestataire_id', $prestataire->id)
                ->with(['specialiteprestataire'])
                ->whereNull('deleted_at')
                ->get();

            if (count($exist)  !=  0) {
                if ($exist->first()->deleted_at ==  Null) {
                    $listSpecialiteFinal[] = $exist->first()->specialiteprestataire;
                }
            }
        }


        $specialiteprestataire = SpecialitePrestataire::where('prestataire_id', $prestataire->id)
            ->with(['specialiteprestataire'])
            ->whereNull('deleted_at')
            ->get();

        foreach ($specialiteprestataire as $valeur) {
            if (!$this->findBuyId($listSpecialiteFinal, $valeur)) {
                if ($valeur->specialiteprestataire != Null) {
                    $listSpecialiteFinal[] = $valeur->specialiteprestataire;
                }
            }
        }

        return
            array_values(array_unique(
                $listSpecialiteFinal
            ));
    }
    public function specialityPrestataireMatchNumber($specialiteSearch, $prestataire)
    {

        $listSpecialiteFinal = [];
        foreach ($specialiteSearch as  $valeur) {
            $exist = SpecialitePrestataire::where('specialite_id', $valeur)
                ->where('prestataire_id', $prestataire->id)
                ->with(['specialiteprestataire'])
                ->whereNull('deleted_at')
                ->get();

            if (count($exist)  !=  0) {
                if ($exist->first()->deleted_at ==  Null) {
                    $listSpecialiteFinal[] = $exist->first()->specialiteprestataire;
                }
            }
        }


        return
            count($listSpecialiteFinal);;
    }

    public function findBuyId($listSpecialiteFinal, $spe)
    {
        foreach ($listSpecialiteFinal as $speinto) {
            if ($spe != null && $speinto != null) {
                if ($spe->id == $speinto->id) {
                    return true; // Correspondance trouvée, on retourne true directement
                }
            }
        }

        return false; // Aucune correspondance trouvée
    }


    public function matchSpecialityPrestataire($specialite, int  $prestataire_id)
    {
        $sps = [];


        foreach ($specialite as  $valeur) {
            $exist = SpecialitePrestataire::where('specialite_id', $valeur)
                ->where('prestataire_id', $prestataire_id)->with(['specialiteprestataire'])->whereNull('deleted_at')
                ->get();
            if (count($exist)  !=  0) {
                if ($exist->first()->deleted_at ==  Null) {
                    $sps[] = $exist->first()->specialiteprestataire;
                }
            }
        }


        return  $sps;
    }
    public function nmbreConsultationsPrestataire($prestataire_id)
    {



        $consultations = RendezVous::where('prestataire_id', $prestataire_id)->get();



        return count($consultations) == 0 ? 1 : count($consultations);
    }
    public function nmbreExperiencePrestataire($date_debut)
    {

        // Dates à comparer
        $date1 = new DateTime($date_debut);
        $date2 = new DateTime();

        $diff = $date1->diff($date2);
        $nombreAnnees = $diff->y;
        return     $nombreAnnees;
    }
    public function   ifEtablissementSpeciality($specialite, int  $etablissement_id)
    {
        $point = 0;


        foreach ($specialite as  $valeur) {
            $exist = SpecialiteEtablissement::where('specialite_id', $valeur)
                ->where('etablissement_id', $etablissement_id)->whereNull('deleted_at')
                ->get();
            // if ($point == 0) {
            $point += count($exist)  !=  0 ? 5 : 0;
            // }
        }


        return $point;
    }
    public function   ifPrestataireSpeciality($specialite, int  $prestataire_id)
    {
        $point = 0;


        foreach ($specialite as  $valeur) {
            $exist = SpecialitePrestataire::where('specialite_id', $valeur)
                ->where('prestataire_id', $prestataire_id)->whereNull('deleted_at')
                ->get();
            // if ($point == 0) {
            $point += count($exist)  !=  0 ? 5 : 0;
            // }
        }


        return $point;
    }
    public function bmiGraduation($bmi)
    {
        if (
            0 <= $bmi &&
            $bmi <= 18.4
        ) {
            return 0;
        } else    if (
            18.5 <= $bmi &&
            $bmi <= 24.9
        ) {
            return 1;
        } else    if (
            25 <= $bmi &&
            $bmi <= 29.9
        ) {
            return 2;
        } else    if (
            30 <= $bmi &&
            $bmi <= 34.9
        ) {
            return 3;
        } else    if (
            35 <= $bmi &&
            $bmi <= 39.9
        ) {
            return 4;
        } else    if (
            40 <= $bmi
        ) {
            return 5;
        } else {
            return 0;
        }
    }
    // public function noteAutorisationCreation(int  $etablissement_id)
    // {
    //     $exist = ReglementationAutorisation::where(
    //         "etablissement_id",
    //         $etablissement_id
    //     )->get();

    //     return count($exist) == 0 ? 0 : ($exist->authorisation_creation ? 5 : 0);
    // }
    // public function noteAutorisationOuverture(int  $etablissement_id)
    // {
    //     $exist = ReglementationAutorisation::where(
    //         "etablissement_id",
    //         $etablissement_id
    //     )->get();

    //     return count($exist) == 0 ? 0 : ($exist->authorisation_ouverture ? 5 : 0);
    // }
    public function noteAutorisationService(int  $etablissement_id)
    {
        $exist = ReglementationAutorisation::where(
            "etablissement_id",
            $etablissement_id
        )->get();

        return count($exist) == 0 ? 0 : ($exist->first()->authorisation_service == true ? 5 : 0);
    }
    public function ifEtablissementVille($ville, int  $etablissement_id)
    {
        $exist = Etablissement::where(
            "id",
            $etablissement_id
        )
            ->with(['localisation',])
            ->first();
        return    $exist == null ? 0 : ($exist['localisation'] == null ? 0 : (strtolower($exist['localisation']["ville"]) == strtolower($ville) ? 5 : 0));
    }
    public function noteGarantiEtablissement(int  $etablissement_id)
    {
        $exist = Garanti::where(
            "etablissement_id",
            $etablissement_id
        )->get();

        return  count($exist) == 0 ? 0 :  5;
    }
    public function getEtablissement(int  $etablissement_id)
    {
        $exist =  Etablissement::where(
            "id",
            $etablissement_id
        )->first();

        return  $exist;
    }
    public function getAgendaEtablissement(int  $etablissement_id)
    {
        $dataF = [];
        $agenda = Agenda::get();

        foreach ($agenda as $ag) {
            $agEta = AgendaEtablissement::where(
                "etablissement_id",
                $etablissement_id
            )
                ->where("agenda_id", $ag->id)->first();
            if ($agEta  != null) {
                $dataF[] = [
                    'libelle' => $ag->libelle,
                    'debut' => $agEta->debut,
                    'fin' => $agEta->fin,
                ];
            }
        }




        return  $dataF;
    }
    public function distanceEtablissementUser($latUser, $lonUser, int  $etablissement_id)
    {
        $exist = Etablissement::where(
            "id",
            $etablissement_id
        )
            ->with(['localisation',])
            ->first();
        // return $exist != null;
        if ($exist != null) {
            if ($exist->localisation != null) {
                $latEtablissment
                    = $exist->localisation->latitude;
                $lonEtablissment
                    = $exist->localisation->longitude;
                return
                    $this->distanceGraduation($this->calculerDistance($latUser, $lonUser, $latEtablissment, $lonEtablissment));
            } else {
                return  0;
            }
        } else {
            return  0;
        }
    }
    public function distancePrestataireUser($latUser, $lonUser, int  $prestataire_id)
    {
        $exist = Prestataire::where(
            "id",
            $prestataire_id
        )
            ->with(['localisation',])
            ->first();
        // return $exist != null;
        if ($exist != null) {
            if ($exist->localisation != null) {
                $lat
                    = $exist->localisation->latitude;
                $lon
                    = $exist->localisation->longitude;
                return
                    $this->distanceGraduation($this->calculerDistance($latUser, $lonUser, $lat, $lon));
            } else {
                return  0;
            }
        } else {
            return  0;
        }
    }


    public function getAgendaPrestataireRdvRecent(int  $prestataire_id)
    {


        $agEta = AgendaRendezVous::where(
            "prestataire_id",
            $prestataire_id
        )->whereDate('date', '>=', new DateTime()) // Filtrer les rendez-vous à partir de la date actuelle
            ->orderBy('date') // Triez par ordre croissant de date
            ->first();
        return  $agEta != null  ?  $agEta->date : null;
    }



    public function getAgendaPrestataireRdvRecentMoyene(int  $prestataire_id)
    {
        $dataF = [];

        $agEta = AgendaRendezVous::where(
            "prestataire_id",
            $prestataire_id
        )->whereDate('date', '>=', new DateTime()) // Filtrer les rendez-vous à partir de la date actuelle
            ->orderBy('date') // Triez par ordre croissant de date
            ->first();
        if ($agEta != null) {


            $date1 = new DateTime($agEta->date);
            $date2 = new DateTime();

            $difference = $date1->diff($date2);

            $jours = $difference->days;


            return  $this->diffDateGraduation($jours);
        } else {
            return 0;
        }
    }


    public function getAgendaPrestatairePermanentRecent(int $prestataire_id)
    {
        // Récupérer les données depuis la base de données
        $agendas = AgendaPrestatairePermanent::where('prestataire_id', $prestataire_id)
            ->with(['agenda'])
            ->get();

        // Jours de la semaine
        $joursSemaine = [
            "lundi",
            "mardi",
            "mercredi",
            "jeudi",
            "vendredi",
            "samedi",
            "dimanche",
        ];


        $jours = $agendas->pluck('agenda.libelle')->map(function ($jour) {
            return strtolower($jour);
        });

        $jourCourant = Carbon::now()->dayOfWeek;

        $indexJourPlusProche = $jours->reduce(
            function ($acc, $jour) use ($joursSemaine, $jourCourant) {
                $index = array_search(strtolower($jour), $joursSemaine);

                if ($index === false) {
                    return $acc; // Ignorer les jours non valides
                }

                $difference = ($index - $jourCourant + 7) % 7;

                return ($acc === -1 || $difference < $acc) ? $difference : $acc;
            },
            -1
        );

        // Ajouter la différence pour obtenir la date du jour le plus proche
        $dateProche = Carbon::now()->addDays($indexJourPlusProche + 1);
        $jourPlusProche = $joursSemaine[($jourCourant + $indexJourPlusProche) % 7]; // Calculer le jour le plus proche

        $dateFormatee = $dateProche->toDateString();

        return $dateFormatee;
    }



    public function getAgendaPrestatairePermanentRecentMoyene(int  $prestataire_id)
    {
        // Récupérer les données depuis la base de données
        $agendas = AgendaPrestatairePermanent::where('prestataire_id', $prestataire_id)
            ->with(['agenda'])
            ->get();

        // Jours de la semaine
        $joursSemaine = [
            "lundi",
            "mardi",
            "mercredi",
            "jeudi",
            "vendredi",
            "samedi",
            "dimanche",
        ];

        // Récupérer les libellés des jours depuis la liste d'objets AgendaPrestatairePermanent
        $jours = $agendas->pluck('agenda.libelle')->map(function ($jour) {
            return strtolower($jour);
        });


        $jourCourant = Carbon::now()->dayOfWeek;

        $indexJourPlusProche = $jours->reduce(
            function ($acc, $jour) use ($joursSemaine, $jourCourant) {
                $index = array_search(strtolower($jour), $joursSemaine);

                if ($index === false) {
                    return $acc; // Ignorer les jours non valides
                }

                $difference = ($index - $jourCourant + 7) % 7;

                return ($acc === -1 || $difference < $acc) ? $difference : $acc;
            },
            -1
        );

        // Ajouter la différence pour obtenir la date du jour le plus proche
        $dateProche = Carbon::now()->addDays($indexJourPlusProche + 1);
        $jourPlusProche = $joursSemaine[($jourCourant + $indexJourPlusProche) % 7]; // Calculer le jour le plus proche

        $dateFormatee = $dateProche->toDateString();

        $date1 = new DateTime($dateFormatee);
        $date2 = new DateTime();

        $difference = $date1->diff($date2);

        $jours = $difference->days;


        return  $this->diffDateGraduation($jours);
    }
    public function getRecentRendezVous(int $prestataire_id)
    {
        // Récupérer les données depuis la base de données
        $rendezVous = RendezVous::where('prestataire_id', $prestataire_id)
            // ->where('status', 1)
            ->orderBy('date_rendez_vous')
            ->orderBy('heure_rendez_vous')
            ->get();

        // Convert date_rendez_vous to the desired format
        $rendezVous = $rendezVous->map(function ($item) {
            $item->date_rendez_vous = Carbon::parse($item->date_rendez_vous)->format('Y-m-d');
            return $item;
        });

        // Group by date_rendez_vous
        $groupedRendezVous = $rendezVous->groupBy('date_rendez_vous');

        // Organize time slots for each date
        $result = [];
        foreach ($groupedRendezVous as $date => $rendezVousPerDate) {
            $timeSlots = $rendezVousPerDate->pluck('heure_rendez_vous')->toArray();
            $result[] = [
                'date' => $date,
                'time_slots' => $timeSlots,
            ];
        }

        return $result;
    }
    function calculerDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // Rayon moyen de la Terre en kilomètres

        // Conversion des degrés en radians
        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        // Calcul des différences de latitude et de longitude
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        // Calcul de la distance sur une sphère
        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;
        return $distance;
    }

    function diffDateGraduation($day)
    {
        if (

            $day <= 1
        ) {
            return 50;
        } else    if (
            $day <= 3
        ) {
            return 30;
        } else    if (
            $day <= 6
        ) {
            return 10;
        } else {
            return 0;
        }
    }
    function distanceGraduation($distance)
    {
        if (
            0 <= $distance &&
            $distance <= 20
        ) {
            return 5;
        } else    if (
            21 <= $distance &&
            $distance <= 40
        ) {
            return 4;
        } else    if (
            41 <= $distance &&
            $distance <= 60
        ) {
            return 3;
        } else    if (
            61 <= $distance &&
            $distance <= 80
        ) {
            return 2;
        } else    if (
            81 <= $distance &&
            $distance <= 100
        ) {
            return 1;
        } else    if (
            101 <= $distance
        ) {
            return 0;
        } else {
            return 0;
        }
    }
}
