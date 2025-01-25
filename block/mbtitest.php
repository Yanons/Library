<?php
include 'app/main.php';
require 'vendor/autoload.php';
use PostgreSQL\Connection;
?>
<div class="main-test">
    <div class="center-test">
        <div class="left-test">
            <?php
            
            if (isset($_POST['otvet']))
            {
                $errlog = \FunctionMbti\message::savereturn(123,$_SESSION['question'],$_POST['otvet']);
                if($errlog = "good"){
                    $info = \FunctionMbti\message::newmessage($_SESSION['question']+1);
                    $_SESSION['question'] = $info[id];
                }
            }else{
                $info = \FunctionMbti\message::newmessage(1);
                $_SESSION['question'] = $info[id];
            }
            ?>
            <div class="vopros-row fl-fc">
                <div class="vopros fl-fc">
                    <h1><?php echo $info['question'];?></h1>
                </div>
                <div class="otvety fl-fc">
                    <form action='' method="POST">
                        <button name="otvet" type="submit" value="<?php echo $info['id_return_1'];?>" class="btn">Ответ Да</button>
                        <button name="otvet" type="submit" value="1" class="btn">Незнаю</button>
                        <button name="otvet" type="submit" value="<?php echo $info['id_return_2'];?>" class="btn">Ответ Нет</button>
                    </form>
                </div>
            </div>
            <?php ?>
        </div>
        <div class="right-test"></div>
    </div>
</div>