<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pages = Page::all()->where('parent_id' , null);
        return view('home' , ['pages' => $pages , 'search' => request('search')]);
    }
    public function show($id) {
        $pages = Page::all();
        $childs = $pages->where('parent_id' , $id);
        $treeview = array(Page::find($id));
        $parent_id = Page::find($id)->parent_id;
        while ($parent_id != null) {
            array_push($treeview , Page::find($parent_id)); // Adds the parrent to the treeview
            $parent_id = Page::find($parent_id)->parent_id;
        }
        return view('show_page' , ['this_page' => Page::find($id) , 'pages' => $childs , 'treeview' => $treeview , 'parent_id' => Page::find($id)->parent_id]);
    }

    public function autocomplete(Request $request) {
        $data = Page::all()
            ->where("name" , 'LIKE' , "%{$request->get('query')}%")
            ->get();
        return response()->json($data);
    }
}
