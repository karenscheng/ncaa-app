<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PlayerController extends Controller
{
  public function index ()
  {
    // GET /games
    // list
    $player = Player::all();
    return Response::json($player);
  }

  public function create (Request $request)
  {
    // POST /games
    // create new game
    Player::create($request->all());
    return Response::json(['created' => true]);
  }
}
