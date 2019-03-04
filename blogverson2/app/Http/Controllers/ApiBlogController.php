<?php

namespace App\Http\Controllers;

use App\Http\Services\BLogService;
use Illuminate\Http\Request;

class ApiBlogController extends Controller
{

    protected $blogService;
    public function __construct(BLogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return response()->json($blogs);
    }

    public function show($id)
    {
        $blog = $this->blogService->findById($id);
        return response()->json($blog);
    }

    public function store(Request $request)
    {
        $blog = $this->blogService->create($request->all());
        return response()->json($blog);
    }
//    public function update(Request $request, $id)
//    {
//        $blog = $this->blogService->update($request->all(),$id );
//        return response()->json();
//    }
//
//    public function destroy($id)
//    {
//        $blog = $this->blogService->destroy($id);
//        return response()->json($blog);
//
//    }
}
