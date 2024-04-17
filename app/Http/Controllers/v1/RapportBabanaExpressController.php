<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;


// app/Http/Controllers/ConsultationController.php

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RapportBabanaExpressController extends Controller
{

    public function livraison(Request $request)
    {
        $data = $request->all();
        $data = compact('data');

        $pdf = Pdf::loadView('rapport', $data)/* ->setPaper('a4', 'landscape') */;
        $rapport = 'Rapport_' . $this->reference() . '.pdf';
        $path = 'pdf/' . $rapport;
        $pdf->save($path);

        return response()->json(['rapport' => $path], 200);
    }


    public function reference()
    {

        $chaine = 'livraison';
        $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $max = mb_strlen($listeCar, '8bit') - 1;
        for ($i = 0; $i < 11; ++$i) {
            $chaine .= $listeCar[random_int(0, $max)];
        }
        return $chaine;
    }
}
