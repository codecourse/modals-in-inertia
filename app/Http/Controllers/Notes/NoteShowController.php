<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteShowController extends Controller
{
    public function __invoke(Note $note)
    {
        return inertia()
            ->modal('Notes/Show')
            ->with([
                'note' => $note
            ])
            ->baseRoute('notes');
    }
}
