<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Counselor;
use Illuminate\View\View;

class CounselorController extends Controller
{
    public function index(): View
    {
        $counselors = Counselor::simplePaginate(5); 

        return view('counselor.index')->with('counselors', $counselors)->with('i',(request()->input('page', 1)- 1)* 5);
    }
 
 
    public function create(): View
    {
        return view('counselor.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Counselor::create($input);
        return redirect('counselor')->with('flash_message', 'Counselor Added!');
    }
    public function show(string $id): View
    {
        $counselors = Counselor::find($id);
        return view('counselor.show')->with('counselors', $counselors);
    }
    public function edit(string $id): View
    {
        $counselors = Counselor::find($id);
        return view('counselor.edit')->with('counselors', $counselors);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $counselors = Counselor::find($id);
        $input = $request->all();
        $counselors->update($input);
        return redirect('counselor')->with('flash_message', 'Counselor Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Counselor::destroy($id);
        return redirect('counselor')->with('flash_message', 'Counselor deleted!'); 
    }
}

