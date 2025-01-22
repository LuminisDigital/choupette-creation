<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Ici, ajoutez la logique pour traiter le formulaire
        // Par exemple, envoi d'email, sauvegarde en base de données, etc.

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
