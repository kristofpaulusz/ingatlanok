<?php

namespace App\Http\Controllers;

use App\Models\Ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    public function index()
    {
        return DB::table('ingatlanok as i')->join('kategoriak as k', 'i.kategoria', 'k.id')->selectRaw('i.*, k.nev')->get();
    }
    public function store(Request $request)
    {
        $ingatlan = new Ingatlanok();
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->leiras = $request->leiras;
        if ($request->hirdetesDatuma != null) {
            $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        }
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
    }
    public function destroy($id)
    {
        Ingatlanok::find($id)->delete();
    }
}
