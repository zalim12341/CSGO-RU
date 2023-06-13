@extends('template')
@section('title', 'Профиль')
@section('content')
    <style>
        #nameChangeBtn, #aboutMeChangeBtn, #nameSaveBtn, #aboutMeChangeBtn{
            color: dimgrey;
            cursor: pointer;
        }
        #nameChangeBtn:hover, #aboutMeChangeBtn:hover, #nameSaveBtn:hover, #aboutMeSaveBtn:hover{
            color: grey;
            cursor: pointer;
        }
        .box{
            position: relative;
            overflow:hidden;
            width:300px;
            height:300px;
        }
        .box img {
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:230px;
            height:230px;
            object-fit:cover;
            box-shadow: 3px 1px 25px 3px #8446c2;
            border: #8446c2 0px solid;
        }

    </style>
        <h1 class="text-center neonH" style="margin-top: 100px">Личный кабинет</h1>
        <div class="container px-5 element-animation" style="margin-top: 70px">
            <div class="row px-5 form" style="border-radius: 5%; padding: 70px 70px; background-color: rgba(11,14,27, .9)">
                <div class="col-sm-12 col-lg-4 px-5">
                    <div class="box">
                        <img class="img-border img-fluid" src="{{auth()->user()->img}}">
                    </div>
                    <form action="/changeAvatar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control avatar-file" name="userAvatar">
                        <input type="submit" class="avatar-btn mt-2" value="Изменить">
                    </form>
                </div>
                <div class="col-sm-12 col-lg-3 px-5">
                    <h3 class="neonH mb-5">Информация</h3>
                    <p style="font-size: larger" class="mt-3">
                        <span class="neonStatic">Имя: </span>
                        <span id="nameSpan" class="def-text">{{auth()->user()->name}}</span>
                        <span id="nameChangeBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" onclick="renderInput('nameSpan')">изменить</span>
                        <span id="nameSaveBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" hidden onclick="saveData('nameSpan')">сохранить</span>
                    </p>
                    <p style="font-size: larger">
                        <span class="neonStatic">E-mail: </span>
                        <span class="def-text">{{auth()->user()->email}}</span></p>
                    <p>
                        <a href="/addArticle"></a>
                    </p>
                    <p style="font-size: larger">
                        <span class="neonStatic">Уникальный id: </span>
                        <span class="def-text">{{auth()->user()->id}}</span>
                    </p>
                </div>
                <div class="col-sm-12 col-lg-5" style="border-left: 2px solid #ffffff">
                    <h3 class="neonH text-center">О себе</h3>
                    <p class="ms-5">
                        <span id="aboutMeSpan" class="def-text">{{auth()->user()->about}}</span>
                        <span id="aboutMeChangeBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" onclick="renderInput('aboutMeSpan')">изменить</span>
                        <span id="aboutMeSaveBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" hidden onclick="saveData('aboutMeSpan')">сохранить</span>
                    </p>
                </div>
            </div>
        </div>

        <hr style="color: #faf9f9; box-shadow: 0 0 10px #f6f6f6; margin-top: 120px">
    </div>


    <script>
        // renderInput - это придуманная нами функция
        function renderInput(elementId){

            let span = document.getElementById(elementId);
            let value = span.innerText;
            span.innerHTML = `<input type='text' value="${value}">`;
            if(elementId === "nameSpan"){
                let saveBtn = document.getElementById('nameSaveBtn');
                let nameChangeBtn = document.getElementById('nameChangeBtn');
                saveBtn.hidden = false;
                nameChangeBtn.hidden = true;
            }else{
                let saveBtn = document.getElementById("aboutMeSaveBtn");
                let lastNameChangeBtn = document.getElementById("aboutMeChangeBtn");
                saveBtn.hidden = false;
                lastNameChangeBtn.hidden = true;
            }
        }
        function saveData(elementId){
            let span = document.getElementById(elementId);
            let input = span.firstChild;
            let token = document.querySelector('[name="_token"]').value;
            let formData = new FormData();
            formData.append('_token', token);
            if(elementId === "nameSpan"){
                formData.append('name', input.value);
            }else{
                formData.append('about', input.value);
            }
            fetch('/changeUserData', {
                method: "POST",
                body: formData
            }).then(response=>response.json())
                .then(result=>{
                    if(result.result === 'success'){
                        location.reload();
                    }
                });
        }
    </script>
@endsection
