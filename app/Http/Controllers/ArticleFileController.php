<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleFileController extends Controller
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
            'ArticleID' => 'required|exists:articles,id',
            'File' => 'required|file',
            'Description' => 'nullable|string',
        ]);
        $article =Article::findOrFail($request->ArticleID);

        //این برای چک کردن وضعیت مقاله هست
        if($article->Status !== 0){
            flash()->error(' وضعیت مقاله مشکل دارد ');
            return view('users.article.file', compact('article'));
        }

        $file = $request->file('File');
        $path = $file->store('Files', 'public');

        $fileRecord = ArticleFile::create([
            'ArticleID' => $request->ArticleID,
            'FileType' => $request->FileType,
            'Description' => $request->Description,
            'Location' => $path,
        ]);

        if( Auth::user()->id == $article->UserID){
            // $article =Article::where('UserID', '=', Auth::user()->id)->latest()->first();
            $articlefiles =ArticleFile::where('ArticleID', '=', $article->id)->get();
            flash()->success('فایل مقاله با موفقیت ثبت شد');
            return view('users.article.file', compact('article','articlefiles'));
        }
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

         $file = File::findOrFail($id);

         if (Storage::disk('public')->exists($file->Location)) {
             Storage::disk('public')->delete($file->Location);
         }

         $file->delete();
         //die(print_r("delete shode"));
    }
    public function getArticleFile(Article $article)
    {
        $article =Article::findOrFail($article->id);
        if( Auth::user()->id == $article->UserID){
            // $article =Article::where('UserID', '=', Auth::user()->id)->latest()->first();
            $articlefiles =ArticleFile::where('ArticleID', '=', $article->id)->get();
            return view('users.article.file', compact('article','articlefiles'));
        }else{
            abort(403);
        }

    }
}
