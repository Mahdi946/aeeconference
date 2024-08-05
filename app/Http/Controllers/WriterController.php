<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Writer;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function store( Request $request)
    {
        //
        $request->validate([
            'ArticleID' => 'required',
        ]);

        //این برای اینکه کاربر با ای دی مقاله دیگه نیاد اسم بنویسه
        $article =Article::findOrFail($request->ArticleID);
        if( Auth::user()->id != $article->UserID){

            flash()->error('دسترسی امکان پذیر نیست');
            return redirect()->back();
        }

        //این برای چک کردن وضعیت مقاله هست
        if($article->Status->value !== 'Edit'){
            flash()->error(' وضعیت مقاله مشکل دارد ');
            return view('users.article.file', compact('article'));
        }

        //این برای اینکه دوبار یه نویسنده رو ثبت نکنه
        if($request->UserID){
            $checkArticle = Writer::where('ArticleID', $request->ArticleID )->where('UserID', $request->UserID )->first();;
            if($checkArticle){
                flash()->error(' این مقاله قبلا این نویسنده را ثبت کرده ');
                return redirect()->back();
            }
        }

        //store
        try {
            if($request->UserID){
                DB::beginTransaction();
                Writer::create([
                    'UserID' => $request->UserID,
                    'ArticleID' => $request->ArticleID,
                ]);
                DB::commit();
            }else{
                DB::beginTransaction();
                $string = Str::random(15);
                $user = User::create([
                    'Name' => $request->Name,
                    'Family' => $request->Family,
                    'Name_fa' => $request->Name_fa,
                    'Family_fa' => $request->Family_fa,
                    'FatherName' => $request->FatherName,
                    'BirthCert' => 0, //$request->BirthCert,
                    'MobileNumber' => $request->MobileNumber,
                    'PhoneNumber' => $request->PhoneNumber,
                    'Field' => $request->Field,
                    'Edu' => $request->Edu,
                    'City' => $request->City,
                    'City_fa' => $request->City_fa,
                    'Country' => $request->Country,
                    'Rank' => $request->Rank,
                    'Org' => $request->Org,
                    'Org_fa' => $request->Org_fa,
                    'email' => $request->email,
                    'password' => Hash::make($string),
                ]);
                $writer = Writer::create([
                    'UserID' =>  $user->id,
                    'ArticleID' => $request->ArticleID,
                ]);
                DB::commit();
            }
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }


        $article =Article::findOrFail($request->ArticleID);
        if( Auth::user()->id == $article->UserID){
            flash()->success('نویسنده مقاله با موفقیت ثبت شد');
            return view('users.article.writer', compact('article'));
            //return \redirect()->route('Articles.getArticle');
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
        $writer = Writer::findOrFail($id);
        $writer->delete();

        flash()->success('مقاله با موفقیت حذف شد');
        return redirect()->route('Articles.getArticle');

    }

    public function getWritersByID(Article $article)
    {
        $writers =Writer::where('ArticleID', '=', $article->id)->get();
        $all = [];
        foreach ($writers as $writer) {
           $users = User::find($writer->UserID);
           $user = new User;
           $user->id =  $users->id;
           $user->Name =  $users->Name;
           $user->Family =  $users->Family;
           $user->email =  $users->email;
           $user->writerId =$writer->id;
           array_push($all, $user);
            }

        return response()->json($all);
    }
    public function getEmailWriter($email)
    {
        $writers =User::where('Email', '=', $email)->first();
        return response()->json($writers);
    }
    public function writerSave(string $id)
    {
        $article =Article::findOrFail($id);
        if( Auth::user()->id == $article->UserID){
            //$articles =Article::where('UserID', '=', Auth::user()->id)->get();
            return view('users.article.writer', compact('article'));
        }

    }

}
