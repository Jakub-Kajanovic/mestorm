<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validácia vstupov
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'company_address' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Poslanie e-mailu
        Mail::raw("Nová správa od: {$validated['name']}\n\n"
                 . "Email: {$validated['email']}\n"
                 . "Tel. číslo: {$validated['phone']}\n"
                 . "Názov firmy: {$validated['company_name']}\n"
                 . "Adresa firmy: {$validated['company_address']}\n\n"
                 . "Správa: {$validated['message']}", function ($message) use ($validated) {
            $message->to('admin@example.com') // Zmeň na e-mailovú adresu príjemcu
                    ->subject('Nová správa zo stránky');
        });

        return redirect()->route('form.submitted');
    }
}
