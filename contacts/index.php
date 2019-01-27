<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Контакты / Code The Web</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Arsenal|Open+Sans+Condensed:300|Poiret+One" rel="stylesheet">
   
    <style>
        .button_form {
            font-size: 18px;
            padding: 10px 10px;
            border: 1px solid gray;
            text-align: center;
            margin-top: 24px;
           background-color: #8BC6EC;
background-image: -webkit-linear-gradient(315deg, #8BC6EC 0%, #454bff 100%);
background-image: -o-linear-gradient(315deg, #8BC6EC 0%, #454bff 100%);
background-image: linear-gradient(135deg, #8BC6EC 0%, #454bff 100%);
            color: white;
        }

        .form input,
        textarea {
            font-size: 16px;
            padding: 10px;
            padding-left: 20px;
            margin-top: 24px;
            -webkit-box-shadow: 1px 1px 3px 3px rgba(209, 209, 209, 0.31);
                    box-shadow: 1px 1px 3px 3px rgba(209, 209, 209, 0.31);

        }

        .form {
            font-family: 'Arsenal', sans-serif;
            padding-left: 30px;
            padding: 20px;
            text-align: left;
            background-color: white;
        }

        .contacts {
           
            font-family: 'Arsenal', sans-serif;
            padding: 20px;
            text-align: center;
            background-color: rgb(244, 244, 244);
            height: 550px;
        }

        .contacts a {
            margin-left: 10%;
            font-size: 20px;
        }

        .contacts h4 {
            letter-spacing: .5px;
            margin-top: 32px;
            font-size: 19px;

        }

        .hr {
            width: 40%;
            margin-left: 30%;
            margin-top: 32px;

            border-bottom: 2px solid #0092d2;
        }

        .content {
            margin-top: -15%;
            margin-left: 29%;
            height: inherit;
            -webkit-box-shadow: 1px 1px 1px 1px rgb(234, 234, 234);
                    box-shadow: 1px 1px 1px 1px rgb(234, 234, 234);
            padding-right: 0px;
            margin-bottom: 30px;
            padding-left: 0px;
        }

        .background {
            height: 300px;
          background-image:url(../img/bg.jpg);
            background-size: cover;;



        }

        .background h2 {
            position: absolute;
            text-transform: uppercase;
            color: white;
            font-family: 'Poiret One', cursive;
            text-align: center;
            margin-left: 35%;
            font-size: 3em;
            margin-top: 2%;
        }

    </style>
</head>

<body>
    <?php 
    include("../include/preloader.php");
	include("../include/sidebar.php");
	?>
    <div class="col-sm-9 col-sm-offset-3 background">
        <h1>Контакты</h1>
    </div>
    <div class=" col-sm-8 col-sm-offset-3 content ">

        <div class="contacts col-sm-4">
            
            <h4>Эл. почта<br> <br>rrotatew@site-uslugi.ru</h4>
            <div class="hr"></div>
            <h4>Телефон<br><br> +7(919)686-23-51</h4>
            <div class="hr"></div>
            <h4>Социальные сети<br><br><a href="https://www.instagram.com/web_lat/"><i class="fa fa-instagram" aria-hidden="true"></i></a> </h4>
        </div>
        <div class="form col-sm-8">
            <h3>Свяжитесь с нами</h3>
            <h4>Как только мы получим ваше письмо, мы обязательно свяжемся с вами и ответим на ваш вопрос.</h4>


            <form action="../application.php" method="POST" name="application">
                <input class="col-sm-12" type="text" name="name" placeholder="Введите Ваше имя" required><br>
                <input class="col-sm-12 mask" type="tel" name="phone" placeholder="+7-(___)-___-__-__" required><br>
                <textarea class="col-sm-12" style="padding-left:20px;" name="text" id="" cols="10" rows="5"  placeholder="Что вас интересует?" required></textarea>
                <input type="submit" class="col-sm-4 button_form" value="Отправить"/>

            </form>
        </div>

    </div>
    <?php 
	 include("../include/footer.php");
	 ?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js "></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.js"></script>
    <script>$('.mask').mask('+7(000)-000-00-00');</script>
</body>

</html>
