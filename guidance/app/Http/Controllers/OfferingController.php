<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Offering;
use Illuminate\View\View;

class OfferingController extends Controller
{
    public function index(): View
    {
        $offerings = Offering::all();
        return view ('offering.index')->with('offerings', $offerings);
    }
 
    public function create(): View
    {
        return view('offering.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Offering::create($input);
        return redirect('offering')->with('flash_message', 'Offering Addedd!');
    }
    public function show(string $id): View
    {
        $offerings = Offering::find($id);
        return view('offering.show')->with('offerings', $offerings);
    }
    public function edit(string $id): View
    {
        $offerings = Offering::find($id);
        return view('offering.edit')->with('offerings', $offerings);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $offerings = Offering::find($id);
        $input = $request->all();
        $offerings->update($input);
        return redirect('offering')->with('flash_message', 'Offering Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Offering::destroy($id);
        return redirect('offering')->with('flash_message', 'Offering deleted!'); 
    }
}

