<?php

namespace App\Http\Controllers;

use App\Page;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function index() {
        $pages = Page::all()->where('is_root' , true);
        return view('admin.home' , ['pages' => $pages]);
    }

    public function store() {

        request()->validate([
            'name' => 'required'
        ],[
           'name.required' => 'وارد کردن نام صفحه الزامیست!'
        ]);

        Page::create([
            'name'=> request('name') ,
            'content'=> request('content') ,
            'is_root' => Crypt::decrypt(request('is_root')) ,
            'parent_id' => Crypt::decrypt(request('parent_id'))
        ]);

        if(Crypt::decrypt(request('is_root')) == 1) {
            return redirect('/admin');
        } else {
            return redirect('/admin/pages/' . Crypt::decrypt(\request('parent_id')));
        }

    }

    public function show(Page $page) {
        $pages = Page::all();
        $childs = $pages->where('parent_id' , $page->id);
        $treeview = array($page);
        $parent_id = $page->parent_id;
        while ($parent_id != null) {
            array_push($treeview , Page::find($parent_id)); // Adds the parrent to the treeview
            $parent_id = Page::find($parent_id)->parent_id;
        }

        return view('admin.show_page' , ['page' => $page , 'childs' => $childs , 'treeview' => $treeview]);
    }

    public function dashboard() {
        $count_users = User::all()->count();
        $count_pages = Page::all()->count();
        return view('admin.dashboard' , ['c_users' => $count_users , 'c_pages' => $count_pages]);
    }

    public function destroy(Page $page) {
        $child = Page::all()->where('parent_id' , $page->id);
        $page->delete();
        foreach (Page::all()->where('parent_id' , $page->id)->where('is_root' , 0) as $pagedel) {
            $pagedel->delete();
        }
        return Redirect::back();
    }

    public function create() {
        return view('admin.create' , ['parent_id' => request('parent_id') , 'is_root' => request('is_root')]);
    }

    public function edit(Page $page) {
        return view('admin.edit' , ['page' => $page]);
    }

    public function update(Page $page) {
        request()->validate([
            'name' => 'required'
        ],[
            'name.required' => 'وارد کردن نام صفحه الزامیست!'
        ]);

        $page->name = \request('name');
        $page->content = \request('content');
        $page->save();

        if ($page->is_root == 1) {
            return redirect('admin');
        } else {
            return redirect('admin/pages/' . $page->parent_id);
        }
    }
}
