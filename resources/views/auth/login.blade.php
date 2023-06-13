@extends('template')
@section('title', 'Авторизация на сайте')
@section('content')
    <h1 class="text-center neonH">Авторизация</h1>
    @if($errors->any())
        <div class="alert alert-danger col-6 mx-auto form" style="border-radius: 1%; border: #ffd7d1 1px solid" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="def-text" style="color: darkred">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-4 mx-auto form" style="background-color: rgba(11,14,27, .9)">
        <form action="/login" method="post">
            @csrf
            <div class="my-3">
                <p class="def-text mb-1">Почта:</p>
                <input type="email" name="email" class="form-control form-border" placeholder="E-mail">
            </div>
            <div class="my-3">
                <p class="def-text mb-1">Пароль:</p>
                <input type="password" name="password" class="form-control form-border" placeholder="Пароль">
            </div>
            <div class="my-0">
                <a class="neonStatic" style="text-decoration: none; margin-left: 230px" href="/register">Еще нет аккаунта</a>
            </div>
            <div class="mt-4">
                <input type="submit" class="form-control neon-btn" value="Авторизоваться">
            </div>
        </form>
    </div>
@endsection
