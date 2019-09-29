<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
    	$items = Item::all();
    	return view('lists.show', compact('items'));
    }
        public function create()
    {
    	return view('lists/item.create');
    }
    public function remove()
    {
    	return view('list/item/remove');
    }
    public function storeItem()
    {
    	$item = new Item();

    	$item->list_item = request('name3');
    	$item->my_list_id = request('name5');
    	$item->save();

    	return redirect('lists/id/{$list->id}');
    }
    public function removeItem()
    {	$remove_item = request('name4');
    	
    	$find_lists = Item::where('list_tem', $remove_item);
    	$find_lists ->delete();
    	return redirect('lists/id/{list->id}');
    }
}
