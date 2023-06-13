@extends('template')
@section('title', 'Подать заявку в стафф')
@section('content')
    <h1 class="neonH text-center element-animation" style="margin-bottom: 70px; margin-top: 150px">Подать заявку в стафф</h1>
    <div class="row mt-5 element-animation">
        <div class="col-sm-12 col-lg-4" style="font-weight: lighter; font-size: 30px">
            <h3 class="neonH mb-4">Основные роди дс сервера:</h3>
            <a href="#developer" style="text-decoration: none"><span style="">Administrator</span></a><br>
            <a href="#moderator" style="text-decoration: none"><span style="">Moderator</span></a><br>
            <a href="#eventmaker" style="text-decoration: none"><span style="">Team Captain</span></a><br>
            <a href="#ultimate" style="text-decoration: none"><span style="">Team Coach</span></a><br>
            <a href="#control" style="text-decoration: none"><span style="">Community Member</span></a><br>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div id="developer" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Ответственный за общую работу сервера, назначение новых администраторов и управление правом доступа.
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>

            <div id="moderator" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Ответственный за отслеживание нарушений правил сервера, решение конфликтных ситуаций и навигацию новых участников в сообществе.
                    </p><hr style="box-shadow: white 0 0 5px; color: white">

                </div>
            </div>

            <div id="eventmaker" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Руководит командой в игре и заботится о командной работе на сервере.
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>

            <div id="ultimate" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Проводит тренировки и дает инструктаж команде в целях улучшения их игры и подготовки к турнирам
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>

            <div id="control" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Официальный статус для всех участников сервера, которые могут принимать участие в чате, общаться и играть на сервере.
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <p class="def-text" style="color: whitesmoke; font-weight: lighter">
                В заявке необходимо указать:
                <ul class="def-text" style="color:whitesmoke; font-weight: lighter">
                    <li>Ваш никнейм</li>
                    <li>Ваш возраст</li>
                    <li>Роль которую вы хотите получить</li>
                    <li>Ваши качестав, из-за которых мы должны вас взять на эту должность</li>
                </ul>
            </p>
        </div>
    </div>
    <h3 class="neonText text-center mt-2" style="font-weight: lighter">
        <a href="https://t.me/gyzglsfuck4ujchpxphx" style="text-decoration: none; color: white">
            Подать заявку
        </a>
    </h3>

    <hr style="color: hotpink; box-shadow: 0 0 10px hotpink; margin-top: 100px">

@endsection
