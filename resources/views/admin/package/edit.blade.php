@extends('layouts.admin')

@section('title', 'Edit')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('package.update', ['package' => $package->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Tur paket nomi</label>
                            <input type="text" class="form-control" id="title" placeholder="Nomini yozing.." name="title" value="{{ $package->title }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" data-select2-id="29">
                            <label for="category_id">Tur paket kategoriyasi</label>
                            <select id="category_id" name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" data-select2-id="{{ $category->id }}" <?php $package->category_id == $category->id ? 'selected' : '' ?>>{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="destination">Tur paket manzili</label>
                            <input type="text" class="form-control" id="destination" placeholder="Manzilni yozing.." name="destination" value="{{ $package->destination }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time">Tur paket vaqti</label>
                            <input type="text" class="form-control" id="time" placeholder="Vaqtni yozing.." name="time" value="{{ $package->time }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Tur paket narxi</label>
                            <input type="text" class="form-control" id="price" placeholder="Narxini yozing.." name="price" value="{{ $package->price }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="people_count">Tur paket odamlar soni</label>
                            <input type="number" class="form-control" id="people_count" placeholder="Odamlar soni.." name="people_count" value="{{ $package->people_count }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Tur paket matni</label>
                            <textarea class="form-control" rows="3" placeholder="Izoh yozing" id="description" name="description" required>{{ $package->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if($package->image)
                            <label for="customFile">Tur paket hozirgi rasmi</label>
                            <img src="{{ asset('/images/' . $package->image) }}" alt="" class="w-75">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="customFile">Tur paket rasmi</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </form>
    </div>
@endsection
