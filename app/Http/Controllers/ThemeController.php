<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function home(Request $request)
    {
        $theme = $request->session()->get('theme', 'classic');
        return view("themes.$theme.home", compact('theme'));
    }

    public function contact(Request $request)
    {
        $theme = $request->session()->get('theme', 'classic');
        $arrayClassic = [
            'fio' => 'Владимир Костюченко',
            'tel' => '+7-910-761-97-20',
            'malito' => 'webcodingby@yandex.ru',
            'vk' => 'https://vk.com/webcodingby',
            'tg' => 'https://t.me/wcdby'
        ];

        $arrayCube = [
            'fio' => 'Владимир Костюченко',
            'tel' => '+375-25-953-52-50',
            'malito' => 'webcoding.by@gmail.com',
            'vk' => 'https://vk.com/webcodingby',
            'tg' => 'https://t.me/webcoding_by'
        ];

        $contacts = $theme === 'classic' ? $arrayClassic : $arrayCube;
        $back = 'window.history.back()';
        return view("themes.$theme.contact", compact('theme', 'contacts', 'back'));
    }

    public function setTheme(Request $request)
    {
        $theme = $request->input('theme', 'classic');
        $request->session()->put('theme', $theme);
        return redirect()->back();
    }
}
