@extends('template')
@section('title', 'Регистрация на сайте')
@section('content')
    <h1 class="text-center neonH">Регистрация на сайте</h1>
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
        <form action="/register" method="post">
            @csrf
            <div class="my-2">
                <p class="def-text mb-1">Никнейм/имя:</p>
                <input type="text" name="name" class="form-control form-border">
            </div>
            <div class="my-2">
                <p class="def-text mb-1">Почта:</p>
                <input type="email" name="email" class="form-control form-border">
            </div>
            <div class="my-2">
                <p class="def-text mb-1">Пароль:</p>
                <input type="password" name="password" class="form-control form-border">
            </div>
            <div class="my-2">
                <p class="def-text mb-1">Подтвердите пароль:</p>
                <input type="password" name="password_confirmation" class="form-control form-border">
            </div>
            <div class="my-0">
                <a class="neonStatic" style="text-decoration: none; margin-left: 200px" href="/login">Уже зарегистрирован</a>
            </div>
            <div class="mt-4">
                <input type="submit" class="form-control neon-btn" value="Создать аккаунт">
            </div>
        </form>
    </div>
@endsection

