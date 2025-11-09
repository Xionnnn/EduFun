<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::get();
        return view('pages.writerPage', compact('writers'));
    }

    public function getWriter($writerId){
        $writer = Writer::where('id',$writerId)->first();
        $articles = $writer->articles;
        return view('pages.writerDetail', compact('writer', 'articles'));
    }
}
