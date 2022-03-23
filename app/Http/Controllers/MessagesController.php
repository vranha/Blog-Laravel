<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $messages = DB::table('messages')->get();
        $messages = Message::with(['user', 'note', 'tags'])
            ->orderBy('created_at', request('sorted', 'DESC'))
            ->simplePaginate(10);

        

        return view('messages.index', compact('messages'));
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
    public function store(Request $request)
    {

        // Guardar mensaje
        //    DB::table('messages')->insert([
        //        "nombre" => $request->input('nombre'),
        //        "email" => $request->input('email'),
        //        "mensaje" => $request->input('mensaje'),
        //        "created_at" => Carbon::now(),
        //        "updated_at" => Carbon::now(),
        //    ]);

        // Model::unguard();

        $message = Message::create($request->all());

        // if (auth()->check()) {
        //     auth()->user()->messages()->save($message);
        // }

        $message->user_id = auth()->id();
        $message->save();

        Mail::send('emails.contact', ['msg' => $message], function($m) use ($message){
            $m->to($message->email, $message->name)->subject('Tu mensaje fue recibido');
        });

        //    Redireccionar
        return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $message = DB::table('messages')->where('id', $id)->first();
        $message = Message::findOrFail($id);

        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $message = DB::table('messages')->where('id', $id)->first();
        $message = Message::findOrFail($id);

        return view('messages.edit', compact('message'));
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
        // DB::table('messages')->where('id', $id)->update([
        //     "nombre" => $request->input('nombre'),
        //     "email" => $request->input('email'),
        //     "mensaje" => $request->input('mensaje'),
        //     "updated_at" => Carbon::now(),
        // ]);

        $message = Message::findOrFail($id);
        $message->update($request->all());

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar mensaje
        // DB::table('messages')->where('id', $id)->delete();
        $message = Message::findOrFail($id)->delete();

        // Redireccionar
        return redirect()->route('mensajes.index');
    }
}
