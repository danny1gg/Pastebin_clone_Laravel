<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\list_exposures;
use App\Models\list_expiration;
use App\Models\paste_list;

class fetchFromDB extends Controller
{
    function fetchFromDB() {
        $exposures = list_exposures::select('name')->get();
        $expiration = list_expiration::select('expiration_time')->get();
        $pastesTitle = paste_list::latest()->where('exposure', 'Public')->take(10)->get();
        return view('welcome', ['exposures' => $exposures, 'expiration' => $expiration, 'pastes' => $pastesTitle]);
    }

    function fetchPastes(Request $req) {
        $id = $req->id;
        $currentPaste = paste_list::where('id', $id)->get();
        if (count($currentPaste) > 0) {
            return view('/pastes/pastes', ['currentPaste' => $currentPaste[0]]);
        } else {
            return view('/includes/page_not_found');
        }
    }

    static function deletePost($expireDate, $id) {
        if ($expireDate == "Burn after read") {
            $post = paste_list::find($id);
            $post->delete();
        }
    }
} 