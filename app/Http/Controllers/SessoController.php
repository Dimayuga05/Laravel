<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sesso;

class SessoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesso = Sesso::all();
        return view ('sesso.index',compact('sesso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('sesso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'genere' => 'required',
        ];
    
        // Validazione della richiesta
        $validatedData = $request->validate($rules);
    
    
        // Creazione utente con tutti i campi validati
        Sesso::create($validatedData);
    
        return redirect()->route('sesso.index')->with('success', 'Utente creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $sesso = Sesso::findOrFail($id);
    return view('sesso.show', compact('sesso'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sesso = Sesso::findOrFail($id);
        return view('sesso.edit',compact('sesso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // 1️⃣ Trova l’utente da modificare
        $sesso = Sesso::where('id', $id)->firstOrFail();

        // 2️⃣ Valida i dati ricevuti dal form
        $validatedData = $request->validate([
            'genere' => 'required',
        ]);

        // 3️⃣ Aggiorna i campi
        $sesso->genere = $validatedData['genere'];
       


        $sesso->save(); // 💾 Salva nel database

        // 4️⃣ Reindirizza con messaggio di successo
        return redirect()->route('sesso.index')
                         ->with('success', 'Utente aggiornato con successo!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // 1️⃣ Find the user by ID or fail with a 404 error
    $sesso = Sesso::findOrFail($id);

    // 2️⃣ Delete the user
    $sesso->delete();

    // 3️⃣ Redirect or return a response
    return redirect()->route('sesso.index')->with('success', 'User deleted successfully!');
}
}
