<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // Показ формы создания новой компании
    public function create()
    {
        $companies = Company::get();
        return view('companies.create', ['companies'=>$companies]);
    }

    // Сохранение новой компании
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Company::create($request->all());
        return redirect()->route('companies.index')
            ->with('success', 'Компания успешно создана.');
    }

    // Показ одной компании
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    // Показ формы редактирования компании
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    // Обновление данных компании
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $company->update($request->all());
        return redirect()->route('companies.index')
            ->with('success', 'Компания успешно обновлена.');
    }

    // Удаление компании
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')
            ->with('success', 'Компания успешно удалена.');
    }
}
