<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyList;
use App\Item;
use Validator;


use Illuminate\Support\Facades\Auth;


class ListsController extends Controller
{
    public function index()
    {
    	$my_lists = MyList::all();
	if (Auth::check()) {
    	return view('lists.index', compact('my_lists'));
	}
	else{
		return redirect('login')->with('status', 'You are not logged in!');
	}
    	
    }
    public function create()
    {
    if (Auth::check()) {
    	return view('lists.create');
	}
	else{
		return redirect('login')->with('status', 'You are not logged in!');
	}
    }
    public function storeList(Request $request)
    {
    	$rules = [
    		'name_of_list' => 'required|max:255',
    	];

    	
    	$my_list = new myList();

    	$my_list->name_of_list = request('name');
    	$validator = Validator::make(
    		['name_of_list' => $my_list->name_of_list],
    		['name_of_list' =>'required|max:255'],
    	);
    	if($validator->fails()) {
    		return redirect('lists/create')->with('status', 'Отсутствует название листа');
    	}
    	else{
    	$my_list->save();
    		return redirect('lists')->with('status','Лист был успешно добавлен!');
    	}
    }

    public function edit(Request $request)
    {
    	$list = request('list');
    	$lists = MyList::find($list);
    	
    if (Auth::check()) {
    	return view('lists.edit', compact('list', 'lists'));
    }
	else{
		return redirect('login')->with('status', 'You are not logged in!');
	}
	}
    public function save_edit()
    {
    	$list = request('list');
    	$new_list_name = request('name3');
    	$find_list = MyList::find($list);
    	if ($find_list) {
    		$find_list->update(['name_of_list'=> $new_list_name]);
    		return redirect('lists')->with('status_update', 'Имя Листа было обновлено!');
    	}
    	else{
    		return redirect('lists')->with('status_error', 'error');
    	}


    	
    }
    public function openList($id)
    {
    	$lists = myList::find($id);
    	if (Auth::check()) {
    	return view('lists.show', compact('lists'));
    	}
    	else{
		return redirect('login')->with('status', 'You are not logged in!');
		}
    }
    public function remove()
    {	$remove_list = request('list');
    	$find_lists = MyList::find($remove_list);

    	if ($find_lists){
    		$find_lists->delete();
        	return redirect('lists')->with('status2', 'Лист был успешно удален!');
    		
    	}
    	else{
			echo "error";
		}

    }

}
