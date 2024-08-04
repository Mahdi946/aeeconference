<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jury;
use App\Models\User;
use App\Models\Article;
use App\Models\JuryArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JuryArticleController extends Controller
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
    public function create(string $id)
    {
        $article = Article::findOrFail($id);
        $jures = Jury::where('CongressID' , $article->CongressID)->get();
        $juryArticles =  JuryArticle::where('ArticleID' , $article->id)->get();

        return view('admin.juryArticle.create', compact('article', 'jures' ,'juryArticles' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ArticleID' => 'required',
            'users' => 'required',
        ]);
        if(count($request->users) == 3){
            try {
                DB::beginTransaction();

                $items = $request->users;
                foreach ($items as $item) {
                    JuryArticle::create([
                        'ArticleID' => $request->ArticleID,
                        'UserID' => $item
                    ]);
                }


                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
                return redirect()->back();
            }

            flash()->success('داوران با موفقیت ثبت شد');
            return redirect()->route('admin.article.index');

        }else{
            flash()->info('باید 3 تا داور برای هر مقاله باشد');
            return redirect()->back();
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
        //
    }
}
