<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,500i,600,700,800,900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900&display=swap' rel='stylesheet'>

    <title>BabanaExpress</title>
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
    <div style="color: black">
        <div class="rapport-logo-wrapper">
            <img src="https://www.back.BabanaExpress.com/images/logo.png" class="logo-rapport" alt="" />
        </div>
        <h1 class="titre-rapport"><strong>Rapport de consultation</strong></h1>
        <br>
        <p>Honoré Frère, Honorée Soeur,</p>
        <p>J'ai vu en date du <strong>{{\Carbon\Carbon::parse($consultation->date_consultation)->format('d/m/Y')}}</strong>, pour une consultation de type <b> {{$consultation->typeConsultation->libelle}}</b>, le patient(e)
            <strong>{{$consultation->patient->surname}} {{$consultation->patient->name}}</strong> né(e) le <strong>{{\Carbon\Carbon::parse($consultation->patient->birthday)->format('d/m/Y')}}</strong>
            pour:

        </p>.

        <h4 class="sous-titre-rapport">Motif(s) de Consultation</h4>

        <h5> {{$consultation->motif}}</h5>
        @if($consultation->anamnese!=null) <h4 class="sous-titre-rapport">Anamnese</h4>

        <h5> {{$consultation->anamnese}}</h5>
        @endif
        <div>
            <h4 class="sous-titre-rapport">Parametres</h4>
            <ul>
                @if($consultation->antropometrie!=null) <div>
                    <li>
                        <h5 class="sous-titre-rapport">Antropometrie</h5>
                    </li>
                    <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">

                                <div>
                                    <table style="width: 100%">

                                        <tbody>
                                            <tr>
                                                <td>Poids (kg) </td>
                                                <td>Taille (cm) </td>
                                                <td>Circonférence abdominale (cm) </td>
                                                <td>Circonférence cranienne (cm) </td>

                                            </tr>
                                            <tr>
                                                <td><span>{{$consultation->antropometrie->poids}}</span></td>
                                                <td><span>{{$consultation->antropometrie->taille}}</span></td>
                                                <td><span>{{$consultation->antropometrie->circonference_abdominale}}</span></td>
                                                <td><span>{{$consultation->antropometrie->circonference_cranienne}}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>@endif
                @if($consultation->signe_vitaux!=null)
                <div>
                    <li>
                        <h5 class="sous-titre-rapport">Signes vitaux</h5>
                    </li>
                    <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">

                                <div>
                                    <table style="width: 100%">

                                        <tbody>
                                            <tr>
                                                <td>TA Systolique (mmHg) </td>
                                                <td>TA Diastolique (mmHg) </td>
                                                <td>Fréquence cardiaque (bpm) </td>
                                                <td>Fréquence respiratoire (cpm) </td>
                                                <td>Température (°C) </td>
                                                <td>sato2 (%) </td>


                                            </tr>
                                            <tr>
                                                <td><span>{{$consultation->signe_vitaux->ta_systolique}}</span></td>
                                                <td><span>{{$consultation->signe_vitaux->ta_diastolique}}</span></td>
                                                <td><span>{{$consultation->signe_vitaux->frequence_cardiaque}}</span></td>
                                                <td><span>{{$consultation->signe_vitaux->temperature}}</span></td>
                                                <td><span>{{$consultation->signe_vitaux->sato2}}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> @endif
                @if($consultation->nutrition!=null)
                <div>
                    <li>
                        <h5 class="sous-titre-rapport">Antropometrie</h5>
                    </li>
                    <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">

                                <div>
                                    <table style="width: 100%">

                                        <tbody>
                                            <tr>
                                                <td>Mal nutrition</td>
                                                <td>Deshydratation </td>


                                            </tr>
                                            <tr>
                                                <td><span>{{($consultation->nutrition->mal_nutrition ==1)?"Oui":"Non"}}</span></td>
                                                <td><span>{{($consultation->nutrition->deshydratation ==1)?"Oui":"Non"}}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> @endif

                @if($consultation->glycemie!=null)
                <div>
                    <li>
                        <h5 class="sous-titre-rapport">Glycémie</h5>
                    </li>
                    <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">

                                <div>
                                    <table style="width: 100%">

                                        <tbody>
                                            <tr>
                                                <td>Glycémie (mg/dl)</td>
                                                <td>hémoglobine Glyquée (%)</td>

                                            </tr>
                                            <tr>
                                                <td><span>{{$consultation->glycemie->glycemie}}</span></td>
                                                <td><span>{{$consultation->glycemie->hemoglobine_glyquee}}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> @endif
                @if($consultation->lipide!=null)
                <div>
                    <li>
                        <h5 class="sous-titre-rapport">Lipide</h5>
                    </li>
                    <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">

                                <div>
                                    <table style="width: 100%">

                                        <tbody>
                                            <tr>
                                                <td>Cholestérol (mg/dL)</td>
                                                <td>Triglycérides (mg/dL)</td>
                                                <td>HDL (mg/dL)</td>
                                                <td>LDL (mg/dL)</td>


                                            </tr>
                                            <tr>
                                                <td><span>{{$consultation->lipide->cholesterol }}</span></td>
                                                <td><span>{{$consultation->lipide->triglycerides }}</span></td>
                                                <td><span>{{$consultation->lipide->hdl }}</span></td>
                                                <td><span>{{$consultation->lipide->ldl }}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> @endif
            </ul>
        </div>

        @if($consultation->examen_clinique!=null)
        <h4 class="sous-titre-rapport">Examen clinique</h4>
        <h5> {{$consultation->examen_clinique}}</h5>
        @endif
        @if($consultation->examen_complementaire!=null)
        <h4 class="sous-titre-rapport">Examen complémentaire</h4>

        <h5> {{$consultation->examen_complementaire}}</h5>
        @endif



        @if($consultation->diagnostic!=null)
        <h4 class="sous-titre-rapport">Diagnostic</h4>

        <h5> {{$consultation->diagnostic}}</h5>
        @endif

        @if($consultation->conduite_a_tenir!=null)
        <h4 class="sous-titre-rapport">Conduite à tenir</h4>

        <h5> {{$consultation->conduite_a_tenir}}</h5>
        @endif
    </div>
    </div>

    <h4></h4>
    <p>Nous vous remercions d'avoir éffectué(e) votre consultation au pres de nous.</p>
    <p><i>Dossier relu et validé par l'équipe Medicasure</i></p>

    @if($consultation->prestataire != null)

    <div style="display: inline">
        @if(!is_null($consultation->prestataire->signature))
        <div>
            <!-- <img width="300px" height="auto" src={{public_path('/storage/'.$consultation->prestataire->signature)}} /> -->
        </div>
        @endif

        <p>Medecin(s) ayant éffectué(e) votre consultation <b>{{is_null($consultation->prestataire->civilite) ?'':'. '.$consultation->prestataire->civilite }} {{is_null($consultation->prestataire->surname) ? "" :  $consultation->prestataire->surname }} {{$consultation->prestataire->name}}</b> </p>
        @if(!is_null($consultation->prestataire->numero_licence))
        @if($consultation->prestataire->numero_licence != 'null' && strlen($consultation->prestataire->numero_licence ) >0)
        <p>Numéro d'ordre: {{$consultation->prestataire->numero_licence}}</p>
        @endif
        @endif
        <p style="text-align: right"> Date de création : <b>{{\Carbon\Carbon::parse()->format('d/m/Y')}}</b></p>

    </div>
    @endif

</body>

</html>