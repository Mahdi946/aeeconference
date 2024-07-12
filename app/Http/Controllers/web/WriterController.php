<?php

namespace App\Http\Controllers\web;

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
    public function store(Request $request)
    {
        //
        $request->validate([
            'ArticleID' => 'required',
        ]);
        try {

            if($request->UserID){

                DB::beginTransaction();
                Writer::create([
                    'UserID' => $request->UserID,
                    'ArticleID' => $request->ArticleID,
                ]);
                DB::commit();
            }else{
                //dd("hi");
                DB::beginTransaction();

                $string = Str::random(15);
                $user = User::create([
                    'Name' => $request->Name,
                    'Family' => $request->Family,
                    'Name_fa' => $request->Name_fa,
                    'Family_fa' => $request->Family_fa,
                    'FatherName' => $request->FatherName,
                    'BirthCert' => $request->BirthCert,
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
            dd("error in store or create writer");
            return redirect()->back();
        }
        //die(print_r("done"));
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

    }

    public function getWriterByID(Article $article)
    {
        $writers =Writer::where('ArticleID', '=', $article->id)->get();
        return view('users.panel', compact('writers'));
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
            $articles =Article::where('UserID', '=', Auth::user()->id)->get();
            return view('users.writer.writer', compact('articles'));
        }

    }

}
