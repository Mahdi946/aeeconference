<?php

namespace App\Http\Controllers\web;

use App\Models\User;
use App\Models\Writer;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'UserID' => 'required',
            'ArticleID' => 'required',
        ]);
        try {
            DB::beginTransaction();
            $writer = Writer::create([
                'UserID' => $request->UserID,
                'ArticleID' => $request->ArticleID,
            ]);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            die(print_r("error dari"));
            return redirect()->back();
        }
        die(print_r("save  shode"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getWriterByID(Article $article)
    {
        $writers =Writer::where('ArticleID', '=', $article->id)->get();
        return view('users.panel', compact('writers'));
    }
    public function getEmailWriter(Request $request)
    {
        $writers =User::where('Email', '=', $request->email)->first();
        return view('users.panel', compact('writers'));
    }
    public function writerSave(string $id)
    {
        $article =Article::findOrFail($id);
        if( Auth::user()->id == $article->UserID){
            $articles =Article::where('UserID', '=', Auth::user()->id)->get();
            return view('users.panel', compact('articles'));
        }

        // $writers =User::where('Email', '=', $request->email)->first();
        // return view('users.panel', compact('writers'));
    }

}
