<?php

namespace App\Services;

use App\Models\Agenda;
use App\Models\AgendaEtablissement;
use App\Models\Alerte;
use App\Models\Garanti;
use App\Models\LicenceAlerte;
use App\Services\NotationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abonnement;
use App\Models\Etablissement;
use App\Models\Notation;
use App\Models\Patient;
use Illuminate\Validation\ValidationException;
use Nette\Utils\DateTime;

class AbonnemetLicenceAlerteService
{


    private $NotationService;

    public function __construct(NotationService $NotationService)
    {
        $this->NotationService = $NotationService;
    }

    public function indexAbonnement(Request $request)
    {
        $size = $request->size ?? 25;
        $notations = Abonnement::latest()->paginate($size);

        return $notations;
    }

    /**
     * Show the form for creating a new resource or update if existing .
     *
     * @return        \Illuminate\Http\JsonResponse

     */
    public function buyLicenceAlerte(
        Request $request
    ) {
        try {

            $abonnement_id = $request->abonnement_id;
            $user_id = $request->user_id;



            $LicenceAlerte =   LicenceAlerte::create([

                "abonnement_id"  => $abonnement_id,
                "user_id"  => $user_id


            ]);

            $LicenceAlerte->save();
            return $LicenceAlerte;
        } catch (ValidationException $exception) {
            return response()->json([
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function storeAbonnement(

        Request $request
    ) {
        try {

            $libelle = $request->libelle;
            $libelle_en = $request->libelle_en;
            $duree
                = $request->duree;
            $prix = $request->prix;



            $Abonnement =   Abonnement::create([

                "libelle"  => $libelle,
                "libelle_en"  => $libelle_en,
                "duree"  => $duree,
                "prix"  => $prix


            ]);

            $Abonnement->save();
            return $Abonnement;
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
    public function hasValidLicenceAlerteUser($user_id)
    {


        try {
            $licence = [
                'left_time' => 30,
                'authorised' => 1,
            ];

            $existAlerte  =  Alerte::where('user_id', $user_id)

                ->get();
            if (count($existAlerte) >= 3) {




                $existlicenceAlerte  = LicenceAlerte::where('user_id', $user_id)

                    ->get();

                $licence
                    = count($existlicenceAlerte) == 0 ? [
                        'left_time' => 0,
                        'authorised' => 2,
                    ] :  $this->verifValidity($existlicenceAlerte->last());
            }
            return $licence;
        } catch (ValidationException $exception) {
            return [];
        }
    }

    function verifValidity($licence)

    {

        $now = new DateTime();
        $dateBuy = $licence->created_at;
        $ab =
            Abonnement::where('id', $licence->abonnement_id)

            ->get()->last();
        if ($ab != null) {
            $duree      = $ab
                ->duree;
            $difference =  $now->diff($dateBuy)->days;
            if ($difference < $duree) {

                return [
                    'left_time' => $difference,
                    'authorised' => 1,
                ];
            } else {
                return [
                    'left_time' => 0,
                    'authorised' => 2,
                ];
            }
        } else {
            return [
                'left_time' => 0,
                'authorised' => 2,
            ];
        }
    }

    public function getListLicenceAlerteUser(Request $request, $user_id)
    {


        try {
            $size = $request->size ?? 25;


            $listlicenceAlerte  = LicenceAlerte::where('user_id', $user_id)::latest()->paginate($size)

                ->get();



            return $listlicenceAlerte;
        } catch (ValidationException $exception) {
            return [];
        }
    }
}
