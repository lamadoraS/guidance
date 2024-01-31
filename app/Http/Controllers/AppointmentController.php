<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class AppointmentController extends Controller
{

    
    public function index(): View
    {
        $appointments = Appointment::simplePaginate(10); 
        return view('appointment.index')->with('appointments', $appointments)->with('i',(request()->input('page', 1)- 1)* 10);
        
    }
 
    public function create(): View
    {
        return view('appointment.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Appointment::create($input);
        return redirect('appointment')->with('flash_message', 'Appointment Addedd!');
    }
    public function show(string $id): View
    {
        $appointments = Appointment::find($id);
        return view('appointment.show')->with('appointments', $appointments);
    }
    public function edit(string $id): View
    {
        $appointments = Appointment::find($id);
        return view('appointment.edit')->with('appointments', $appointments);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $appointments = Appointment::find($id);
        $input = $request->all();
        $appointments->update($input);
        return redirect('appointment')->with('flash_message', 'Appointment Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Appointment::destroy($id);
        return redirect('appointment')->with('flash_message', 'Appointment deleted!'); 
    }
}

