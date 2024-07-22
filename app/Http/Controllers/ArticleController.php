<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Congress;
use App\Models\ArticleFile;
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

        // $articles =Article::latest()->paginate(10);
        // return view('users.panel', compact('articles'));
        return redirect()->route('Articles.getArticle');
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
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }

        flash()->success('مقاله با موفقیت ثبت شد');
        return redirect()->route('Writers.writerSave',  $article->id)->with('ArticleID', $article->id);


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
    // public function edit(Article $article)
    public function edit(string $id)
    {
        //
        $article = Article::findOrFail($id);
        if($article->Status !== 0){
            flash()->error('مقاله ثبت نهایی شده است');
            return redirect()->back();
        }
        $categories =Category::all();
        return view('users.article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $article = Article::findOrFail($id);
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

            $article->update([
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
            $article->categories()->sync($request->Categories);


        DB::commit();

    } catch (\Exception $ex) {
        DB::rollBack();
        flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
        return redirect()->back();
    }
        flash()->success('مقاله با موفقیت ویرایش شد');
        return redirect()->route('Articles.getArticle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        flash()->success('مقاله با موفقیت حذف شد');
        return redirect()->route('Articles.getArticle');
    }

     /**
     * Display a listing of the resource.
     */
    public function getArticle()
    {
        $articles =Article::where('UserID', '=', Auth::user()->id)->get();
        return view('users.panel', compact('articles'));
    }
    public function ArticleStatus(string $id)
    {

        $article =Article::findOrFail($id);
        if( Auth::user()->id != $article->UserID){
            flash()->error('عدم تطابق ID');
            return redirect()->route('Articles.getArticle');
        }
        $article->update([
            'Status' => 1,
        ]);
        flash()->success('مقاله با موفقیت ثبت نهایی شد');
        return redirect()->route('Articles.getArticle');

    }

}
