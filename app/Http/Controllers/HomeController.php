<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|min:6'
        ];


          // Validazione della richiesta
        $request->validate($rules);
     
        User::create($request->only(['name', 'email','password']));
        return view('welcome')->with('success', 'Post created successfully!');
    }

    public function index()
    {
        // Retrieve all users from the "users" table
        $users = User::all();

        // Pass them to a view
        return view('table', compact('users'));
    }
    
    public function edit($id)
    {
        // Cerca l’utente in base al campo 'name'
        $user = User::where('id', $id)->firstOrFail();

        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // 1️⃣ Trova l’utente da modificare
        $user = User::where('id', $id)->firstOrFail();

        // 2️⃣ Valida i dati ricevuti dal form
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|min:6',
        ]);

        // 3️⃣ Aggiorna i campi
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']); // 🔒 Cripta la password
        }

        $user->save(); // 💾 Salva nel database

        // 4️⃣ Reindirizza con messaggio di successo
        return redirect()->route('users.edit', ['id' => $user->id])
                         ->with('success', 'Utente aggiornato con successo!');
    }

    public function destroy($id)
{
    // 1️⃣ Find the user by ID or fail with a 404 error
    $user = User::findOrFail($id);

    // 2️⃣ Delete the user
    $user->delete();

    // 3️⃣ Redirect or return a response
    return redirect()->route('users.index')->with('success', 'User deleted successfully!');
}
}
