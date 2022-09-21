<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function save_msg(Request $request)
    {
        $contact = new Contact;
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:100',
            'message' => 'required|max:500'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        else{
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->subject = $request->input('subject');
            $contact->message = $request->input('message');
            
            if ($contact->save()){
                DB::commit();
                return back()->with('success','Votre message à bien été envoyé. Merci !');
            }
            else{
                return back()->with('error','Erreur d\'enregistrement du message !');
            }
        }
    }
}
