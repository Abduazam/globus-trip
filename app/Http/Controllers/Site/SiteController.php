<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class SiteController extends Controller
{
    public function index()
    {
        $packages = Package::where('status', 1)->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $randomPackages = Package::all()->random(3);
        return view('site.index', compact(['packages', 'randomPackages']));
    }

    public function package($id)
    {
        $package = Package::findOrFail($id);
        $package->increment('views');
        return view('site.package', compact('package'));
    }

    public function packages()
    {
        $packages = Package::where('status', 1)->get();
        return view('site.packages', compact('packages'));
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function booking()
    {
        return view('site.booking');
    }
}
