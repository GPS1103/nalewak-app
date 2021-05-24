<?php

namespace App\Http\Controllers;

use App\Http\Requests\MillionerQuestionRequest;
use App\Http\Resources\MillionerQuestion as MillionerQuestionResource;
use App\Http\Resources\MillionerQuestionCollection;
use App\Models\MillionerQuestion;

class MillionerQuestionController extends Controller
{
    public function index()
    {
        return new MillionerQuestionCollection(MillionerQuestion::all());
    }
    public function store(MillionerQuestionRequest $request)
    {
        return new MillionerQuestionResource(MillionerQuestion::create($request->validated()));
    }
    public function update(MillionerQuestionRequest $request, MillionerQuestion $millionerQuestion)
    {
        $millionerQuestion->update($request->validated());
        return new MillionerQuestionResource($millionerQuestion);
    }
    public function destroy(MillionerQuestion $millionerQuestion)
    {
        $millionerQuestion->delete();
        return response()->json(['message' => 'succesfully deleted MillionerQuestion']);
    }

}
