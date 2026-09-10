<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOilChangeCheckRequest;
use App\Models\OilChangeCheck;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OilChangeCheckController extends Controller
{
    public function create(): View
    {
        return view('oil-change-checks.create');
    }

    public function store(StoreOilChangeCheckRequest $request): RedirectResponse
    {
        $check = OilChangeCheck::create($request->validated());

        return redirect()->route('result', ['id' => $check->id]);
    }

    public function show(int $id): View
    {
        $check = OilChangeCheck::findOrFail($id);

        return view('oil-change-checks.show', [
            'check' => $check,
        ]);
    }
}
