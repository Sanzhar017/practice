<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contract;
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
        $users = User::all();
        return view('contracts.create', compact('users','companies'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'contract_date' => 'required|date',
        ]);

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
        $users = User::all();
        return view('contracts.edit', compact('contract', 'users'));
    }

    public function update(Request $request, Contract $contract)
    {

      $validated=   $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => 'required|string', // Проверка для поля company
            'user_id' => 'required|exists:users,id',
            'contract_date' => 'required|date',
        ]);

       Contract::updated($validated);

        return redirect()->route('contracts.index')
            ->with('success', 'Договор успешно обновлен.');
    }
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return redirect()->route('contracts.index');
    }
}
