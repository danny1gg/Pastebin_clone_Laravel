<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paste_list;


class validateForm extends Controller
{
    function validatePastes (Request $req) {
        $req->validate([
            'textInput' => 'required',
            'name' => 'required',
        ]);

        // === insert into database ===
        $paste = new paste_list;
        $paste->posted_by = htmlentities('Guest');
        $paste->text = htmlentities($req->input('textInput'));
        //$paste->highlight = htmlentities($req->highlight); // members only
        $paste->expire_date = htmlentities($req->expiration);
        $paste->exposure = htmlentities($req->exposure);
        //$paste->pw_disable = htmlentities($req->pw_disable); // members only
        $paste->exposure = htmlentities($req->exposure);
        $paste->title = $req->input('name');
        $paste->save();
        $lastInsertedId = $paste->id;
        return view('pastes/addPaste', ['pasteId' => "$lastInsertedId", 'paste' => $paste->text]);
    } 
}