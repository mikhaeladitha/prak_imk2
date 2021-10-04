@extends('layouts.master')

@section('content')
    <!-- Begin Page Content -->
    
    <div class="container-fluid">
        <h1 class="h1 mb-4 text-gray-500">Grid 1</h1>
        <div class="row d-flex justify-content-start mb-4">
            <div class="col-1 p-1 bg-primary text-center text-gray-100 rounded">Kolom 1</div>
            <div class="col-1 p-1 bg-secondary text-center text-gray-100 rounded">Kolom 2</div>
            <div class="col-1 p-1 bg-success text-center text-gray-100 rounded">Kolom 3</div>
            <div class="col-1 p-1 bg-danger text-center text-gray-100 rounded">Kolom 4</div>
        </div>
        <h1 class="h1 mb-4 text-gray-500">Grid 2</h1>
        <div class="row d-flex justify-content-end mb-3">
            <div class="col-1 p-1 bg-primary text-center text-gray-100 rounded">Kolom 1</div>
            <div class="col-1 p-1 bg-secondary text-center text-gray-100 rounded">Kolom 2</div>
            <div class="col-1 p-1 bg-success text-center text-gray-100 rounded">Kolom 3</div>
            <div class="col-1 p-1 bg-danger text-center text-gray-100 rounded">Kolom 4</div>
        </div>
        <h1 class="h1 mb-4 text-gray-500">Grid 3</h1>
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-1 p-1 bg-primary text-center text-gray-100 rounded">Kolom 1</div>
            <div class="col-1 p-1 bg-secondary text-center text-gray-100 rounded">Kolom 2</div>
            <div class="col-1 p-1 bg-success text-center text-gray-100 rounded">Kolom 3</div>
            <div class="col-1 p-1 bg-danger text-center text-gray-100 rounded">Kolom 4</div>
        </div>
        <h1 class="h1 mb-4 text-gray-500">Grid 4</h1>
        <div class="row d-flex justify-content-between mb-4">
            <div class="col-1 p-1 bg-primary text-center text-gray-100 rounded">Kolom 1</div>
            <div class="col-1 p-1 bg-secondary text-center text-gray-100 rounded">Kolom 2</div>
            <div class="col-1 p-1 bg-success text-center text-gray-100 rounded">Kolom 3</div>
            <div class="col-1 p-1 bg-danger text-center text-gray-100 rounded">Kolom 4</div>
        </div>
        <h1 class="h1 mb-4 text-gray-500">Grid 5</h1>
        <div class="row d-flex justify-content-around mb-4">
            <div class="col-1 p-1 bg-primary text-center text-gray-100 rounded">Kolom 1</div>
            <div class="col-1 p-1 bg-secondary text-center text-gray-100 rounded">Kolom 2</div>
            <div class="col-1 p-1 bg-success text-center text-gray-100 rounded">Kolom 3</div>
            <div class="col-1 p-1 bg-danger text-center text-gray-100 rounded">Kolom 4</div>
        </div>
        <h1 class="h1 mb-4 text-gray-500">Grid 7</h1>
        <div class="row d-flex justify-content-between mb-4">
            <div class="col-1 p-1 bg-primary text-center text-gray-100 rounded">Kolom 1</div>
            <div class="col-2 p-1 bg-secondary text-center text-gray-100 rounded">Kolom 2</div>
            <div class="col-3 p-1 bg-success text-center text-gray-100 rounded">Kolom 3</div>
            <div class="col-4 p-1 bg-danger text-center text-gray-100 rounded">Kolom 4</div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection