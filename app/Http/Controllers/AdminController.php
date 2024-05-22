<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "<h1>","Hai guest ".Auth::user()->name."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    function admin(){
        $dtAgenda = agenda::paginate(4);
        return view('Admin/admin', compact('dtAgenda'));
        // echo "<h1>","Hai Admin ".Auth::user()->name."</h1>";
        // echo "<a href='/logout'>Logout</a>";
    }

    function inputPage(){
        $dtAgenda = agenda::paginate(4);
        return view('Admin/inputPage', compact('dtAgenda'));
    }

    function public(){
        $dtAgenda = agenda::paginate(4);        
    }

    function create(){
        return view('Admin/create');
    }
    
    function edit($id){
        $agenda = agenda::findorfail($id);
        return view('Admin/edit', compact('agenda'));
    }

    function Update(Request $request, $id){
        $agenda = agenda::findorfail($id);
        $agenda->update($request->all());
        return redirect('admin/inputPage')->with('success', 'Task Update Successfully!');

    }

    function postAgenda(Request $request){
        agenda::create([
            'acara' => $request->acara,
            'tempat' => $request->tempat,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'status' => $request->status,
        ]);

        return redirect('admin/inputPage')->with('success', 'Task Created Successfully!');
    }

    function delete($id){
        $agenda = agenda::findorfail($id);
        $agenda->delete();
        return back()->with('info', 'Task Delete Successfully!');
    }
}
