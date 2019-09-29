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
    public function remove()
    {
    	return view('lists/remove');
    }
    public function storeList()
    {
    	$my_list = new myList();

    	$my_list->name_of_list = request('name');
    	$my_list->save();

    	return redirect('lists');
    }
    public function removeList()
    {	$remove_list = request('name2');
    	
    	$find_lists = MyList::where('name_of_list', $remove_list);
    	$find_lists ->delete();
    	return redirect('lists');
    }

}
