@extends('template')
@section('title', 'Оставить предложение')
@section('content')
    <h1 class="mt-5 neonH text-center element-animation" style="font-weight: lighter">Предложить сотрудничество</h1>
    <div class="element-animation col-sm-12 col-lg-6 mx-auto mt-5">
        <form action="/addOffer" method="POST">
            @csrf
            <input type="text" name="subject" class="form-control review-form my-3" style="height: 70px; font-size: 20px; padding: 20px 20px" placeholder="Тема">
            <textarea name="message" class="form-control review-form mb-3" style="height: 275px; padding: 20px 20px; font-size: 20px" placeholder="Ваше предложение..."></textarea>
            <input type="text" name="contact" class="form-control review-form my-3" style="height: 50px; font-size: 20px; padding: 20px 20px" placeholder="Ваш тг/ds">
            <input type="submit" class="review-btn mt-3" style="height: 60px; font-size: 20px; padding: 15px 20px" value="Отправить на рассмотрение">
        </form>
    </div>
@endsection
