<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }
}