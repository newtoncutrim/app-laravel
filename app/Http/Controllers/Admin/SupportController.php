<?php

namespace App\Http\Controllers\Admin;
use App\Models\Support;
use App\Http\Requests\StoreUpdateSupport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){


        $supports = $support->all();


        // return view('admin/supports/index', ['support' => $supports]);
        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id){

        if(!$support = Support::find($id)){
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    public function creat(){


        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support){
        dd('er');
        $data = $request->all();
        
        
        $data['status'] = 'a';
        $support->create($data);
        return redirect()->route('support.index');
    }

    public function edit(Support $support, string|int $id){

        if(!$support = $support->where('id', $id)->first()){
            return back();
        }

        return view('admin/supports/edit', compact('support'));

    }

    public function update(Request $request, Support $support, string|int $id){

        if(!$support = $support->find($id)){
            return back();
        }

        $support->update($request->only([
            'subject',
            'body'
        ]));

        return redirect()->route('support.index');

    }

    public function destroy(Support $support, string|int $id){
        if(!$support = $support->find($id)){
            return back();
        }

        $support->delete();
        return redirect()->route('support.index');
    }


}

