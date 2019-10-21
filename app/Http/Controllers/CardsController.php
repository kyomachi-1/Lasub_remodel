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
        // カードの新規作成
        $ring = Ring::find($ringId);
        $card = new Card;
        return view('cards.create',[
            'ring' => $ring,
            'card' => $card
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
        $ring = Ring::find($ringId);
        $card = new Card;

        if($request->card_front === null && $request->card_back !== null) {
            $card = $ring->cards()->create([
                'card_back' => $request->card_back
                ]);
        } elseif ($request->card_front !== null && $request->card_back === null) {
            $card = $ring->cards()->create([
                'card_front' => $request->card_front,
                ]);
        } elseif ($request->card_front === null && $request->card_back === null) {
            $card = $ring->cards()->create();
        } else {
            $card = $ring->cards()->create([
                'card_front' => $request->card_front,
                'card_back' => $request->card_back
                ]);
        }

        // その１
            // $card = new Card;

            // $card->create([
            //     'ring_id' => $ringId,
            //     'card_front' => $request->card_front,
            //     'card_back' => $request->card_back
            //     ]);
        // その２
            // $card = new Card;

            // $card->create([
            //     'ring_id' => $request->ring_id = $ringId,
            //     'card_front' => $request->card_front,
            //     'card_back' => $request->card_back
            //     ]);
        // その３
            // $ring = Ring::find($ringId);
            // $card = new Card;

            // $card->create([
            //     'ring_id' => $ring->id,
            //     'card_front' => $request->card_front,
            //     'card_back' => $request->card_back
            //     ]);
        // その４
            // $card = new Card;
            // $card->ring_id = $ringId;
            // $card->card_front = $request->card_front;
            // $card->card_back = $request->card_back;
            // $card->save();

        // リダイレクト その１
        return redirect()->route('cards.index',$ringId);

        // リダイレクト その２
        // $url = route('cards.index',$ringId);
        // return redirect($url);
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
        // echo 'リングID' . $ringId;
        // echo '<br>';
        // echo 'カードID' . $cardId;
        // echo '<br>';
        // echo 'カードの表は' . $card->card_front;
        // echo '<br>';
        // echo 'カードの裏は' . $card->card_back;
        // exit;

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

        return redirect()->route('cards.index',$ringId);

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

        return redirect()->route('cards.index',$ringId);

    }

    public function study($ringId)
    {
        $ring = Ring::find($ringId);
        $card = new Card;
        $cards = Card::where('ring_id', $ringId)->paginate(1);

        return view('cards.study',[
            'ring' => $ring,
            'cards' => $cards
            ]);
    }
}
