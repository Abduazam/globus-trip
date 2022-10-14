<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Package;

function bot($method, $data = [])
{
    $url = "https://api.telegram.org/bot5438796897:AAGCQJPELBvp46XOf0dkdMxMOQjaqTevzrQ".'/'.$method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $res = curl_exec($ch);

    if(curl_error($ch)){
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

class SiteController extends Controller
{
    public function index(): Factory|View|Application
    {
        $packages = Package::where('status', 1)->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $randomPackages = Package::all()->random(3);
        return view('site.index', compact(['packages', 'randomPackages']));
    }

    public function package($id): Factory|View|Application
    {
        $package = Package::findOrFail($id);
        $package->increment('views');
        return view('site.package', compact('package'));
    }

    public function packages(): Factory|View|Application
    {
        $packages = Package::where('status', 1)->get();
        return view('site.packages', compact('packages'));
    }

    public function about(): Factory|View|Application
    {
        return view('site.about');
    }

    public function contact(): Factory|View|Application
    {
        return view('site.contact');
    }

    public function booking(): Factory|View|Application
    {
        return view('site.booking');
    }

    public function sending(Request $request): Factory|View|Application
    {
        $request->validate([
            'firstname' => 'required|min:3|max:20',
            'lastname' => 'required|min:3|max:20',
            'phone' => 'required|numeric|digits:12',
            'captcha' => 'required|captcha',
        ]);

        $message = "Имя: " . $request->input('firstname') . "\n" . "Фамилия: " . $request->input('lastname') . "\n" . "Телефон: " . $request->input('phone');

        bot('sendMessage', [
            'chat_id' => -1001812867979,
            'text' => $message,
            'parse_mode' => 'html'
        ]);

        $packages = Package::where('status', 1)->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $randomPackages = Package::all()->random(3);
        return view('site.index', compact(['packages', 'randomPackages']));
    }
}
