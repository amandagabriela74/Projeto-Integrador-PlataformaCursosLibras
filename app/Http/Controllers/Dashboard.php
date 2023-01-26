<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index()
    {
        $modules = Module::all();

        $inscricoes = auth()->user()->subscriptions;

        foreach($modules as $module){
            $exists = $inscricoes->firstWhere(['module_id' => $module->id]) !== null;
           
        }

        return view('dashboard', compact('modules'));
    }

    private function validateSubscription($item,$moduleId){
        
    }
}
