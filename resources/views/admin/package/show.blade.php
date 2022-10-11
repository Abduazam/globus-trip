@extends('layouts.admin')

@section('title', 'Show')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tur paket: {{ $package->id }}</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('package.edit', ['package' => $package->id]) }}" class="btn btn-warning">O'zgartirish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td style="width: 200px;"><b>Tur paket nomi</b></td>
                        <td>{{ $package->title }}</td>
                    </tr>
                    <tr>
                        <td><b>Tur paket kategoriyasi</b></td>
                        <td>
                            <span>{{ $package->category }} </span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tur paket manzili</b></td>
                        <td>
                            <span>{{ $package->destination }} </span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tur paket narxi</b></td>
                        <td>
                            <span>{{ $package->price }} </span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tur paket vaqti</b></td>
                        <td>
                            <span>{{ $package->time }} </span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tur paket odamlar soni</b></td>
                        <td>
                            <span>{{ $package->people_count }} </span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tur paket matni</b></td>
                        <td>{!! $package->description !!}</td>
                    </tr>
                    <tr>
                        <td><b>Tur paket rasmi</b></td>
                        <td>
                            <img src="{{ asset('/images/' . $package->image) }}" alt="" class="w-50">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tur paket holati</b></td>
                        <td>
                            @if($package->status === 1)
                                <span class="badge badge-success">Faol</span>
                            @else
                                <span class="badge badge-danger">Nofaol</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
