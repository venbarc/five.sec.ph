<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    //

    public function update_info_view()
    {
        $data = Auth::user(); 
        return view('crud.dashboard', ['users' => $data])
        ->with('title', 'Dashboard | Five Sec');
    }

    public function update_info_save($id, Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'min:3'],
            'contact' => ['required', 'numeric', 'digits:10'],
            'address' => ['required'],
        ]);
    
        $crud = Crud::find($id);
    
        if ($crud) {
            $crud->update([
                'full_name' => $request->input('full_name'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address'),
            ]);
    
            return redirect('users/dashboard')->with('success', 'Record updated successfully');
        } 
        else {
            return redirect('users/dashboard')->with('error', 'Record not found');
        }
    }
}
