<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteIndexController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Notes/Index', [
            'notes' => Note::latest()->get(),
        ]);
    }
}
