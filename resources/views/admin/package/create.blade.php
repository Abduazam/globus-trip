@extends('layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Tur paket nomi</label>
                            <input type="text" class="form-control" id="title" placeholder="Nomini yozing.." name="title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" data-select2-id="29">
                            <label for="category">Tur paket kategoriyasi</label>
                            <input type="text" class="form-control" id="category" placeholder="Kategoriyasi.." name="category" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="destination">Tur paket manzili</label>
                            <input type="text" class="form-control" id="destination" placeholder="Manzilni yozing.." name="destination" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time">Tur paket vaqti</label>
                            <input type="text" class="form-control" id="time" placeholder="Vaqtni yozing.." name="time" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Tur paket narxi</label>
                            <input type="text" class="form-control" id="price" placeholder="Narxini yozing.." name="price" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="people_count">Tur paket odamlar soni</label>
                            <input type="number" class="form-control" id="people_count" placeholder="Odamlar soni.." name="people_count" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Tur paket matni</label>
                            <textarea class="form-control" rows="3" placeholder="Izoh yozing" id="description" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
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
