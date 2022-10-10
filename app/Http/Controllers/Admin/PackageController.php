<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Throwable;

class PackageController extends Controller
{
    public function index(): Factory|View|Application
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }

    public function create(): Factory|View|Application
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.package.create', compact('categories'));
    }

    public function store(Request $request): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'numeric|required',
            'destination' => 'required|max:150',
            'time' => 'required|max:50',
            'price' => 'required',
            'people_count' => 'numeric|required',
            'text' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif',
        ]);

        try {
            $newImageName = null;
            if (isset($request->image)) {
                $newImageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $newImageName);
            }

            $package = new Package();
            $package->category_id = $request->input('category_id');
            $package->title = $request->input('title');
            $package->destination = $request->input('destination');
            $package->description = $request->input('text');
            $package->image = $newImageName;
            $package->price = $request->input('price');
            $package->time = $request->input('time');
            $package->people_count =$request->input('people_count');
            $package->save();

            return redirect()->route('package.index');
        } catch (Throwable $e) {
            report($e);

            $categories = Category::where('status', 1)->get();
            return view('admin.package.create', compact('categories'));
        }
    }

    public function show(Package $package): Factory|View|Application
    {
        return view('admin.package.show', compact('package'));
    }

    public function edit(Package $package): Factory|View|Application
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.package.edit', compact(['package', 'categories']));
    }

    public function update(Request $request, Package $package): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'numeric|required',
            'destination' => 'required|max:150',
            'time' => 'required|max:50',
            'price' => 'required',
            'people_count' => 'numeric|required',
            'text' => 'required',
            'image' => 'mimes:jpg,png,jpeg,gif',
        ]);

        try {
            $newImageName = $package->image;
            $file = 'images/' . $newImageName;
            if (isset($request->image)) {
                if($newImageName !== null && file_exists($file)){
                    unlink($file);
                }
                $newImageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $newImageName);
            }

            $package->category_id = $request->input('category_id');
            $package->title = $request->input('title');
            $package->destination = $request->input('destination');
            $package->description = $request->input('text');
            $package->image = $newImageName;
            $package->price = $request->input('price');
            $package->time = $request->input('time');
            $package->people_count = $request->input('people_count');
            $package->save();

            return redirect()->route('package.show', ['package' => $package->id]);
        } catch (Throwable $e) {
            report($e);

            $categories = Category::where('status', 1)->get();
            return view('admin.package.update', compact(['package', 'categories']));
        }
    }

    public function destroy(Package $package): RedirectResponse
    {
        $package->toActive();
        return redirect()->back();
    }
}
