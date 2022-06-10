@extends('layouts.master')

@section('title', 'Halaman Gallery')

@section('main')
    <h1>Halaman Gallery</h1>
    <div class="row">
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="images/leviathan.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Leviathan</h5>
                    <p class="card-text">Leviathan adalah monster air besar dan kejam yang disebutkan dalam beberapa buku Alkitab..</p>
                    <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="images/lucifer.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lucifer</h5>
                    <p class="card-text">Lucifer adalah malaikat yang jatuh dari surga.</p>
                    <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
