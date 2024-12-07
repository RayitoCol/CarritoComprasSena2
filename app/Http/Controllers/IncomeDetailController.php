<?php

namespace App\Http\Controllers;

use App\Models\IncomeDetail;
use App\Models\Income;
use App\Models\Article;
use Illuminate\Http\Request;

class IncomeDetailController extends Controller
{
    /**
     * Muestra una lista de todos los detalles de ingreso.
     */
    public function index()
    {
        $incomeDetails = IncomeDetail::with('income', 'article')->get();
        return view('dashboard.income-detail.index', compact('incomeDetails'));
    }

    /**
     * Muestra el formulario para crear un nuevo detalle de ingreso.
     */
    public function create()
    {
        $incomes = Income::all();
        $articles = Article::all();
        return view('dashboard.income-detail.create', compact('incomes', 'articles'));
    }

    /**
     * Almacena un nuevo detalle de ingreso en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'income_id' => 'required|exists:incomes,id',
            'article_id' => 'required|exists:articles,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        IncomeDetail::create($validated);

        return redirect()->route('income-details.index')->with('success', 'Detalle de ingreso creado exitosamente.');
    }

    /**
     * Muestra un detalle de ingreso específico.
     */
    public function show($id)
    {
        $incomeDetail = IncomeDetail::with('income', 'article')->findOrFail($id);
        return view('dashboard.income-detail.show', compact('incomeDetail'));
    }

    /**
     * Muestra el formulario para editar un detalle de ingreso.
     */
    public function edit($id)
    {
        $incomeDetail = IncomeDetail::findOrFail($id);
        $incomes = Income::all();
        $articles = Article::all();
        return view('dashboard.income-detail.edit', compact('incomeDetail', 'incomes', 'articles'));
    }

    /**
     * Actualiza un detalle de ingreso en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'income_id' => 'required|exists:incomes,id',
            'article_id' => 'required|exists:articles,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $incomeDetail = IncomeDetail::findOrFail($id);
        $incomeDetail->update($validated);

        return redirect()->route('income-details.index')->with('success', 'Detalle de ingreso actualizado exitosamente.');
    }

    /**
     * Elimina un detalle de ingreso de la base de datos.
     */
    public function destroy($id)
    {
        $incomeDetail = IncomeDetail::findOrFail($id);
        $incomeDetail->delete();

        return redirect()->route('income-details.index')->with('success', 'Detalle de ingreso eliminado exitosamente.');
    }
}
