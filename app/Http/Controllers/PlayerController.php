<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePlayerRequest;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::get();

        return view('players.index', ['players' => $players]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePlayerRequest $request)
    {
        Player::create($request->validated());

        return redirect()->route('players.index')->with('status', 'El jugador - ' . $request->nombre . ' - ha sido creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('players.edit', ['player' => $player]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(SavePlayerRequest $request, Player $player)
    {
        $player->update($request->validated());

        return redirect()->route('players.index', $player)->with('status', 'El jugador - ' . $request->nombre . ' - ha sido editado con exito!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $nombrejugadorborrado = $player->nombre;
        
        $player->delete();

        return redirect()->route('players.index')->with('status', 'El jugador - ' . $nombrejugadorborrado . ' -  ha sido eliminado con exito!');
    }
}
