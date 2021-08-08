<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class TagsController extends Controller
{
    public function models($id)
    {
        $tag = Tag::findOrFail($id);

        
        $tag->models;
    }
}
