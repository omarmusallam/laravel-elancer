<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Rules\FilterRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    protected $rules = [
        // 'name' => 'required|string|max:20|min:4',
        'name' => ['required', 'string', 'between:2,30'],
        'parent_id' => ['nullable', 'int', 'exists:categories,id'],
        'desc' => ['nullable', 'string'],
        'art_file' => ['nullable', 'image']
    ];

    protected $messages = [
        'name.required' => 'The :attribute Field is Empty'
    ];

    public function index()
    {
        // if (Gate::denies('categories.view')) {
        //     abort(403);
        // }
        //$this->authorize('view-any', Category::class);

        $categories1 = Category::leftJoin('categories as parents', 'parents.id', '=', 'categories.parent_id')
            ->select([
                'categories.*',
                'parents.name as parent_name'
            ])
            ->paginate(10);

        $title = 'Categories';
        return view('categories.index', compact('categories1', 'title'));
    }

    public function show(Category $category)
    {
        $categories1 = Category::leftJoin('categories as parents', 'parents.id', '=', 'categories.parent_id')
            ->select([
                'categories.*',
                'parents.name as parent_name'
            ])
            ->get();

        return view('categories.show', compact('category', 'categories1'));
    }

    public function create()
    {
        $parents = Category::all();
        $category = new Category();
        return view('categories.create', compact('category', 'parents'));
    }

    public function store(Request $request)
    {
        $clean = $request->validate($this->rules(), $this->messages);
        /*
        // Stor part 1 
        $category = new Category();
        $category->name = $request->input('name');
        $category->desc = $request->input('desc');
        $category->parent_id = $request->input('parent_id');
        $category->slug = Str::slug($category->name);
        $category->save();
        */

        // Stor part 2 
        $data = $request->all();
        if (!$data['slug']) {
            $data['slug'] = Str::slug($data['name']);
        }
        $category = Category::create($data);

        return redirect(route('categories.index'))
            ->with('success', 'Category Created');
    }

    public function edit(Category $category)
    {
        // $category = Category::findOrFail($id);
        $parents = Category::all();

        return view('categories.edit', compact('category', 'parents'));
    }

    public function update(Request $request, Category $category)
    {
        // $category = Category::findOrFail($id);

        $clean = $request->validate($this->rules(), $this->messages);

        // $category->name = $request->input('name');
        // $category->desc = $request->input('desc');
        // $category->parent_id = $request->input('parent_id');
        // $category->slug = Str::slug($category->name);
        // $category->save();

        $category->update($request->all());
        return redirect()
            ->route('categories.index')
            ->with('success', 'Category Updated');
    }

    public function destroy($id)
    {
        // Category::where('id' , $id)->delete();

        // $category = Category::findOrFail($id);
        // $category->delete();

        Category::destroy($id);

        session()->flash('success', 'Category Deleted');
        return redirect()->route('categories.index');
        //->with('success', 'Category Deleted');
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->paginate();
        return view('categories.trash', [
            'categories' => $categories,
        ]);
    }

    public function restore(Request $request, $id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()
            ->route('categories.trash')
            ->with('success', 'Category restored!');

    }

    public function forceDelete($id)
    {
        $category = Category::withTrashed()->findOrFail($id);
        $category->forceDelete();

        return redirect()
            ->route('categories.trash')
            ->with('success', 'Category deleted for ever!');
    }

    protected function rules()
    {
        $rules = $this->rules;

        // part 1 Custom Validat
        // $rules['name'][] = function($attribute , $value , $fail){
        //     if($value == 'god'){
        //         $fail('This is word not allowed');
        //     } 
        // }; 

        // part 2 Custom Validat
        $rules['name'][] = new FilterRule();
        return $rules;
    }
}