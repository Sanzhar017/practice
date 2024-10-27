<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contract;
use App\Models\ContractType;
use App\Models\User;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::with('user')->get();
        return view('contracts.index', compact('contracts'));
    }

    public function create()
    {
        $companies = Company::get();
        $contractTypes = ContractType::get();
        $users = User::all();
        return view('contracts.create', compact('users','companies', 'contractTypes'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_id' => 'required|exists:companies,id',  // Используем company_id
            'contract_type_id' => 'required|exists:contract_types,id', // Добавлено contract_type_id
            'user_id' => 'required|exists:users,id',
            'contract_date' => 'required|date',
        ]);

        // Создание договора с валидированными данными
        Contract::create($validatedData);

        return redirect()->route('contracts.index')
            ->with('success', 'Договор успешно создан.');
    }
    public function show(Contract $contract)
    {
        return view('contracts.show', compact('contract'));
    }

    public function edit(Contract $contract)
    {
        $contractTypes = ContractType::all();
        $companies = Company::all();
        $users = User::all();

        return view('contracts.edit', compact('contract', 'contractTypes', 'companies', 'users'));
    }

    public function update(Request $request, Contract $contract)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_id' => 'required|exists:companies,id',
            'contract_type_id' => 'required|exists:contract_types,id',
            'user_id' => 'required|exists:users,id',
            'contract_date' => 'required|date',
        ]);

        // Обновление данных контракта
        $contract->update($validatedData);

        // Перенаправление на страницу списка контрактов с сообщением об успешном обновлении
        return redirect()->route('contracts.index')
            ->with('success', 'Договор успешно обновлен.');
    }
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return redirect()->route('contracts.index');
    }
}
