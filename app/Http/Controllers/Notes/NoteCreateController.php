<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteCreateController extends Controller
{
    public function __invoke()
    {
        return inertia()
            ->modal('Notes/Create')
            ->baseRoute('notes');
    }
}
