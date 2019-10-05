<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyList;


class ListsController extends Controller
{
    public function index()
    {
    	$my_lists = MyList::all();
    	return view('lists.index', compact('my_lists'));
    }
    public function create()
    {
    	return view('lists.create');
    }
    public function storeList()
    {
    	$my_list = new myList();

    	$my_list->name_of_list = request('name');
    	$my_list->save();

    	return redirect('lists')->with('status','Лист был успешно добавлен!');
    }
    public function edit(Request $request)
    {
    	$list = request('list');
    	
    	
    	return view('lists.edit', compact('list'));
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
    	return view('lists.show', compact('lists'));
    }
    public function remove()
    {	$remove_list = request('list');

    	$find_lists = MyList::find($remove_list);
    	if ($find_lists){
    		$find_lists ->delete();
        	return redirect('lists')->with('status2', 'Лист был успешно удален!');
    		
    	}
    	else{
			return redirect('lists')->with('status_error', 'Имя листа было введено неверно!');
		}

    }

}
