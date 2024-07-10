<?php

namespace App\Http\Controllers\web;

use App\Models\Article;
use App\Models\Category;
use App\Models\Congress;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $articles =Article::latest()->paginate(10);
        return view('users.panel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $Congresses =Congress::first();

        // $Congresses =Congress::latest()->limit(1);
        // $Congresses =Congress::where('start_date', '>=' , now())
        // ->where('end_date', '<=' , now());
        $Types = ["مقاله پژوهشی", "مقاله علمی پژوهشی"];
        $categories =Category::all();
        return view('users.article.create', compact('Congresses', 'Types', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'TypeID' => 'required',
            'FullTitle' => 'required',
            'ShortTitle' => 'required',
            'FullTitle_fa' => 'required',
            'ShortTitle_fa' => 'required',
            'Tags' => 'required',
            'Tags_fa' => 'required',
            'CongressID' => 'required',
            'Categories' => 'required',
        ]);
        try {
            DB::beginTransaction();

            $article = Article::create([
                'TypeID' => $request->TypeID,
                'FullTitle' => $request->FullTitle,
                'ShortTitle' => $request->ShortTitle,
                'FullTitle_fa' => $request->FullTitle_fa,
                'ShortTitle_fa' => $request->ShortTitle_fa,
                'Tags' => $request->Tags,
                'Tags_fa' => $request->Tags_fa,
                'UserID' => Auth::user()->id,
                'CongressID' => $request->CongressID,
            ]);


            $items = $request->Categories;
            // foreach ($request->input('Categories', []) as $item) {
            foreach ($items as $item) {
                ArticleCategory::create([
                    'ArticleID' => $article->id,
                    'CategoryID' => $item
                ]);
            }


            DB::commit();

        } catch (\Exception $ex) {
            DB::rollBack();
            die(print_r("error dari"));
            return redirect()->back();
        }
        return redirect()->route('Articles.getArticle');
        //return redirect()->route('Writers.writerSave',  $article->id)->with('ArticleID', $article->id);
        // alert()->success('محصول مورد نظر ایجاد شد', 'باتشکر');

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

     /**
     * Display a listing of the resource.
     */
    public function getArticle()
    {
        $articles =Article::where('UserID', '=', Auth::user()->id)->get();
        return view('users.panel', compact('articles'));
    }
}
