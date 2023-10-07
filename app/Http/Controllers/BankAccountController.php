<?php

namespace App\Http\Controllers;
use App\Models\BankAccount;
use App\Models\Banks;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index()
    {
       $bankAccounts = BankAccount::all();
       return view('bankaccount.index', compact('bankAccounts'));
    }
    public function create()
    {
        $banks = Banks::select('id', 'name')->get();
        return view('bankaccount.create', compact('banks'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['closing_balance'] = $input['opening_balance'];
        $bankAccount = BankAccount::create($input);
        if ($bankAccount) {
            return redirect()->route('bank-account.index')->with('success', 'Account created successfully');
        } else {
            return back()->with('error', 'Account creation failed');
        }
    }
}
