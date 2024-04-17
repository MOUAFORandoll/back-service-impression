<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Etablissement;
use App\Models\Notation;
use App\Models\Patient;
use Illuminate\Validation\ValidationException;

class NotationService
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $page_size = $request->page_size ?? 25;

        $notations = Notation::latest()->paginate($page_size);

        return $notations;
    }

    /**
     * Show the form for creating a new resource or update if existing .
     *
     * @return        \Illuminate\Http\JsonResponse

     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'etablissement_id' => 'required|integer',
                'user_id' => 'required|integer',
                'qualite_soins' => 'integer|between:0,5',
                'temps_attente' => 'integer|between:0,5',
                'disponibilite_medicaments' => 'integer|between:0,5',
                'examens' => 'integer|between:0,5',
                'comprehension_soins_administres' => 'integer|between:0,5',
                'resolution_probleme' => 'integer|between:0,5',
                'facture' => 'integer|between:0,5',

            ]);

            $etablissement = Etablissement::where('id', $validatedData['etablissement_id'])->get();


            if (count($etablissement) == 0) {
                // Mise a jour de la notation existante
                return response()->json(['status' => false]);
            }
            $notations = Notation::where('etablissement_id', $validatedData['etablissement_id'])
                ->where('user_id', $validatedData['user_id'])
                ->get();

            if (count($notations) != 0) {
                // Mise a jour de la notation existante
                $notation = $notations->first();
            } else {
                // Création de la nouvelle notation
                $notation = new Notation();
            }

            $notation->etablissement_id = $validatedData['etablissement_id'];
            $notation->user_id = $validatedData['user_id'];
            $notation->qualite_soins = $validatedData['qualite_soins'];
            $notation->temps_attente = $validatedData['temps_attente'];
            $notation->disponibilite_medicaments = $validatedData['disponibilite_medicaments'];
            $notation->examens = $validatedData['examens'];
            $notation->comprehension_soins_administres = $validatedData['comprehension_soins_administres'];
            $notation->resolution_probleme =
                $validatedData['resolution_probleme'];
            $notation->facture = $validatedData['facture'];
            $notation->save();


            return response()->json(['status' => true]);
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


        $qualite_soins
            = 0;
        $temps_attente =
            0;
        $disponibilite_medicaments =
            0;
        $examens = 0;
        $resolution_probleme = 0;
        $facture = 0;
        $comprehension_soins_administres = 0;

        $notations = Notation::where('etablissement_id', $etablissement_id)
        
            ->get();

        foreach ($notations as $notation) {
            $qualite_soins +=
                $notation->qualite_soins;
            $temps_attente
                += $notation->temps_attente;
            $disponibilite_medicaments += $notation->disponibilite_medicaments;
            $examens +=
                $notation->examens;
            $comprehension_soins_administres +=  $notation->comprehension_soins_administres;
            $resolution_probleme +=
                $notation->resolution_probleme;
            $facture
                += $notation->facture;
        }

        return count($notations) == 0 ?  [
            "qualite_soins" => 0,
            "temps_attente" => 0,
            "disponibilite_medicaments" =>   0,
            "examens" => 0,
            "comprehension_soins_administres" =>  0,
            "resolution_probleme" => 0,
            "facture" => 0,
        ] : [
            "qualite_soins" => $qualite_soins / count($notations),
            "temps_attente" =>  $temps_attente / count($notations),
            "disponibilite_medicaments" =>   $disponibilite_medicaments / count($notations),
            "examens" => $examens / count($notations),
            "comprehension_soins_administres" =>  $comprehension_soins_administres / count($notations),
            "resolution_probleme" =>  $resolution_probleme / count($notations),
            "facture" =>  $facture / count($notations),
        ];
    }
}
