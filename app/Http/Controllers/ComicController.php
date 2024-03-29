<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {   


        // $form_data = $this->validation($request->all()) ;

        $form_data = $request->validated();

        $newComic = new Comic();

        $newComic->fill($form_data);



        $newComic->save();
        
    
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return View('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact ('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   


        // $comic = Comic::findOrFail($id);
        $form_data = $this->validation($request->all()) ;
        $comic->update($form_data);

        return redirect()-> route('comics.show',['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()-> route('comics.index');
    }


    private function validation($data){

        $validator = Validator::make(
            $data,
            [
                'title'=>'required|max:50',
                'thumb'=>'required|max:255',
                'price'=>'required|max:10',
                'series'=>'required|max:50',
                'sale_date'=>'required',
                'type'=>'required|max:20',
            ],
            [
                'title.required' => "Titolo richiesto",
                'title.max' => "Caratteri massimi da inserire sono 50",
                'thumb.required' => "Url richiesto",
                'thumb.max' => "Caratteri massimi da inserire sono 255",
                'price.required' => "Prezzo richiesto",
                'price.max' => "Caratteri massimi da inserire sono 10",
                'series.required' => "Serie richiesta",
                'series.max' => "Caratteri massimi da inserire sono 50",
                'sale_date.required' => "Data richiesta",
                'type.required' => "Tipo richiesto",
                'type.max' => "Caratteri massimi da inserire sono 20",
            ]
        )->validate();

        return $validator;
    }
}
