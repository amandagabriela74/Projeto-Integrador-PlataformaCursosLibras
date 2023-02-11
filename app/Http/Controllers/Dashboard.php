<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index()
    {
        $allModules = Module::all();

        $userSubscriptions = auth()->user()->subscriptions;

        $modules = collect([]);

        foreach ($allModules as $module) {
            $isSubscribedModule = $userSubscriptions->firstWhere('module_id', $module->id) !== null;
            $modules->push(['id' => $module->id, 'title' => $module->title, 'isSubscribedModule' => $isSubscribedModule]);
        }

        return view('dashboard', compact('modules'));
    }
}
