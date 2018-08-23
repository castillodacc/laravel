<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\RequestMessage;
use App\Message; 

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datos = DB::table('messages')->get();
        $datos = Message::all();
        return view('messages.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestMessage $request)
    {
        
            //return $request->all();
            /*DB::table('messages')->insert([
                'nombre'    => $request->input('nombre'),
                'email'     => $request->input('email'),
                'asunto'    => $request->input('mensaje'),
                'phone'     => $request->input('phone'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);*/
         //dd($request->all());
            Message::create($request->all());

        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$dato = DB::table('messages')->where('id', $id)->first();


        $dato = Message::findOrfail($id);
        return view('messages.show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$dato = DB::table('messages')->where('id', $id)->first();

        $dato = Message::findOrFail($id);
        return view('messages.edit', compact('dato'));
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


        /*DB::table('messages')->where('id',$id)->update([
            'nombre' => $request->input('nombre'),
            'email'  => $request->input('email'),
            'asunto' => $request->input('mensaje'),
            'phone'  => $request->input('phone'),
            'updated_at' => Carbon::now(),
        ]);*/

        Message::findOrFail($id)->update($request->all());


        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('messages')->where('id',$id)->delete();
        
        Message::findOrFail($id)->delete();

        return redirect()->route('messages.index');
    }
}
