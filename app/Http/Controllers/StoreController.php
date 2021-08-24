<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show($id);
    {
        $store = Store::find($id);
        $ratings = $store->review_ratings();

        $sum = 0;
        foreach ($ratings as $id=>$value) {
            $sum+=$value;
        }

        if($sum == o){
            $store -> rating = 0;
        }else{
            $store -> rating = round($sum / count($rating), 1);
        }

        return view ('stores.show', ['store'=>$store]);
    }
]
