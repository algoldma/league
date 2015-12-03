<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of simulate
 *
 * @author GoldDust_Au
 */
print '<html>';
print '<body>';

print "<section id=leftChamp style='float:left; margin-left:25%'>";

print $_GET["lstChampions1"];
$item11 =  $_GET["1lstItems1"];
$item12 =  $_GET["1lstItems2"];
$item13 =  $_GET["1lstItems3"];
$item14 =  $_GET["1lstItems4"];
$item15 =  $_GET["1lstItems5"];
$item16 =  $_GET["1lstItems6"];
//health
$i=1;
while($i<7){
    //$query = "SELECT fldHealth FROM tblItems WHERE fldItemName LIKE " . $item1.$i;
    $item = ${$item1.$i};
    $i++;
}
echo ${$item1.$i};
//magic resists

//health regen

//armor

//attack damage

//critical strike

//attack speed

//life steal

//ability power

//cdr

//mana

//mana regen

//movement


print "</section><section id=rightChamp style='float:right; margin-right:25%'>";

print $_GET["lstChampions2"];
$item21 =  $_GET["2lstItems1"];
$item22 =  $_GET["2lstItems2"];
$item23 =  $_GET["2lstItems3"];
$item24 =  $_GET["2lstItems4"];
$item25 =  $_GET["2lstItems5"];
$item26 =  $_GET["2lstItems6"];
//health

//magic resist

//health regen

//armor

//attack damage

//critical strike

//attack speed

//life steal

//ability power

//cdr

//mana

//mana regen

//movement


print"</section>";

print '</body>';
print '</html>';


?>
