<?php

namespace App\Http\Controllers;

use App\Models\TagType;
use Illuminate\Http\Request;

class FormCreatorController extends Controller
{
    public function LoadPge()
    {
        $tagList = TagType::all();

        dd($tagList);
    }
}