<?php 

namespace App\Http\Controllers;

use App\Models\Accessibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessibilityController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $accessibilitySettings = $user->accessibility ?? new Accessibility();
    
        return view('accessibility', Accessibility::where('user_id', Auth::user())->get());
    }
    
    // public function store(Request $request)
    // {
    //     $user = Auth::user();
        
    //     $accessibilitySettings = $user->accessibility ?? new Accessibility();
    //     dd(Auth::check());
    //     $accessibilitySettings->pmr = $request->input('pmr', 0);
    //     $accessibilitySettings->sensorial_sensitive = $request->input('sensorial_sensitive');
    //     $accessibilitySettings->population_tolerance = $request->input('population_tolerance');
        
    //     if (!$user->accessibility) {
    //         $accessibilitySettings->user()->associate($user);
    //     }
        
    //     $accessibilitySettings->save();
        
    //     return redirect()->route('accessibility.index')->with('success', 'Les paramètres d\'accessibilité ont été mis à jour.');
    // }

}
