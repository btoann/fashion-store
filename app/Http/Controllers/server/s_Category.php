<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class s_Category extends Controller
{
    /**
     *  pagination quantity
    */
    private $__pagination_qty = 10;
    
    /**
     *  index
    */
    public function index()
    {
        return view('server.category.dashboard');
    }

    public function view()
    {
        $categories = [
            "all" => Models\Category
                ::orderBy('id', 'desc')
                ->paginate($this->__pagination_qty)
        ];

        return view('server.category.view', compact('categories'));
    }

    /**
     *  create new category
    */
    public function create(Request $request)
    {
        if($request->ajax())
        {
            return view('server.category.create')->render();
        }
    }
    
    public function insert(Request $request) {

        $this->validate(request(), [
            'name' => 'required'
        ]);

        Models\Category::create(request(['name', 'description']));
        
        return redirect()->back();
    }
    
    /**
     *  edit category
    */
    public function edit(Request $request, $id)
    {
        if($request->ajax())
        {
            $data = Models\Category::findOrFail($id);

            return view('server.category.edit', compact('data'))->render();
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $data = Models\Category::findOrFail($id);

        $data->name = $request->name;
        $data->description = $request->description;

        $data->save();
        return redirect()->back();
    }
    
    /**
     *  delete category
    */
    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            Models\Category::where('id', $id)->delete();
            
            return redirect()->back();
        }
    }

}
