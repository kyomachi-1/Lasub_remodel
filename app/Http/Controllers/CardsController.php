<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ring;   // 追記
use App\Card;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ringId)
        // ルートパラメータを引数に指定
    {
        // リングの取得
        $ring = Ring::find($ringId);
        // カードの取得
        $cards = $ring->cards->where('ring_id', $ringId);

        // 取得データの確認
        // dd($ringId,$ring,$cards);
        // exit;

        // view の指定
        return view ('cards.index',[
            'ring' => $ring,
            'cards' => $cards
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ringId)
    {
        // ルートの確認
        echo 'リングID' . $ringId;
        echo '<br>';
        echo 'カード新規作成ページ';
        exit;

        // カードの新規作成
        $card = new Card;
        return view('cards.create',[
            'card' => $card,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $ringId)
    {
        $card = new Card;

        $card->create([
            'card_front' => $request->card_front,
            'card_back' => $request->card_back
            ]);
            $url = route('cards.index');
            return redirect()->route('cards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ringId,$cardId)
    {
        $card = Card::find($cardId);

        // ルートの確認
        echo 'リングID' . $ringId;
        echo '<br>';
        echo 'カードID' . $cardId;
        echo '<br>';
        echo 'カードの表は' . $card->card_front;
        echo '<br>';
        echo 'カードの裏は' . $card->card_back;
        exit;

        return view('cards.show',[
            'card' => $card
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ringId,$cardId)
    {
        $card = Card::find($cardId);

        // ルートの確認
        echo 'リングID' . $ringId;
        echo '<br>';
        echo 'カードID' . $cardId;
        echo '<br>';
        echo 'カードの表は' . $card->card_front;
        echo '<br>';
        echo 'カードの裏は' . $card->card_back;
        exit;

        return view('cards.edit',[
            'card' => $card]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ringId, $cardId)
    {
        $card = Card::find($cardId);
        $card->update([
            'card_front' => $request->card_front,
            'card_back' => $request->card_back
            ]);

        $url = route('card.index');
        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ringId, $cardId)
    {
        $card = Card::find($cardId);
        $card->delete();

        $url = route('card.index');
        return redirect('cards.index');
    }
}
