<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Models\Support;
use App\Http\Requests\StoreUpdateSupport;
use App\Http\Controllers\Controller;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(protected SupportService $service)
    {

    }

    public function index(Request $request){


        $supports = $this->service->getAll($request->filter);


        // return view('admin/supports/index', ['support' => $supports]);
        return view('admin/supports/index', compact('supports'));
    }

    public function show(string $id){

        if(!$support = $this->service->findOne($id)){
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    public function creat(){


        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support){

        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route('support.index');
    }

    public function edit(string $id){

        /* if(!$support = $support->where('id', $id)->first()){
            return back();
        } */

        if(!$support = $this->service->findOne($id)){
            return back();
        }
        return view('admin/supports/edit', compact('support'));

    }

    public function update(StoreUpdateSupport $request, Support $support, string|int $id){

        $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );

        if(!$support){
            return back();
        }


        return redirect()->route('support.index');

    }

    public function destroy(string $id){

        $this->service->delete($id);

        return redirect()->route('support.index');
    }


}


