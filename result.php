<?php
    if(isset($_POST)){
        $skill=$_POST['skill'];
        echo '<img src="https://www.downloadclipart.net/large/reward-png-transparent-image.png" style="width: 15%;">';
        echo "<h1>Thx you ".$_POST['name'] . " !! </h1>";
        echo "<p>We recieved your application for the ".$_POST['club'];
        echo "<p>You are ". implode(" and ",$skill);
        
        echo "<p>You will be avaible on " . $_POST['date'];
    }


?>