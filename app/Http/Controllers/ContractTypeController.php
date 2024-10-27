<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\ContractType;
use App\Models\User;
use Illuminate\Http\Request;

class ContractTypeController extends Controller
{
    public function create()
    {
       $con = ContractType::get();

        return view('contractType.create', ['con' => $con]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Создание нового типа договора
        ContractType::create($validatedData);

        return redirect()->route('contypes.create')
            ->with('success', 'Тип договора успешно создан.');
    }
}
