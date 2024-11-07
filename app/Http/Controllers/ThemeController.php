<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function home(Request $request)
    {
        $theme = $request->session()->get('theme', 'classic');
        return view("themes.$theme.home");
    }

    public function contact(Request $request)
    {
        $theme = $request->session()->get('theme', 'classic');
        return view("themes.$theme.contact");
    }

    public function setTheme(Request $request)
    {
        $theme = $request->input('theme', 'classic');
        $request->session()->put('theme', $theme);
        return redirect()->back();
    }
}
