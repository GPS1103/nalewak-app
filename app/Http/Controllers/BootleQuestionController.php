<?php

namespace App\Http\Controllers;

use App\Http\Requests\BootleQuestionRequest;
use App\Http\Resources\BootleQuestion as BootleQuestionResource;
use App\Http\Resources\BootleQuestionCollection;
use App\Models\BootleQuestion;

class BootleQuestionController extends Controller
{
    public function index()
    {
        return new BootleQuestionCollection(BootleQuestion::all());
    }
    public function store(BootleQuestionRequest $request)
    {
        return new BootleQuestionResource(BootleQuestion::create($request->validated()));
    }
    public function update(BootleQuestionRequest $request, BootleQuestion $bootleQuestion)
    {
        $bootleQuestion->update($request->validated());
        return new BootleQuestionResource($bootleQuestion);
    }
    public function destroy(BootleQuestion $bootleQuestion)
    {
        $bootleQuestion->delete();
        return response()->json(['message' => 'succesfully deleted BootleQuestion']);
    }

}
