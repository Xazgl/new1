<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:ital,wght@1,500&family=Roboto:ital,wght@0,100;1,100;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="/style/style.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>

@yield('content')
<section class="background">

    <div class="backgroundContainer">
        <div class="container" id="title">

            <div class="flex-container-mini">
                <div class="flex-el"><p class="main-name">АРКОНТ</p></div>
            </div>

            <div class="flex-container-mini">
                <div class="flex-el-img"><img style="width: 80%;" src="/images/opel.jpg"></div>
            </div>

            <div class="flex-container-mini">
                <div class="flex-el"><p class="phone-main">+7(8442) 68-53-60</p></div>
                <div class="flex-el"><p class="txt-main">Волгоград, ул. Вильнюсская, 42/1</p></div>
            </div>
        </div>
    </div>

<div class="main">
        <div class="el-menu"><a class="txtMenu" href="#cars"><button class="btn-main">Модели</button></a></div>

        <div class="el-menu"><a class="txtMenu" href="#map"><button class="btn-main">Как нас найти</button></a></div>

        <div class="el-menu"><a class="txtMenu" href="#work"><button class="btn-main">Режим работы</button></a></div>

        <div class="el-menu"><a class="txtMenu" href="#cars"><button class="btn-main" data-toggle="modal" data-target="#exampleModalCenter2">Записаться на ТО</button></a></div>

</div>


<div class="video">
    <iframe width="860" height="515" src="https://www.youtube.com/embed/4oMWxFZ8_3k"
           title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            llowfullscreen></iframe>
</div>

<div class="textTimer">
             <h3>Приобретите новый Opel Astra по скидике в Трейд-ин</h3>
              <h6>Время еще есть</h6>
</div>

<div class="timer">
      <div class="timer__items">
        <div class="timer__item timer__days">00</div>
        <div class="timer__item timer__hours">00</div>
        <div class="timer__item timer__minutes">00</div>
        <div class="timer__item timer__seconds">00</div>
      </div>
</div>


<div class="card-group" id="cars">

               <div class="card">
               <img src="/images/vivaro.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                       <h5 class="card-title">Vivaro</h5>
                       <p class="card-text">
                       <ul>
                         <li>- От 17000 рублей в месяц</li>
                         <li>- В наличии 7</li>
                         <li>- Скидка при покупке в Трейд-ин</li>
                        </ul>
                        </p>
                 </div>
                 <div class="card-footer">
                    <small class="text-muted"><a href="#" class="card-link">
                        <button class="btn-red-mini" data-toggle="modal" data-target="#exampleModalCenter">Узнай о ценах</button></a></small>
                 </div>
               </div>

               <div class="card">
                        <img src="/images/ZafiraLife.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Zafira Life</h5>
                            <p class="card-text">
                            <li>- От 13000 рублей в месяц</li>
                            <li>- В наличии 3</li>
                            <li>- Скидка при покупке в Трейд-ин</li>
                            </ul></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><a href="#" class="card-link">
                                    <button class="btn-red-mini" data-toggle="modal" data-target="#exampleModalCenter">
                                        Узнай о
                                        ценах
                                    </button>
                                </a></small>
                        </div>
               </div>

               <div class="card">
                        <img src="/images/comboLife.png." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Combo Life</h5>
                            <p class="card-text">
                            <ul>
                                <li>- От 9000 рублей в месяц</li>
                                <li>- В наличии 9</li>
                                <li>- Скидка при покупке в Трейд-ин</li>
                            </ul>
                            </p></div>
                        <div class="card-footer">
                            <small class="text-muted"><a href="#" class="card-link">
                                    <button class="btn-red-mini" data-toggle="modal" data-target="#exampleModalCenter">
                                        Узнай о
                                        ценах
                                    </button>
                                </a></small>
                        </div>
                    </div>
               </div>

    <div class="card-group" id="cars">

        <div class="card">
            <img src="/images/astra.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ASTRA</h5>
                <p class="card-text">
                <ul>
                    <li>- От 15000 рублей в месяц</li>
                    <li>- В наличии 2</li>
                    <li>- Скидка при покупке в Трейд-ин</li>
                </ul>
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><a href="#" class="card-link">
                        <button class="btn-red-mini" data-toggle="modal" data-target="#exampleModalCenter">
                            Узнай о
                            ценах
                        </button>
                    </a></small>
            </div>
        </div>

<div class="card">
            <img src="/images/crosslandX.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Новый CrosslandX</h5>
                <p class="card-text">
                <li>- От 10000 рублей в месяц</li>
                <li>- В наличии 3</li>
                <li>- Скидка при покупке в Трейд-ин</li>
                </ul></p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><a href="#" class="card-link">
                        <button class="btn-red-mini" data-toggle="modal" data-target="#exampleModalCenter">
                            Узнай о
                            ценах
                        </button>
                    </a></small>
            </div>
        </div>



</div>




    <div class="input-table">

        <div class="input"> </div>


    </div>


    <div class="worktime" id="work"">
        <div class="work">
           <h2>Часы работы:</h2>
           <h3>с 8:00 до 20:00</h3>
           <h3>+7 (8442) 68-48-03</h3>
        </div>
    </div>



    <div class="map" id="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A40acdb249cdf236fb696c21d3efe22b6699b1b9591ce084cae7fd04e0830c434&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLongTitle">Успейте купить автомобиль с
                                    максимальной
                                    выгодой!

                            </div>
                            <div class="modal-body">
                                <div class="phone_title"><p>Укажите телефон и получите персональное предложение</p>
                                    <input
                                        type="text" class="form-control" placeholder="+7(***)***_**_**"
                                        aria-label="phone"
                                        aria-describedby="basic-addon1"></div>
                                <br>
                                <div class="select"><select class="form-select" aria-label="Default select example">
                                        <option selected>Волгоград, ул. Вильнюсская, 42/1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Позже</button>
                                <button type="button" class="btn btn-warning">Отправить заявку</button>
                            </div>
                            <div class="footer_modal">Нажимая на кнопку вы соглашаетесь с &nbsp<a
                                    href="https://nissan-volgograd.ru/privacy">Политикой обработки персональных
                                    данных</a></div>
                        </div>
                    </div>
                </div>


    <!-- Modal2 -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">Запись на ТО

                </div>
                <div class="modal-body">
                    <div class="phone_title"><p>Укажите ваши данные</p>
                        <input
                            type="text" class="form-control" placeholder="+7(***)***_**_**"
                            aria-label="phone"
                            aria-describedby="basic-addon1">
                    <br>
                        <input
                            type="text" class="form-control" placeholder="ФИО владельца"
                            aria-label="phone"
                            aria-describedby="basic-addon1">
                        <br>
                    <input
                        type="text" class="form-control" placeholder="Номер вашей машины"
                        aria-label="phone"
                        aria-describedby="basic-addon1">
                <br>

                       <label for="name" class="form-label">Дата вашего визита</label>
                    <input type="date" class="password" id="birthday" name="birthday"  placeholder="Введите дату"><br>

                    <div class="select"><select class="form-select" aria-label="Default select example">
                            <option selected>Волгоград, ул. Вильнюсская, 42/1</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Передумал</button>
                    <button type="button" class="btn btn-warning">Отправить заявку</button>
                </div>
                <div class="footer_modal">Нажимая на кнопку вы соглашаетесь с &nbsp<a
                        href="https://nissan-volgograd.ru/privacy">Политикой обработки персональных
                        данных</a></div>
            </div>
        </div>
    </div>





</section>

                <div class="footer">
                    <div class="footer-words">
                        <ul>
                            <li>+7 (8443) 445-143</li>
                            <li>г. Волжский,пр-т им. Ленина,359</li>
                            <li>8:00 - 20:00 без выходных</li>
                        </ul>
                    </div>
                </div>


            </div>
            @section('scripts')
                <script>
                    document.getElementById('btn').addEventListener('click', scrollToElement);

                    function scrollToElement(e) {
                        element = document.getElementById("1")
                        element.scrollIntoView(true);
                    }

                </script>





                <script src="https://js.cx/libs/animate.js"></script>
                <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



                <script>

                    document.addEventListener('DOMContentLoaded', function () {
                        // конечная дата, например 1 июля 2021
                        const deadline = new Date(2021, 12, 12);
                        // id таймера
                        let timerId = null;

                        function declensionNum(num, words) {
                            return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
                        }

                        function countdownTimer() {
                            const diff = deadline - new Date();
                            if (diff <= 0) {
                                clearInterval(timerId);
                            }
                            const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
                            const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
                            const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
                            const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
                            $days.textContent = days < 10 ? '0' + days : days;
                            $hours.textContent = hours < 10 ? '0' + hours : hours;
                            $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
                            $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
                            $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
                            $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
                            $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
                            $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
                        }

                        const $days = document.querySelector('.timer__days');
                        const $hours = document.querySelector('.timer__hours');
                        const $minutes = document.querySelector('.timer__minutes');
                        const $seconds = document.querySelector('.timer__seconds');
                        countdownTimer();
                        timerId = setInterval(countdownTimer, 1000);
                    });

                </script>







                <script>
                    let data = new Data('Dec 1 2021 00:00:00');


                    function counts() {
                        let now = new Data()
                        gap = data - now;
                        let days = Math.floor(gap / 1000 / 60 / 60 / 24);
                        let hours = Math.floor(gap / 1000 / 60 / 60) % 24;
                        let min = Math.floor(gap / 1000 / 60) % 60;
                        let sec = Math.floor(gap / 1000) % 60;

                        document.getElementById("days").innerText = days;
                        document.getElementById("days").innerText = hours;
                        document.getElementById("days").innerText = min;
                        document.getElementById("days").innerText = sec;
                    }

                    const createClock = setInterval(counts, 1000);

                    document.getElementById("container2").innerHTML = createClock;

                </script>


                <div class="container">
                    <p id="timer">
                        <span id="days"></span>
                        <span id="hours"></span>
                        <span id="min"></span>
                        <span id="sec"></span>
                    </p>
                </div>







                <script src="https://code.jquery.com/jquery-3.6.0.js"
                        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                        crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
                        crossorigin="anonymous"></script>


                <script>
                    $(".footer").fadeIn(3000);
                </script>


@show
</body>
</html>
