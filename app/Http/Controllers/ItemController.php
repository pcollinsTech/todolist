<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('completed', false)->orderBy("id", "DEC")->get();
        $c_items = Item::where("completed", true)->get();

        return response()->json([
            'items' => $items,
            'c_items' => $c_items
        ]);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json([
            "code" => 200,
            "message" => "Item added successfully"
        ]);
    }

    public function complete($id)
    {
        $item = Item::find($id);
        $item->iscompleted = true;
        $item->save();
        return response()->json([
            "code" => 200,
            "message" => "Item listed as completed"
        ]);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item = $item->delete();
        return response()->json([
            "code" => 200,
            "message" => "Item deleted successfully"
        ]);
    }
}
