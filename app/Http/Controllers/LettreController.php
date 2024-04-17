<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\NiveauFormation;

class LettreController extends Controller
{
    public function generatePDF(Request $request)
    {
        $data = NiveauFormation::select('intitule','designation','numero','demandes.updated_at',
        'name','civilite','annee_scolaire')
                        ->join('formations', 'formations.id','=','niveau_formations.formation_id')
                        ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
                        ->join('demandes', 'demandes.niveau_formation_id','=','niveau_formations.id')
                        ->join('annees','annees.id','=','demandes.annee_id')
                        ->join('users','users.id','=','demandes.user_id')
                        ->join('info_usuers','info_usuers.user_id','=','users.id')
                        ->where('demandes.numero',$request->numero)
                        ->where('demandes.status',5)
                        ->first();
        if (empty($data)) {
            abort(404);
        }
        $pdf = PDF::loadView('pdf.lettre-admission', ['data' => $data]);
        //return $pdf->download('document.pdf');
        return $pdf->stream('document.pdf');
    }
}
