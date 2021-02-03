<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscription;

class Subscripcontroller extends Controller
{
    public function createSubscription(StoreSubscription $request, ?string $topic)
    {
        $data = $request->validated();
        return response()->json([
            'url' => $request->url,
            'topic' => $topic,
        ]);
    }
}
