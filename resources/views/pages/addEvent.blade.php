@extends('template')
@section('title', 'Добавить новость')
@section('content')
    <h1 class="neonStatic text-center my-5" style="font-weight: lighter">Добавит новость/ивент</h1>
    <form action="/addEvent" method="POST" class="col-sm-12 col-lg-8 mx-auto" enctype="multipart/form-data">
        @csrf
        <input name="eventName" type="text" class="form-control review-form my-3" style="height: 60px; font-size: 20px" placeholder="Название ивента">
        <textarea name="eventContent" type="text" class="form-control review-form mb-3" style="height: 150px; font-size: 20px" placeholder="Описание ивента"></textarea>
        <input name="eventFooter" type="text" class="form-control review-form mb-3" style="height: 60px; font-size: 20px" placeholder="Дата проведения">
        <input name="eventImg" type="file" class="form-control review-form avatar-file mb-3">
        <input name="cardStyle" type="text" class="form-control review-form mb-3" style="height: 60px; font-size: 20px" placeholder="Стиль карточки(1, 2, 3, 4)">
        <input type="submit" class="avatar-btn mt-2" style="margin-left: 30%" value="Создать новость о событии">
    </form>
@endsection
