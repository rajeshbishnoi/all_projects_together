<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category; // model name
use DB;

class CategoryController extends Controller
{
    public function save(Request $request){

    	// echo "<pre>";
    	// print($request);
    	// die;

    //	dd($request);

    	  $Add = new Category;
          $Add->category_name   =  $request['category_name'];
          $Add->save();

    	// DB::table('category')->insert(
    	// 	['category_name' => $request['category_name']] );

    	 return redirect('admin/categoryselection');
    }
}
