@extends('template')
@section('title', 'Новости и обновления')
@section('content')
    <h1 class="neonStatic text-center my-5" style="font-weight: lighter">Ивенты на сервере</h1>

    <div class="container mx-auto col-sm-12 col-lg-8">
        @foreach($events as $event)
            @if($event->card_style == "1")
                <div class='card review' style='height: auto; border: 2px solid white; box-shadow: 0px 0px 3px 1px white; margin-top: 70px; background-color: rgba(11,14,27, 0.9);'>
                    <img class='card-img-top img-fluid' style="height: 350px; border-bottom: 2px solid white; box-shadow: white 0px 0px 3px 1px" src='{{$event->img}}'>
                    <div class='card-body'>
                        <div class='card-title neonStatic text-center' style='font-size: 25px; font-weight: lighter'>{{$event->name}}</div>
                        <div class='card-text def-text'>{{$event->content}}</div>
                    </div>
                    <div class='card-footer def-text' style="border-top: 2px solid white; box-shadow: 0px 0px 3px 1px white">Дата проведения: {{$event->footer}}<br>
                        <span class="text-muted" style='font-size: 13px'>{{$event->created_at}}</span>
                    </div>
                </div>

            @elseif($event->card_style == "2")
                <div class='card review' style='height: auto; border: 2px solid white; box-shadow: 0px 0px 3px 1px white; margin-top: 70px; background-color: rgba(11,14,27, 0.9);'>
                    <div class='card-body'>
                        <div class='card-title neonStatic text-center' style='font-size: 25px; font-weight: lighter'>{{$event->name}}</div>
                        <div class='card-text def-text'>{{$event->content}}</div>
                    </div>
                    <img class='card-img-top img-fluid' style="height: 350px; border-top: 2px solid white; border-bottom: 2px solid white; box-shadow: white 0px 0px 3px 1px" src='{{$event->img}}'>
                    <div class='card-footer def-text'>Дата проведения: {{$event->footer}}<br>
                        <span class="text-muted" style='font-size: 13px'>{{$event->created_at}}</span>
                    </div>
                </div>

            @elseif($event->card_style == "3")
                <div class="card mb-3 review" style="width: auto; height: auto; border: 2px solid white; box-shadow: 0px 0px 3px 1px white; margin-top: 70px; background-color: rgba(11,14,27, 0.9);">
                    <div class="row g-0">
                        <div class="col-sm-12 col-lg-4">
                            <img src="{{$event->img}}" style="max-width: 300px; height: 100%; border-right: 2px solid white; box-shadow: 0px 0px 3px 1px" class="img-fluid rounded-start">
                        </div>
                        <div class='card-body col-sm-12 col-lg-8'>
                            <div class='card-title neonStatic text-center' style='font-size: 25px; font-weight: lighter'>{{$event->name}}</div>
                            <div class='card-text def-text ms-lg-4'>{{$event->content}}</div>
                        </div>
                        <div class='card-footer def-text' style="border-top: 2px solid white; box-shadow: 0px 0px 3px 1px white">Дата проведения: {{$event->footer}}<br>
                            <span class="text-muted" style='font-size: 13px'>{{$event->created_at}}</span>
                        </div>
                    </div>
                </div>

            @elseif($event->card_style == "4")
                <div class="card mb-3 review" style="width: auto; height: auto; border: 2px solid white; box-shadow: 0px 0px 3px 1px white; margin-top: 70px; background-color: rgba(11,14,27, 0.9);">
                    <div class="row g-0">
                        <div class='card-body col-sm-12 col-lg-8'>
                            <div class='card-title neonStatic text-center' style='font-size: 25px; font-weight: lighter'>{{$event->name}}</div>
                            <div class='card-text def-text me-lg-3'>{{$event->content}}</div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img src="{{$event->img}}" style="max-width: 280px; height: 100%; border-left: 2px solid white; box-shadow: 0px 0px 3px 1px" class="img-fluid rounded-end">
                        </div>
                        <div class='card-footer def-text' style="border-top: 2px solid white; box-shadow: 0px 0px 3px 1px white">Дата проведения: {{$event->footer}}<br>
                            <span class="text-muted" style='font-size: 13px'>{{$event->created_at}}</span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection
