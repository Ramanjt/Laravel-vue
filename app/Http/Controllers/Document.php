<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Documents;

class Document extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Documents::orderBy('created_at','Desc')->get();
    }

    public function showdoc()
    {
        return view("document");
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newItem = new Documents;
        //$newItem->name = $request->name;
        $newItem->name = $request->document["name"];
        //$newItem->category_id = $request->document["category_id"];
        $newItem->save();
        return $newItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Documents::orderBy('id','Desc')->where('category_id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingItem=Documents::find($id);
        if($existingItem) {
            //$existingItem->completed=$request->completed ? true : false;
            //$existingItem->completed_at=$request->completed ? true : null;
            $existingItem->name=$request->name;
            $existingItem->save();
            return $existingItem;
        }
        return "Item not found.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingItem=Documents::find($id);
        if($existingItem) {
            $existingItem->delete();
            return "item successfully deleted";
        }
        return "Item not found";
    }
}
