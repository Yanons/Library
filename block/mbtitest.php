<!--echo '<pre>';
print_r($array); проверка массива
echo '</pre>';-->

<?php
include 'app/main.php';
require 'vendor/autoload.php';
use PostgreSQL\Connection;
$user = new ip_reg;
$message = new message;
$mbtiLite = new mbti_lite;

if($user->serch_id()){
    $id = $user->serch_id();
    $_SESSION['id'] =$id['id'];
}else{
    $_SESSION['id'] = $user->add_user();
}
if ($_SESSION['editlmb']){
    $mbtiLite->clear_resul($_SESSION['id']);
    unset($_SESSION['mbtitest']);
    unset($_POST['mbtitest']);
    unset($_SESSION['editlmb']);
    header("Location:/");
}
?>
<div class="main-test">
    <div class="center-test">
        <div class="left-test">
        <?php
            if (isset($_SESSION['otvet']))
            {
                $errlog = $message->savereturn($_SESSION['id'],$_SESSION['question'],$_SESSION['otvet']);
                if($errlog = "good"){
                    $info = $message->newmessage($_SESSION['id']);
                }
                $_SESSION['otvet']= null;
            }else{
                if($id['ending'] != 'end'){
                    $info = $message->newmessage($_SESSION['id']);
                }
            }
            if ($_SESSION['question']){
            ?>
            <div class="vopros-row fl-fc">
                <div class="vopros fl-fc">
                    <h1><?php echo $info['question'];?></h1>
                </div>
                <div class="otvety fl-fc">
                    <form action="app/return.php" method="POST">
                        <button name="otvet" type="submit" value="<?php echo $info['id_return_1'];?>" class="btn">Ответ Да</button>
                        <button name="otvet" type="submit" value="1" class="btn">Незнаю</button>
                        <button name="otvet" type="submit" value="<?php echo $info['id_return_2'];?>" class="btn">Ответ Нет</button>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="right-test"></div>
    </div>
 <?php }else{ 
    unset($_POST['otvet']);
    ?>
    <div class="center-test">
        <div class="left-test">
            <div class="vopros-row fl-fc">
                <div class="vopros fl-fc">
                    <h1><?php $reg = $mbtiLite->mbti_resul($_SESSION['id']);
                    echo '<pre>';
                    print_r($reg); 
                    echo '</pre>';?></h1>
                </div>
                <div class="otvety fl-fc">
                    <form action='app/return.php' method="POST">
                        <button name="editlmb" type="submit" value="1" class="btn">В главную</button>
                        <button name="editlmb" type="submit" value="2" class="btn">Очистить</button>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="right-test"></div>
    </div>

    <?php } ?>
</div>