<?php

namespace App\Http\Controllers;

use App\InvestmentPackage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class InvestmentPackageController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $packages = InvestmentPackage::all();
        return view('admin.investment-packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.investment-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|string|unique:investment_packages,name',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'referral_bonus' => 'nullable|numeric',
            'monthly_profit' => 'nullable|numeric',
            'roi' => 'nullable',
            'days_turnover' => 'nullable|numeric',
            'expert_advice' => 'nullable|string',
            'deposit_bonus' => 'nullable|numeric',
        ]);

        $input = $request->all();

        if(InvestmentPackage::create($input)){
            Session::flash('success', 'submitted');
            return redirect()->back();
        }

        Session::flash('warning',  'Unable to submit, Something went wrong');
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InvestmentPackage  $investmentPackage
     * @return Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit($id)
    {
        $package = InvestmentPackage::find($id);
        return view('admin.investment-packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //get category ID
        $package = InvestmentPackage::findOrFail($id);

        $package->update($request->all());

        //session notification
        Session::flash('success', $package->name.' was successfully Updated');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function destroy(Request $request, $id)
    {
        //find Category and delete
        InvestmentPackage::findOrFail($id)->delete();

        //flash notification
        Session::flash('danger', 'Deleted');

        return redirect()->back();
    }
}
