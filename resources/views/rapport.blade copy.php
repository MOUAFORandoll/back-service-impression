<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,500i,600,700,800,900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900&display=swap' rel='stylesheet'>

    <title>Medsurlink</title>
    <style>
        body {
            font-size: 0.9em;
            line-height: 1.2;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 1.2px;
            color: #32325d;
            background-color: white;
        }

        h2 {
            color: #00ada7;
            font-weight: 600;
            text-align: left;
            font-size: 2em !important;
        }

        p {
            font-weight: 500;
        }

        h3,
        /*b {*/
        /*    color: #dee2e6;*/
        /*}*/

        td,
        th,
        hr {
            border: 1px solid #dee2e6;
            padding: 0.2em;

        }

        hr {
            border: 1px solid #dee2e6;
        }

        th {
            font-weight: 700;
        }

        table {
            border-collapse: collapse;
        }

        .titre-rapport {
            text-align: center;
            text-transform: uppercase;
            color: #00ada7;
            font-weight: 900;
        }

        .sous-titre-rapport {
            text-transform: uppercase;
            color: #00ada7;
            /*font-size:0.8em;*/
        }

        .sous-titre-rapport::after {
            /* content:""; */
            display: block;
            width: 60%;
            /* height:0.5px; */
            font-weight: 600;
            /* background-color:#dee2e6; */
            /* margin:0 auto;*/
            margin-top: 3em;
        }

        .logo-rapport {
            width: 200px;
            heigth: auto;
        }

        .rapport-logo-wrapper {
            margin-left: 39%;

        }

        .title-table {
            font-weight: 600;

        }

        .sous-titre-rapport--table {
            text-transform: uppercase;
            color: #00ada7;
            font-size: 0.8em;
        }

        /* DivTable.com */
        .divTable {
            display: table;
            width: 100%;
        }

        .divTableRow {
            display: table-row;
        }

        .divTableHeading {
            /*background-color: #eee;*/
            display: table-header-group;
        }

        .divTableCell,
        .divTableHead {
            /*border: 1px solid #999999;*/
            display: table-cell;
            /* padding: 3px 10px;*/
        }

        .divTableHeading {
            /*background-color: #eee;*/
            display: table-header-group;
            font-weight: bold;
        }

        .divTableFoot {
            /*background-color: #eee;*/
            display: table-footer-group;
            font-weight: bold;
        }

        .divTableBody {
            display: table-row-group;
        }

        .column {
            float: left;
            width: 50%;
        }

        .row {
            border-bottom: 1px solid #dee2e6;
        }
        
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
            width: 100%;
        }

        .row p {
            font-size: 12px;
        }

        .p {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <img class="logo-footer" src="{{asset('/images/logo.png')}}" alt="Logo-Medicasure">

    @isset($dossier)
    <div class="justify-content-center">
        <h2>{{is_null($consultation->patient->surname) ? "" :  $consultation->patient->surname }} {{$consultation->patient->name}}</h2>
        <h3>{{$consultation->patient->birthday}}</h3>
        <h3>Email : {{$consultation->patient->email}}</h3>

    </div>

    @if(count($dossier->allergies) >0)
    <div class="justify-content-center"> Allergies Information </div>
    @forelse($dossier->allergies as $allergie)
    <table style="width: 100%">
        <thead>
            <td class="title-table">Description</td>
            <td class="title-table">Date debut</td>
        </thead>
        <tbody>
            <td>{{$allergie->description}}</td>
            <td>{{$allergie->date}}</td>
        </tbody>
    </table>
    @empty
    <p>Aucune allergie</p>
    @endforelse
    @endif

    @endisset

    @isset($consultationObstetrique)
    @endisset

    @isset($consultationMedecine)
    <div style="color: black">
        @if(!is_null($consultationMedecine->etablissement))
        <div>
            @if(!is_null($consultationMedecine->etablissement->logo))
            <div class="rapport-logo-wrapper">
                <img src="{{public_path('/storage/'.$consultationMedecine->etablissement->logo)}}" class="logo-rapport" alt="" />
            </div>
            @endif
            <p style="text-align: center"><b>{{$consultationMedecine->etablissement->name}}</b></p>
        </div>
        @endif
        <p class="titre-rapport"><strong>Rapport de consultation</strong></p>
        <br>
        <p>Honorée Consoeur, Honoré Confrère,</p>
        <p>J'ai vu en date du <strong>{{\Carbon\Carbon::parse($consultationMedecine->date_consultation)->format('d/m/Y')}}</strong>, pour une consultation de<b> médecine générale</b>, votre patient(e)
            <strong>{{$consultationMedecine->dossier->patient->user->nom}}</strong> né(e) le <strong>{{\Carbon\Carbon::parse($consultationMedecine->dossier->patient->date_de_naissance)->format('d/m/Y')}}</strong>
            pour:
            @forelse($consultationMedecine->motifs as $motif)
            {{-- <strong>{{$motif->description}},</strong> --}}
            @empty
            <strong></strong>
            @endforelse
        </p>.

        <h4 class="sous-titre-rapport">Motif(s) de Consultation</h4>
        @forelse($consultationMedecine->motifs as $motif)
        <p>{{$motif->description}}</p>
        @empty
        <strong></strong>
        @endforelse


        <h4 class="sous-titre-rapport">Mode de vie</h4>
        <div class="divTable">
            <div class="divTableBody">
                <div class="divTableRow">

                    <div>
                        <table style="width: 100%">

                            <tbody>
                                <tr>
                                    <td>Profession </td>
                                    <td>Situation familiale </td>
                                    <td>Nombre d'enfants </td>
                                    <td>Tabac </td>
                                    <td>Alcool </td>
                                    <td>Autres </td>
                                </tr>
                                <tr>
                                    <td><span>{{$consultationMedecine->profession}}</span></td>
                                    <td><span>{{$consultationMedecine->situation_familiale}}</span></td>
                                    <td><span>{{$consultationMedecine->nbre_enfant}}</span></td>
                                    <td><span>{{$consultationMedecine->tabac}} UPA</span></td>
                                    <td><span>{{$consultationMedecine->alcool}}</span></td>
                                    <td><span>{!! $consultationMedecine->autres !!}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- @if(count($consultationMedecine->dossier->antecedents) >0)--}}
        <h4 class="sous-titre-rapport">Antédédents</h4>
        <div class="divTable">
            <div class="divTableBody">
                <div class="divTableRow">

                    <div class="divTableCell">
                        <table style="width: 100%">
                            <thead>
                                <td class="title-table">Type</td>
                                <td class="title-table">Description</td>
                                <td class="title-table">Date debut</td>
                            </thead>
                            <tbody>
                                <tr></tr>
                                @forelse($consultationMedecine->dossier->antecedents as $antecedent)
                                <tr>
                                    <td>{{$antecedent->type}}</td>
                                    <td>{{$antecedent->description}}</td>
                                    <td>{{\Carbon\Carbon::parse($antecedent->date)->format('d/m/Y')}}</td>
                                </tr>
                                @empty
                                <strong></strong>
                                @endforelse
                                {{-- @foreach($consultationMedecine->dossier->consultationsMedecine as $consultation)--}}
                                {{-- @if(\Carbon\Carbon::parse($consultation->updated_at)->lessThan($consultationMedecine->updated_at))--}}
                                {{-- @foreach($consultation->conclusions as $conclusion)--}}
                                {{-- @if(!is_null($conclusion->description) && $conclusion->description !=='null')--}}
                                {{-- <tr>--}}
                                {{-- <td>Consultation</td>--}}
                                {{-- <td>{!!  $conclusion->description !!}</td>--}}
                                {{-- <td>{{\Carbon\Carbon::parse($conclusion->updated_at)->format('d/m/Y')}}</td>--}}
                                {{-- </tr>--}}
                                {{-- @endif--}}
                                {{-- @endforeach--}}
                                {{-- @endif--}}
                                {{-- @endforeach--}}
                                {{-- @foreach($consultationMedecine->dossier->cardiologies as $cardiologie)--}}
                                {{-- @if(\Carbon\Carbon::parse($cardiologie->updated_at)->lessThan($consultationMedecine->updated_at))--}}
                                {{-- @if(!is_null($cardiologie->conclusion) && $cardiologie->conclusion !=='null')--}}
                                {{-- <tr>--}}
                                {{-- <td>Consultation</td>--}}
                                {{-- <td>{!!  $cardiologie->conclusion !!}</td>--}}
                                {{-- <td>{{\Carbon\Carbon::parse($cardiologie->updated_at)->format('d/m/Y')}}</td>--}}
                                {{-- </tr>--}}
                                {{-- @endif--}}
                                {{-- @endif--}}
                                {{-- @endforeach--}}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        {{-- @endif--}}
        <div>
            <h4 class="sous-titre-rapport">Parametres</h4>
            @if(count($consultationMedecine->parametresCommun)>=1)
            <div class="row">
                @foreach($consultationMedecine->parametresCommun as $parametre)
                @if($loop->first)
                <div class="list">Poids (kg) : <strong>{{$parametre->poids}}</strong> </div>
                <div class="list">Taille (cm): <strong>{{$parametre->taille}}</strong></div>
                <div class="list">Bmi (kg/m²): <strong>{{$parametre->bmi}}</strong></div>
                <div class="list">TA Systolique (mmHg) : <strong>{{$parametre->ta_systolique}}</strong></div>
                <div class="list">TA Diastolique (mmHg) : <strong>{{$parametre->ta_diastolique}}</strong></div>
                <div class="list">Température (°C): <strong>{{$parametre->temperature}}</strong></div>
                <div class="list">Fréquence cardiaque (bpm) : <strong>{{$parametre->frequence_cardiaque}}</strong></div>
                <div class="list">Fréquence respiratoire (cpm) : <strong>{{$parametre->frequence_respiratoire}}</strong></div>
                <div class="list">sato2 (%) : <strong>{{$parametre->sato2}}</strong></div>
                @endif
                @endforeach
            </div>
            @else
            <p>Poids (kg) :</p>
            <p>Taille (cm): </p>
            <p>Bmi (kg/m²):</p>
            <p>TA Systolique (mmHg) :</p>
            <p>TA Diastolique (mmHg) : </p>
            <p>Température (°C):</p>
            <p>Fréquence cardiaque (bpm) : </p>
            <p>Fréquence respiratoire (cpm) : </p>
            <p>sato2 (%) : </p>
            @endif
        </div>
        @if(count($consultationMedecine->dossier->allergies)>0)

        <h4 class="sous-titre-rapport">Allergies</h4>
        @forelse($consultationMedecine->dossier->allergies as $allergie)
        <span> {{$allergie->description}}, </span>
        @empty
        <strong></strong>
        @endforelse

        @endif
        @if(count($consultationMedecine->dossier->traitements) >0)

        <div class="divTable">
            <h4 class="sous-titre-rapport">Traitement actuel</h4>
            <div class="divTableBody">
                <div class="divTableRow">

                    @foreach($consultationMedecine->dossier->traitements as $traiement)
                    @if($loop->last)
                    <div>
                        <span>{!!$traiement->description!!}</span>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if(!is_null($anamneses))
        <h4 class="sous-titre-rapport">Anamnèse</h4>
        @if($anamneses != 'null')
        @foreach($anamneses as $key => $parametre)
        <div class="row">
            <div class="column">{!!$key!!}</div>
            <div class="column">
                @foreach($parametre as $ref)
                <span class="p">{!!$ref['fr_description']!!} -</span>
                @endforeach

            </div>
        </div>
        @endforeach
        @endif
        @endif
        @if(!is_null($anamese))
        {{-- <h4 class="sous-titre-rapport">Anamnèse</h4> --}}
        <div class="row">
            {!!$consultationMedecine->anamese!!}
        </div>
        @endif

        @if(!is_null($examen_clinique))
        <h4 class="sous-titre-rapport">Examen(s) clinique(s)</h4>
        @if($examen_clinique != 'null' && is_array($examen_clinique))
        @foreach($examen_clinique as $key => $parametre)
        <div class="row">
            <div class="column">{!!$key!!}</div>
            <div class="column">
                @foreach($parametre as $ref)
                <span class="p">{!!$ref['fr_description']!!} -</span>
                @endforeach
            </div>
        </div>
        @endforeach
        @endif
        @endif
        @if(!is_null($examen_clinique))
        {{-- <h4 class="sous-titre-rapport">Examen(s) clinique(s)</h4> --}}
        <div class="row">
            {!!$consultationMedecine->examen_clinique!!}
        </div>
        @endif
        @if(!is_null($examen_complementaire))
        <h4 class="sous-titre-rapport">Examen(s) complémentaire(s)</h4>
        @if($examen_complementaire != 'null' && is_array($examen_complementaire))
        @foreach($examen_complementaire as $key => $parametre)
        <div class="row">
            <div class="column">{!!$key!!}</div>
            <div class="column">
                @foreach($parametre as $ref)
                <span class="p">{!!$ref['fr_description']!!} -</span>
                @endforeach
            </div>
        </div>
        @endforeach
        @endif
        @if(!is_null($complementaire))
        {{-- <h4 class="sous-titre-rapport">Examen(s) complémentaire(s)</h4> --}}
        <div class="row">
            {!!$consultationMedecine->complementaire!!}
        </div>
        @endif
        @endif

        @if(!is_null($diasgnostic))
        <h4 class="sous-titre-rapport">Diagnostic ICD</h4>
        @if($diasgnostic != 'null')
        @foreach($diasgnostic as $parametre)
        <div class="row">
            <div class="column" style="width: 20%">{!!$parametre['code']!!}</div>
            <div class="column" style="width: 80%">
                <p class="p">{!!$parametre['title']!!}</p>
            </div>
        </div>
        @endforeach
        @endif
        @endif

        @if(!is_object(collect($consultationMedecine->conclusions->toArray())->first()))
        @if(!is_null($consultationMedecine->conclusions->first()))
        <h4 class="sous-titre-rapport">Diagnostic</h4>
        <p class="p">{!!($consultationMedecine->conclusions->first())->description!!}</p>
        @endif
        @endif


        @if(strlen($consultationMedecine->traitement_propose)>0)
        <h4 class="sous-titre-rapport">Conduite à tenir</h4>
        @if($consultationMedecine->traitement_propose != 'null')
        <p>{!! $consultationMedecine->traitement_propose !!}</p>
        @endif
        @endif

        @if((!is_null($consultationMedecine->file) && $consultationMedecine->file != 'null') || count($consultationMedecine->files)>0)
        <h4 class="sous-titre-rapport">Consulter les pièces jointes</h4>
        @if(!is_null($consultationMedecine->file) && $consultationMedecine->file != 'null')
        <a href="{{config('app.url')}}/public/storage/{{$consultationMedecine->file}}">{{(explode("/",$consultationMedecine->file))[count(explode("/",$consultationMedecine->file)) - 1]}}</a><br>
        @endif
        @if(count($consultationMedecine->files)>0)
        @foreach($consultationMedecine->files as $file)
        <a href="{{config('app.url')}}/public/storage/{{$file->chemin}}">{{$file->nom}}</a><br>
        @endforeach
        @endif
        @endif

    </div>

    @endisset

    @isset($resultatLabo)
    @endisset

    @isset($resultatImagerie)
    @endisset

    <h4></h4>
    <p>Je vous remercie de m'avoir adressé votre patient(e) et vous adresse mes salutations confraternelles.</p>
    @if($consultationMedecine->dossier->patient->user->isMedicasure == '1')
    <p><i>Dossier relu et validé par l'équipe Medicasure</i></p>
    @endif
    @if(count($medecins) != 0)
    <h4 class="sous-titre-rapport">Medecin(s) ayant revisité votre consultation</h4>
    @foreach($medecins as $medecin)
    @if(!is_null($medecin->user))
    <div style="display: inline">
        @if(!is_null($medecin->signature))
        <div>
            <img width="300px" height="auto" src={{public_path('/storage/'.$medecin->signature)}} />
        </div>
        @endif

        <p>{{$medecin->civilite}} {{is_null($medecin->user->surname) ? "" :  $medecin->user->surname }} {{$medecin->user->nom}}</p>

        @if(!is_null($medecin->numero_ordre))
        @if($medecin->numero_ordre != 'null' && strlen($medecin->numero_ordre ) >0)
        <p>Numéro d'ordre: {{$medecin->numero_ordre}}</p>
        @endif
        @endif
    </div>
    @endif
    @endforeach
    @endif
    <div style="display: inline">
        @if(!empty($praticiens->user))
        <p>Généré par <b>{{$praticiens->civilite}} {{is_null($praticiens->user->surname) ? "" :  $praticiens->user->surname }} {{$praticiens->user->nom}}</b></p>
        @if(!is_null($praticiens->numero_ordre))
        @if($praticiens->numero_ordre != 'null' && strlen($praticiens->numero_ordre ) >0)
        <p>Numéro d'ordre: {{$praticiens->numero_ordre}}</p>
        @endif
        @endif
        @endif
        <p style="text-align: right"> Date de création : <b>{{\Carbon\Carbon::parse()->format('d/m/Y')}}</b></p>

        @isset($signature)
        @if(!is_null($signature) && strlen($signature)>0)
        <div>
            <img style="float: right" width="300px" height="auto" src={{public_path('/storage/'.$signature)}} />
        </div>
        @endif
        @endisset
    </div>
    @if(count($consultationMedecine->operationables) >0)
    <h4 class="sous-titre-rapport">Contributeurs</h4>
    @foreach($mContributeurs as $medecin)
    @if(!is_null($medecin->user))
    <div style="display: inline">
        @if(!is_null($medecin->signature))
        <div>
            <img width="300px" height="auto" src={{public_path('/storage/'.$medecin->signature)}} />
        </div>
        @endif

        <p>{{$medecin->civilite}} {{is_null($medecin->user->surname) ? "" :  $medecin->user->surname }} {{$medecin->user->nom}}</p>

        @if(!is_null($medecin->numero_ordre))
        @if($medecin->numero_ordre != 'null' && strlen($medecin->numero_ordre ) >0)
        <p>Numéro d'ordre: {{$medecin->numero_ordre}}</p>
        @endif
        @endif
    </div>
    @endif
    @endforeach
    @foreach($pContributeurs as $praticien)
    @if(!is_null($praticien->user))
    <div style="display: inline">
        @if(!is_null($praticien->signature))
        <div>
            <img width="300px" height="auto" src={{public_path('/storage/'.$praticien->signature)}} />
        </div>
        @endif

        <p>{{$praticien->civilite}} {{is_null($praticien->user->surname) ? "" :  $praticien->user->surname }} {{$praticien->user->nom}}</p>

        @if(!is_null($praticien->numero_ordre))
        @if($praticien->numero_ordre != 'null' && strlen($praticien->numero_ordre ) >0)
        <p>Numéro d'ordre: {{$praticien->numero_ordre}}</p>
        @endif
        @endif
    </div>
    @endif
    @endforeach
    @endif

</body>

</html>