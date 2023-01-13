<?php
echo "test";

$varTest = strlen('test');

$array = ["test1", "test2", "test3", "test4"];
echo $array[1];

for($i = 0; $i <= 3; $i++){
    echo $array[$i];
}
?>

<ul>
    <?php
    foreach ($array as $item){
        echo "<li>$item</li>";
    }
    ?>
</ul>