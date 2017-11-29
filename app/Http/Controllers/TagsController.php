<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use Laracasts\Flash\Flash;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Tag::Search();
        //dd($request->get('name'));
        $tags = Tag::Search($request->get('name'))->orderBy('name','Asc')->paginate(5);

        //$tags = Tag::orderBy('name','Asc')->paginate(5);
        return view('admin.tags.index',['tags'=>$tags,'ActiveMenu'=>'admin.tags.index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create',['ActiveMenu'=>'admin.tags.create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $tag = new Tag($request->all());
        $tag->save();

        session()->flash('success', 'El Tag '. $tag->name. ' ha sido creado con exito');
        return redirect()->route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit',['tag'=>$tag,'ActiveMenu'=>'admin.tags.create']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();

        session()->flash('info', 'El Tag '.$tag->name.' ha sido actualizado');
        
        return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        session()->flash('danger', 'El Tag '.$tag->name.' ha sido eliminado');

        return redirect()->route('admin.tags.index');
    }
}
