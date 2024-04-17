<?php

namespace App\Services;

use App\Models\Agenda;
use App\Models\AgendaEtablissement;
use Illuminate\Http\Request;


class AgendaEtablissementService
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {

        $size = $request->size ?? 25;
        $agenda = Agenda::latest()->paginate($size);

        return $agenda;
    }

    /**
     * Show the form for creating a new resource .
     *
     * @return        \Illuminate\Http\JsonResponse

     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'etablissement_id' => 'required|integer',
            'agenda_id' => 'required|integer',
            "debut",
            "fin"

        ]);

        //  $agendaExist = Agenda::where('praticien_id', $validatedData['praticien_id'])

        //     ->get();

        // if (count($agendaExist) ==   0) {
        //     // Mise a jour de l'agenda si c'est le meme jour
        //     $agenda = $agendaExist->first();
        // } else {
        // Création de la nouvelle notation
        // }
        $agendaEtablissement = new  AgendaEtablissement();
        $agendaEtablissement->debut = $validatedData['debut'];
        $agendaEtablissement->fin = $validatedData['fin'];
        $agendaEtablissement->agenda_id = $validatedData['agenda_id'];
        $agendaEtablissement->etablissement_id = $validatedData['etablissement_id'];
        
        $agendaEtablissement->save();


        return $agendaEtablissement;
    }

    public function getAgenda($praticien_id)
    {
        $agendas = Agenda::where('praticien_id', $praticien_id)->get();

        if (count($agendas) != 0) {
            $agenda = $agendas->last();
            return $agenda;
        } else {
            return [];
        }
    }
}
