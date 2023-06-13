@extends('template')
@section('title', 'csgo')
@section('content')

        <div class="row mb-3 mx-a element-animation">
            <div class="col-sm-12 col-lg-8 mt-5">
                <h1 class="neonH">История создания этого сервера</h1>
                <p class="def-text">В 2018 году я решил создать сервер для людей, играющих в CS:GO. Мне было важно создать сервер, который бы предоставлял качественный игровой опыт и доставлял удовольствие игрокам.
                    Я начал работу с выбора хостинга для сервера. Понадобилось немало времени и усилий, чтобы найти надежного провайдера, который бы предоставил высокое качество услуг. В результате я выбрал выделенный сервер, способный обеспечить стабильную работу сервера и высокую скорость интернета.
                    Затем я приступил к настройке сервера. Мне понадобилось много времени, чтобы правильно настроить все параметры сервера и настроить его для максимальной производительности. Я установил ряд модификаций, которые позволят игрокам наслаждаться более интересными режимами игры и улучшенной графикой.
                    Когда сервер был готов, я начал приглашать игроков, создал группу в социальной сети и начал рекламировать свой сервер в сообществах игроков CS:GO. Не прошло и недели, как сервер начал популяризироваться и привлекал все больше и больше игроков.
                </p>
            </div>
            <div class="col-md-11 col-lg-4 mt-6">
                <img class="img-fluid img-border" style=" border: 1px solid #a553f6; box-shadow: 3px 1px 25px 3px #a553f6;" src="https://skinsmonkey.com/blog/wp-content/uploads/sites/2/csgo-source-two-version-1.jpg?_t=1662535718">
            </div>
        </div>

        <div class="row element-animation" style="margin-top: 100px">
            <div class="col-sm-12 col-lg-4">
                <img class="img-fluid img-border" style="box-shadow: 1px 1px 15px 8px #ffffff; border: 0px solid #ffffff" src="https://steamuserimages-a.akamaihd.net/ugc/1615060615049805048/02241ED945DB81C48CBE92AA07EDF41E9888F615/?imw=512&amp;imh=273&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true">
            </div>
            <div class="col-sm-12 col-lg-8">
                <h1 class="neonH">Для чего создан сайт?</h1>
                <p class="def-text">На нашем сервере вы можете найти тиммейтов любого возраста и скилла. Мы проводим турниры и мероприятия, связанные с любимой игрой. В наших соцсетях публикуются факты и новости киберспорта, интерактивы, розыгрыши и конкурсы.</p>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6 mx-auto element-animation" style="margin-top: 130px">
            <h1 class="neonStatic text-center mb-5" style="font-weight: lighter">Отзывы о проекте</h1>
            @auth()
                <form action="/addReview" method="POST">
                    @csrf
                    <textarea name="review" class="form-control review-form" placeholder="Опишите свои впечатления..."></textarea>
                    <input type="submit" class="review-btn mt-3" style="width: 100%" value="Оставить отзыв">
                </form>
            @else
                <p class="text-muted text-center" style="font-weight: lighter; font-size: 20px">Для добавления отзыва необходимо
                    <a href="/register" class="text-muted" style="text-decoration: none;">авторизоваться </a><i class="fa-solid fa-arrow-pointer fa-2xs"></i></p>
            @endauth

            <div class="col-sm-12 col-lg-10 mx-auto" style="margin-top: 50px">
                @foreach($reviews as $review)
                    <div class="card review mt-4" style="background-color: rgba(11,14,27, .9)">
                        <div class="card-header" style="border-bottom: 1px solid #8446c2; box-shadow: 0 0 2px 1px #8446c2;">
                            <img style="border-radius: 10%; height: 70px; width: 70px" src="{{$review->avatar}}">
                            <a>{{$review->nickname}}</a>
                        </div>
                        <div class="card-body">
                            <p class="card-text m-0">{{$review->review}}</p>
                        </div>
                        <a class="text-muted text-end me-2 mb-2" style="text-decoration: none; font-size: x-small">{{$review->created_at}}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <hr style="color: #ba14b6; box-shadow: 0 0 10px #ab42d2; margin-top: 60px">
@endsection
