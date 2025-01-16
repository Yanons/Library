<!-- --><style> 
    @font-face {
        font-family: "Arimo-Bold";
        src: local("Arimo-Bold"), url("/fonts/static/Arimo-Bold.ttf"),
    }
    @font-face {
        font-family: "Arimo";
        src: local("Arimo"), url("/fonts/Arimo-VariableFont_wght.ttf"),
    }
    @font-face {
        font-family: "Arimo-BoldItalic";
        src: local("Arimo-BoldItalic"), url("/fonts/static/Arimo-BoldItalic.ttf");
    }
    .window{
        background:rgb(219, 205, 158);
        margin: 5px 50px 5px 50px;
        height: auto;
        width: auto;
    }
    .up-window{
        display: flex;
        align-items:center;
        justify-content: space-between;
        background:rgb(180, 218, 158);
        height: 5%;
        width: auto;
    }
    .center{
        display: flex;
        background:rgb(158, 219, 216);
        height: 90%;
        width: auto;
    }
    .botton-window{
        background:rgb(141, 140, 224);
        height: 30%;
        width: auto;
    }
    .logo-name{
        margin-left: 45%;
    }
    .menu{
        
    }
    .menu-left-text{
        display: flex;
        flex-wrap: wrap;
        align-content: flex-start;
        background:rgb(148, 104, 133);
        height: auto;
        width: 70%;
        padding:3%;
    }
    .menu-right-button{
        background:rgb(209, 138, 144);
        height: 100%;
        width: 30%;
    }
    .style-text{
        font-family: "Arimo";
    }
    .style-title{
        font-family: "Arimo-BoldItalic";
    }
    .info-menu-right{
        position: absolute;
        top: 40%;
        width: 20%;
        margin-left: 2%;
    }
    .buttons-main{
        display: flex;
        flex-direction: column;
        position: absolute;
        width: 20%;
        margin-left: 2%;
        top: 60%;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mbti-test</title><!-- Детектив, который ищет скрытые таланты-->
</head>
<body>
    <div class="window">
        <div class="up-window">
            <div class="logo-name">
                <h1>MBTI-test</h1>
            </div>
            <div class="menu">
                <button>Профиль</button>
            </div>
        </div>
        <div class="center">
            <div class="menu-left-text">
                <div class="title-info">
                    <h1 class="style-title">Познай себя: Пройди тест и открой новые горизонты!</h1>
                </div>
                <div class="main-info">
                    <p class="style-text">Добро пожаловать на наш сайт! Мы с радостью приветствуем вас и хотим поделиться с вами захватывающими новостями. Если вы впервые слышите о нашем тесте, не беспокойтесь — мы с удовольствием объясним, что это такое и почему вам стоит уделить ему время.</p>
                    <p class="style-text">Наш тест представляет собой уникальную возможность лучше узнать себя и свои способности. Он разработан, чтобы помочь вам осознать ваши сильные стороны, выявить области для развития и раскрыть свой потенциал для достижения успеха. Независимо от того, являетесь ли вы студентом, профессионалом или просто ищете новые пути в жизни, наш тест станет вашим надежным спутником на этом пути.</p>
                    <p class="style-text">Прохождение теста — это не просто развлечение, а ценный инструмент, который поможет вам лучше понять себя. Он даст вам представление о ваших интересах, ценностях и предпочтениях, что, в свою очередь, позволит принимать более осознанные решения в учебе, карьере и личной жизни. Тест поможет вам определить, что действительно важно для вас и какие шаги необходимо предпринять для достижения ваших целей.</p>
                    <p class="style-text">Кроме того, результаты теста могут стать отличным поводом для обсуждения с друзьями, коллегами или наставниками. Вы сможете поделиться своими открытиями и получить обратную связь, что только усилит ваш личностный рост.</p>
                    <p class="style-text">Не упустите возможность узнать больше о себе и сделать шаг к улучшению своей жизни! Пройдите наш тест и откройте для себя новые горизонты! Мы уверены, что вы найдете этот опыт увлекательным и полезным. Начните прямо сейчас и позвольте себе расти!</p>
                </div>
            </div>
            <div class="menu-right-button">
                <div class="info-menu-right">
                    <h1 class="style-text">Вы можете выбрать один из двух тестов</h1>
                </div>
                <div class="buttons-main">
                    <button>Простой тест</button>
                    <button>Углублённый тест</button>
                </div>
            </div>
        </div>
        <div class="botton-window">
            <div class="faq">
                инфа по канону
            </div>
        </div>
    </div>
</body>
</html>