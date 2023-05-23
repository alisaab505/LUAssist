<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Classe;
class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        
        // Save the form data to the database
        DB::table('messages')->insert([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        
        // Redirect back to the contactus form with a success message
        return redirect('/contactus')->with('success', 'Your message has been sent!');
    }
}
