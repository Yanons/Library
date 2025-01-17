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
        margin: 5px 50px 5px 50px;
        height: auto;
        width: auto;
    }
    .up-window{
        display: flex;
        align-items:center;
        justify-content: space-between;
        height: 5%;
        width: auto;
    }
    .center{
        display: flex;
        height: 90%;
        width: auto;
    }
    .botton-window{
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
        height: auto;
        width: 70%;
        padding:3%;
        background-color:rgb(240, 240, 240);
        border: 0px solid #fff;
	    border-radius: 50px 0 0 50px;
    }
    .menu-right-button{
        height: auto;
        width: 30%;
        border: 0px solid #fff;
	    border-radius: 0 50px 50px 0;
    }
    .style-text{
        font-family: "Arimo";
    }
    .style-title{
        font-family: "Arimo-BoldItalic";
    }
    .info-menu-right{
        position: absolute;
        top: 35%;
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
    .size-font{
        font-size: 20;
    }
    .size-font-big{
        font-size: 40;
    }
    .btn {
	display: inline-block;	
	box-sizing: border-box;
	padding: 0 25px;
	margin: 0 15px 15px 0;
	outline: none;
	border: 0px solid #fff;
	border-radius: 5px;
	height: 46px;
	line-height: 46px;
	font-size: 14px;
	font-weight: 600;
	text-decoration: none;
	color: #444;
	background-color: #fff;
	box-shadow: 0 4px 6px rgb(65 132 144 / 10%), 0 1px 3px rgb(0 0 0 / 8%);
	cursor: pointer;
	user-select: none;
	appearance: none;
	touch-action: manipulation;  
	vertical-align: top;
	transition: box-shadow 0.2s;
}
.btn:focus-visible {
	border: 1px solid #4c51f9;
	outline: none;
}
.btn:hover {
	transition: all 0.2s;
	box-shadow: 0 7px 14px rgb(65 132 144 / 10%), 0 3px 6px rgb(0 0 0 / 8%);
}
.btn:active {
	background-color: #808080;
}
.btn:disabled {
	background-color: #eee;
	border-color: #eee;
	color: #444;
	cursor: not-allowed;
}
.con-img-fon {
  background-image: url('img/fon.jpg');
  background-repeat: repeat;
}
.color-white{
    color:white;
}
.marg-top{
    margin-top:10%;
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
                <h1 class="style-text">MBTI-test</h1>
            </div>
            <div class="menu">
                <button class="marg-top btn">Профиль</button>
            </div>
        </div>
        <hr>
        <div class="center">
            <div class="menu-left-text">
                <div class="title-info">
                    <h1 class="size-font-big style-title">Познай себя: Пройди тест и открой новые горизонты!</h1>
                    <hr>
                </div>
                <div class="main-info">
                    <p class="size-font style-text">Добро пожаловать на наш сайт! Мы с радостью приветствуем вас и хотим поделиться с вами захватывающими новостями. Если вы впервые слышите о нашем тесте, не беспокойтесь — мы с удовольствием объясним, что это такое и почему вам стоит уделить ему время.</p>
                    <p class="size-font style-text">Наш тест представляет собой уникальную возможность лучше узнать себя и свои способности. Он разработан, чтобы помочь вам осознать ваши сильные стороны, выявить области для развития и раскрыть свой потенциал для достижения успеха. Независимо от того, являетесь ли вы студентом, профессионалом или просто ищете новые пути в жизни, наш тест станет вашим надежным спутником на этом пути.</p>
                    <p class="size-font style-text">Прохождение теста — это не просто развлечение, а ценный инструмент, который поможет вам лучше понять себя. Он даст вам представление о ваших интересах, ценностях и предпочтениях, что, в свою очередь, позволит принимать более осознанные решения в учебе, карьере и личной жизни. Тест поможет вам определить, что действительно важно для вас и какие шаги необходимо предпринять для достижения ваших целей.</p>
                    <p class="size-font style-text">Кроме того, результаты теста могут стать отличным поводом для обсуждения с друзьями, коллегами или наставниками. Вы сможете поделиться своими открытиями и получить обратную связь, что только усилит ваш личностный рост.</p>
                    <p class="size-font style-text">Не упустите возможность узнать больше о себе и сделать шаг к улучшению своей жизни! Пройдите наш тест и откройте для себя новые горизонты! Мы уверены, что вы найдете этот опыт увлекательным и полезным. Начните прямо сейчас и позвольте себе расти!</p>
                </div>
            </div>
            <div class="menu-right-button con-img-fon">
                <div class="info-menu-right">
                    <h1 class="size-font-big style-text color-white">Вы можете выбрать один из двух тестов</h1>
                </div>
                <div class="buttons-main">
                    <button class="btn">Простой тест</button>
                    <button class="btn">Углублённый тест</button>
                </div>
            </div>
        </div>
        <div class="botton-window">
            <div class="faq">
            <p class="style-text">2025 MBTI testing / mbti тестирование</p>
            <hr>
            <p class="style-text">Данный сайт предназначен исключительно для образовательных и развлекательных целей. Он не имеет коммерческой составляющей и не предназначен для оскорбления или унижения кого-либо.</p>
            <p class="style-text">Этот сайт создал Янон. Вы можете связаться с ним в Telegram: <a href="https://t.me/deyanon">ссылка</a></p>
            </div>
        </div>
    </div>
</body>
</html>