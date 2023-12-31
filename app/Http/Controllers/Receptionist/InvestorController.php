<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::paginate(5);
        return view('receptionist.investor.index', compact('investors'));
    }

    public function create()
    {
        return view('receptionist.investor.create');
    }

    public function store(Request $request)
    {
        Investor::create([
            'company_name' => $request->company_name,
            'country' => $request->country,
            'phone' => $request->phone,
        ]);

        alert()->success('Success', 'Data berhasil ditambahkan');
        return redirect('/receptionist/investor');
    }

    public function edit($id)
    {
        $investor = Investor::where('id', $id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor');
        }

        return view('receptionist.investor.edit', compact('investor'));
    }

    public function update(Request $request, $id)
    {
        $investor = Investor::where('id', $id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor');
        }

        $investor->update([
            'company_name' => $request->company_name,
            'country' => $request->country,
            'phone' => $request->phone,
        ]);

        alert()->success('Success', 'Data berhasil diupdate');
        return redirect('/receptionist/investor');
    }

    public function destroy($id)
    {
        $investor = Investor::where('id', $id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor');
        }

        $investor->delete();

        alert()->success('Success', 'Data berhasil dihapus');
        return redirect('/receptionist/investor');
    }
}
