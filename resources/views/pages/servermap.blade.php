@extends('template')
@section('title', 'Навигация по серверу')
@section('content')
    <h1 class="neonH text-center" style="margin-bottom: 70px; margin-top: 150px">Навигация по серверу</h1>

    <div id="rules" class="element-animation mx-auto col-sm-12">
        <div id="okno" class="col-sm-12">
            <h3>Правил для Discord-сервера</h3>
            <p>Будьте вежливы и уважительны друг к другу. Никогда не оскорбляйте других участников сервера и не повышайте голоса в резких тонах.</p>
            <p>Ограничивайте использование языка, который может быть оскорбительным или непристойным. Рекомендуется избегать мата и грубо стебаться over-the-top.</p>
            <p>Не пытайтесь читерить или использовать взломанные программы в игре. Это все еще является нарушением правил игры и может привести к наказанию от разработчиков.</p>
            <p>Чтобы держать сервер в хорошем состоянии, не спамьте чата или голосовые каналы.</p>
            <p>Не делитесь личной информацией в открытом чате. Это включает в себя реальные имена, адреса, фотографии и другую индивидуальную информацию.</p>
            <p>При присоединении к голосовым каналам, пожалуйста, отключите какие-либо шумы и бэкграунд звуки, которые могут мешать коммуникации.</p>
            <p>Ни в коем случае не провоцируйте участников на конфликты и ссоры. В случае конфликта, свяжитесь с администрацией для решения этой проблемы.</p>
            <a href="#" class="close" style="margin-top: 45px">Закрыть</a>
        </div>
    </div>

    <div id="roles" class="element-animation mx-auto col-sm-12">
            <div id="okno" class="col-sm-12" style="font-weight: lighter; font-size: 17px">
                <h3>Основные роли на сервере:</h3>
                <p class="mt-4"><span style="color: #6a1b21; text-shadow: 0 0 3px #6a1b21">Administrator</span> - Сердце сервера</p>
                <p><span style="color: #8f1c2a; text-shadow: 0 0 3px #8f1c2a;">Moderator</span> - Основная модерация</p>
                <p><span style="color: #b51b33; text-shadow: 0 0 3px #b51b33;">Team Captain</span> - Руководитель командой</p>
                <p><span style="color: #0d6ff0; text-shadow: 0 0 3px #0d6ff0;">Team Coach</span> - Проводит тренировки и дает инструктажи</p>
                <p><span style="color: #dc143c; text-shadow: 0 0 3px #dc143c;">Community Member</span> - Обычный участник</p>

                <h3 class="mt-4">Допоплнительные роли:</h3>
                <p><span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">Стример</span> - для тех, кто стримит свою игру на сервере.</p>
                <p><span style="color: #ffdd70; text-shadow: 0 0 3px #ffdd70">Аналитик</span> - для тех, кто умеет анализировать игры и помогать команде в улучшении факторов игры.</p>
                <p><span style="color:#00cc8e; text-shadow: 0 0 3px #00cc8e">Графический дизайнер</span> - для тех, кто может создавать видеообложки, баннеры и другие элементы дизайна для сообщества.</p>
                <a href="#" class="close" style="font-weight: lighter">Закрыть</a>
            </div>
    </div>

    <div id="channels" class="element-animation mx-auto col-sm-12">
        <div id="okno" class="col-sm-12" style="font-weight: lighter; font-size: 20px">
            <h3>В общем:</h3>
            <p>1. General - для общего общения и встреч с другими участниками сервера.</p>
            <p>2. Competitive - для игры в соревновательном режиме с другими участниками вашей команды и других команд, которые вы хотите вызвать.</p>
            <p>3. Training - для тренировок вашей команды и практики навыков игры в CS:GO.</p>
            <p>4. Community Events - для обсуждения и оповещения участников сервера о контенте, турнирах, стримах и других мероприятиях, связанных с CS:GO.</p>
            <p>5. LFG (Looking for Group) - для поиска других игроков, с которыми вы можете сыграть вместе в CS:GO, особенно если вы не нашли место в команде, вы можете найти игроков тут.</p>
            <a href="#" class="close" style="font-weight: lighter; margin-top: 115px ">Закрыть</a>
        </div>
    </div>

    <div class="row element-animation mx-auto">
        <div class="col-sm-12 col-lg-4 mt-4 mx-3" style="width: 400px">
            <h3 class="neonStatic" style="font-weight: lighter">Правила</h3>
            <p class="def-text">Советую их почитать и запомнить, чтобы не получить
                <a class="neonText" href="#rules" style="text-decoration: none; color: #FF2121">бан
                </a>
            </p>
        </div>
        <div class="col-12-sm col-lg-4 mt-4 mx-3" style="width: 400px">
            <h3 class="neonStatic" style="font-weight: lighter">Роли</h3>
            <p class="def-text">Список основных ролей
                <a class="neonText" href="#roles" style="text-decoration: none; color: #FF2121">здесь
                </a>
            </p>
        </div>
        <div class="col-sm-12 col-lg-4 mt-4 mx-3" style="width: 400px">
            <h3 class="neonStatic" style="font-weight: lighter">Каналы</h3>
            <p class="def-text">Эти каналы могут быть адаптированы к вашим потребностям. Подходящих каналов может быть больше или меньше в зависимости от нужды
                <br><a class="neonText" href="#channels" style="text-decoration: none; color: #FF2121">Кратко о каналах
                </a>
            </p>
        </div>
        <div class="element-animation">
        </div>
    </div>

    <hr style="color: palegreen; box-shadow: 0 0 10px palegreen; margin-top: 120px">


@endsection
