<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

use App\MyList;

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
    	return view('lists/item/remove');
    }
    public function storeItem()
    {
    	$item = new Item();

    	$item->list_item = request('name3');
    	$item->my_list_id = request('name5');
    	$item->save();
    	/*Привет Женя.Вообщем.Мне как-то нужно чтобы не было 32 строчки кода и чтобы в какой именно из листов вставлялось автоматически, но как я понимаю вся проблема в том, что это страничка не привязана к какому либо листу.И было бы намного проще если бы она была как-то так:
    	view/lists/id/айдишник_листа/create. Или нужно как-то через модель Item найти лист с которого ты перешел на эту страницу
    	но я много искал и ничего похожего не нашел. Я  изменил много всего в части удобства и дизайна но так и не понял как сделать так, чтобы заработал
        корректно функция removeItem & storeItem. Только если перекидывает на страничку lists.
        Вообщем - сделать чтобы при изменении чего-то в списке тасков перекидывало на страничку конкретного листа + сделать чтобы авт. указывался айди листа к которому ты добавляешь таск.
        Можешь оценить что я сделал пока.Кстати в документации я вычитал такую прикольную фишку как на строке 49 и 53, оч годно).Напиши когда будешь свободен)*/

		
    	return redirect('/lists');
    }
    public function removeItem()
    {	$remove_item = request('name2');

    	$find_item = Item::where('list_item', $remove_item)->latest();
    	if ($find_item == false){
    		return redirect('lists/item/remove')->with('status_error', 'Имя листа было введено неверно!');
    	}
    	else{
			$find_item->delete();
        	return redirect('lists')->with('status2', 'Лист был успешно удален!');
		}
    }
}
