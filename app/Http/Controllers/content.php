<?php

namespace App\Http\Controllers;

use App\Models\content as ModelsContents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class content extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari databases via models
        return view('contents',[
            "title" => "Contents",
            "contents" => ModelsContents::all()
            // "contents" => ModelsContents::all()->toJson(JSON_FORCE_OBJECT)
        ]);
        
    }
    protected function indextojson()
    {
        // $data = json_encode($data);
        // $data = $data->toJson( JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
        // $data = $data->toJson(JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_UNICODE);
        // $data = $data->toJson();
        // print_r($data);
        $data = ModelsContents::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsContents $content)
    {
        //
        return view('content',[
            "title" => $content->judul_content,
            "content" => $content
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
