<?php

namespace App\Http\Controllers;
use App\Models\BankAccount;
use App\Models\Banks;
use App\Models\Income;
use Illuminate\Http\Request;
use DB;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::all();
       return view('income.index', compact('incomes'));
    }
    public function create()
    {
        $banks = Banks::select('id', 'name')->get();
        $users = BankAccount::select('id', 'firstName')->get();
        return view('income.create', compact('banks', 'users'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $income = Income::create($input);
        
        if ($income) {
            $amount = $income->amount;
            $accountHolder = BankAccount::find($income->user_id);
            
            if ($accountHolder) {
                $closing_balance = $accountHolder->opening_balance + $amount;

                DB::table('bank_account')->update([
                    'closing_balance' => $closing_balance
                ]);
                
                return redirect()->route('income.index')->with('success', 'Income created successfully');
            } else {

                return back()->with('error', 'Associated bank account not found');
            }
        } else {
            return back()->with('error', 'Income creation failed');
        }
    }

    public function edit($id)
    {
        $income = Income::find($id);
        $banks = Banks::select('id', 'name')->get();
        $users = BankAccount::select('id', 'firstName')->get();
        return view('income.edit', compact('income', 'banks', 'users'));
    }

    public function update($id, Request $request)
    {
        $income = Income::find($id);
        $income->update($request->all());
        return redirect()->route('income.index')
        ->with('success', 'Income updated successfully.');
    }

    public function destroy($id)
    {
        $income = Income::find($id);
        $income->delete();
        return redirect()->route('income.index')
        ->with('success', 'Income deleted successfully');
    }
}
