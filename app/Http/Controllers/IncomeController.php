<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Person;
use App\Models\Income;
use Illuminate\Http\Request;
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income=Income::all();
        return view('dashboard.income.index',['income'=>$income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person = Person::all();
        $user = User::all();

        return view('dashboard.income.create',['user'=>$user],['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income= new income();
        $income->provider_id=$request->input('provider_id');
        $income->user_id=$request->input('user_id');
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->save();
        return view("dashboard.income.message",['msg'=>"El ingreso ha sido agregado con Exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::find($id);
        $providers = Person::all();
        $users = User::all();
        return view('dashboard.income.edit',['income'=>$income],['user'=>$user],['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $income=income::find($id);
        $income->provider_id=$request->input('provider_id');
        $income->user_id=$request->input('user_id');
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->save();
        return view("dashboard.income.message",['msg'=>"El ingreso ha sido Actualizado con Exito"]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $income=Income::find($id);
        $income->delete();
        return redirect("dashboard/income");
}
}
