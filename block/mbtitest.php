<div class="main-test">
    <div class="center-test">
        <div class="left-test">
            <?php 
            $array = array('Хули нам','Хули нам1','Хули нам2','Хули нам3');
            foreach($array as $var){
            ?>
            <div class="vopros-row fl-fc">
                <div class="vopros fl-fc">
                    <h1><?php echo $var ?></h1>
                </div>
                <div class="otvety fl-fc">
                    <form action='' method="POST">
                        <button name="otvet" type="submit" value="test1" class="btn">Ответ Да</button>
                        <button name="otvet" type="submit" value="test1" class="btn">Незнаю</button>
                        <button name="otvet" type="submit" value="test1" class="btn">Ответ Нет</button>
                    </form>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="right-test"></div>
    </div>
</div>