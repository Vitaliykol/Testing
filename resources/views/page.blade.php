<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    section.order-form .input {
    height: 52px;
    border: solid 1px #e4e4e4;
    border-radius: 3px;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 15px;
    padding-left: 22px;
    width: 100%;
    margin-bottom: 20px;
}
section.order-form {
    background-color: #f0f2f8;
    background-image: url(/img/order-back.jpg);
    padding-bottom: 100px;
}
h1 {
    padding-top: 45px;
    padding-bottom: 45px;
    font-family: 'Montserrat', sans-serif;
    font-size: 36px;
    font-weight: 600;
    margin: 0;
}
h2 {
    padding-top: 45px;
    padding-bottom: 45px;
    font-family: 'Montserrat', sans-serif;
    font-size: 36px;
    font-weight: 600;
    margin: 0;
}
    </style>
</head>
<body>
<section class="order-form" id="orders">
    <div class="container">
        <div class="row">
            <div class="body_form col-xl-8 col-lg-12 col-md-12">
                <h1>Заявка на интеграцию с Checklic</h1>
                <form method="POST" class="mail-form">
                    <div class="row no-gutters justify-content-between">
                        <div class="col-xl-4 col-lg-6 pr-lg-2 pr-md-4">
                            <input type="text" class="input " name="name" id="name" placeholder="Ваше имя">
                        </div>
                        <div class="col-xl-4 col-lg-6 pr-lg-2 pr-md-4">
                            <input type="text" class="input" name="phone" id="phone" placeholder="Ваш телефон">
                        </div>
                        <div class="col-xl-4 col-lg-6 pr-lg-2 pr-md-4">
                            <input type="text" class="input" name="mail" id="mail" placeholder="Ваш e-mail">
                        </div>
                        <div class="col-xl-12 col-lg-6 pr-lg-2 pr-md-12">
                            <input type="text" class="input " name="departament" id="departament" placeholder="Название организации или вашего IT-решения">
                        </div>
                        <div class="col-xl-12 col-lg-6 pr-lg-2 pr-md-12">
                            <input type="text" class="input " name="inn" id="inn" placeholder="ИНН организации">
                        </div>
                        <div class="col-xl-12 col-lg-12 pr-lg-2 pr-md-12">
                            <textarea class="input" placeholder="Текст сообщения" name="text" id="text"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ob_form col-xl-4 col-lg-12 col-md-0">
                <h2>Заявка</h2>
            </div>
        </div>
    </div>
</section>
</body>
</html>