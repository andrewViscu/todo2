<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\MyList;
use Validator;

use Illuminate\Support\Facades\Auth;



class ItemsController extends Controller
{
    public function index()
    {
    	$items = Item::all();

        if (Auth::check()) {
    	return view('lists.show', compact('items'));
    	}
    	else{
		return redirect('login')->with('status', 'You are not logged in!');
		}
    }
        public function create(Request $request)
    {
    	$list = request('list');
    	if (Auth::check()) {
    	return view('lists/item/create', compact('list'));
    	}
    	else{
		return redirect('login')->with('status', 'You are not logged in!');
		}
    }
    public function remove()
    {
		$list = request('list');

    	return view('lists/item/remove');
		if (session('status1')){
		return redirect('lists/id/' . $list)->with('status', 'Task Have Been Removed Successfuly');

 			}
 		}
 	public function done()
 	{	
 		$list = request('list');
 		$item = request('item');
 		$find_item = Item::find($item);

 		if($find_item && $find_item->done == 0){
 			$find_item->update(['done'=> true]);
 			return redirect('lists/id/' . $list);
 		}
 		elseif($find_item && $find_item->done == 0){
 			$find_item->update(['done'=> false]);
 			return redirect('lists/id/' . $list);
 		}
 		else{
 			abort(404);
 		}
 		
    }
    public function edit()
    {
    	$list  = request('list');
    	$item  = request('item');
    	$items = Item::find($item);
    	
    if (Auth::check()) {
    	return view('lists/item.edit', compact('list','item','items'));
    }
	else{
		return redirect('login')->with('status', 'You are not logged in!');
	}
    }
    public function save_edit()
    {
    	$item           = request('item');
    	$list           = request('list');
    	$new_item_name  = request('name3');
    	$find_item      = Item::find($item);		

    	$validator      = Validator::make(
    		['list_item' => $new_item_name],
    		['list_item' => 'required|max:255']
    	);
    	if($validator->fails())
    	{
    		return redirect('/lists/id/' . $list . '/item/edit/' . $item)->withErrors($validator);
    	}

    	if ($find_item) {
    		$find_item->update(['list_item' => $new_item_name]);
    		
    		return redirect('/lists/id/' . $list)->with('status_update', 'Имя Задачи было обновлено!');
    	}
    	else{
    		return redirect('lists/id/' . $list)->with('status_error', 'An Error Ocurred');
    	}
    }
    public function storeItem()
    {
    	$list = request('list');
    	$item = new Item();

    	$item->list_item = request('name3');
    	$item->my_list_id = request('list');
    	$validator = Validator::make(['list_item' => $item->list_item],['list_item' => 'required|max:255']);
    	if($validator->fails())
    	{
    		return redirect()->back()->withErrors($validator)->withInput();
    	}
    	else{
    		$item->save();
    		return redirect('lists/id/' . $list)->with('status1', 'Task Have Been Removed Successful');
    	}
    }
    public function removeItem()
    {	$remove_item = request('item');
    	$list = request('list');

    	$find_item = Item::find($remove_item);
    	if ($find_item){
    		$find_item->delete();
        	return redirect('lists/id/' . $list)->with('status2', 'New Task Have Been Added Successfuly');
    		
 		}
    }
}
