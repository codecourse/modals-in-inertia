<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        Note::create($request->only('body'));

        return redirect()->route('notes');
    }
}
