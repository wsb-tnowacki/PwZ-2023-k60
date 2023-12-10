<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use App\Models\Posty;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posty = Posty::all();
        $posty = Posty::paginate(5);
        return view('posty.index', compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(Request $request)
    public function store(PostStoreRequest $request)
    {
        //
        //dump($request);
        //dd($request);
       // $request->dump();
       /*  $request->validate(
            [
                'tytul' => 'required | min:3',
                'autor' => 'required | min:2',
                'email' => 'required | email:rfc,dns',
                'tresc' => 'required | min:5'
            ],
            [
                'required' => "Pole jest wymagane",
                'min' => "Minimalna liczba znaków to :min",
                'email' => "Podaj prawidłowy email"
            ]
        ); */
        $posty = new Posty();
        $posty->tytul = request('tytul');
        $posty->autor = request('autor');
        $posty->email = request('email');
        $posty->tresc = request('tresc');
        $posty->save();
        return redirect()->route('posty.index')->with('message' , 'Dodano poprawnie');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //echo $id;
        $post = Posty::findOrFail($id);
        //$post = new Posty();
        //$post->findOrFail($id);
        return view('posty.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //echo $id;
        $post = Posty::findOrFail($id);
        return view('posty.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, string $id)
    public function update(PostStoreRequest $request, string $id)
    {
        //
        //echo "Update: ".$id;
        $post = Posty::findOrFail($id);
        $post->tytul = request('tytul');
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc');
        $post->update();
        return redirect()->route('posty.index')->with('message', 'Uaktualniono poprawnie')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //echo "Delete: ".$id;
        $post = Posty::findOrFail($id);
        $post->delete();
        return redirect()->route('posty.index')->with('message', 'Usunięto post poprawnie')->with('type', 'danger');
    }
}
