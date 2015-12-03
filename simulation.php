<?php
include ("top.php");
include ("header.php");
include ("nav.php");

//---------------------------------------------------------------------//
//                                                                     //
//                                                                     //
//                                                                     //                                                                     //
//                             Champion #1                             //
//                                                                     //
//                                                                     //
//                                                                     //
//---------------------------------------------------------------------//

print '<form class = "pure-form pure-form-aligned" id = "formChampionSelect" action="simulate.php" method="get">';
print '<fieldset id = "champSelectOne"> ';
print '<legend>Champion #1</legend> ';

//---------------------------------------------------------------------//
//                        Champion #1 Selection                        //
//---------------------------------------------------------------------//

$champion = "Aatrox";

$query = 'SELECT fldChampionName ';
$query .= 'FROM tblChampions ';
$query .= 'ORDER BY fldChampionName';

$champions = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstChampions1">Champion Name : ';
print '<select id="lstChampions1" ';
print '        name="lstChampions1"';
print '        tabindex="300" >';

foreach ($champions as $row) {

    print '<option ';
    if ($champion == $row["fldChampionName"])
        print " selected='selected' ";

    print 'value="' . $row["fldChampionName"] . '">' . $row["fldChampionName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #1                       //
//---------------------------------------------------------------------//

$item = "None";

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="1lstItems1">Item #1 : ';
print '<select id="1lstItems1" ';
print '        name="1lstItems1"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #2                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="1lstItems2">Item #2 : ';
print '<select id="1lstItems2" ';
print '        name="1lstItems2"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #3                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="1lstItems3">Item #3 : ';
print '<select id="1lstItems3" ';
print '        name="1lstItems3"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #4                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="1lstItems4">Item #4 : ';
print '<select id="1lstItems4" ';
print '        name="1lstItems4"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #5                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="1lstItems5">Item #5 : ';
print '<select id="1lstItems5" ';
print '        name="1lstItems5"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #6                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="1lstItems6">Item #6 : ';
print '<select id="1lstItems6" ';
print '        name="1lstItems6"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';
print '</fieldset>';



//---------------------------------------------------------------------//
//                                                                     //
//                                                                     //
//                                                                     //                                                                     //
//                             Champion #2                             //
//                                                                     //
//                                                                     //
//                                                                     //
//---------------------------------------------------------------------//




print '<fieldset id = "champSelectTwo"> ';
print '<legend>Champion #2</legend> ';

//---------------------------------------------------------------------//
//                        Champion #2 Selection                        //
//---------------------------------------------------------------------//

$champion = "Aatrox";

$query = 'SELECT fldChampionName ';
$query .= 'FROM tblChampions ';
$query .= 'ORDER BY fldChampionName';

$champions = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstChampions2">Champion Name : ';
print '<select id="lstChampions2" ';
print '        name="lstChampions2"';
print '        tabindex="300" >';

foreach ($champions as $row) {

    print '<option ';
    if ($champion == $row["fldChampionName"])
        print " selected='selected' ";

    print 'value="' . $row["fldChampionName"] . '">' . $row["fldChampionName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #1                       //
//---------------------------------------------------------------------//

$item = "None";

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="2lstItems1">Item #1 : ';
print '<select id="2lstItems1" ';
print '        name="2lstItems1"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #2                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="2lstItems2">Item #2 : ';
print '<select id="2lstItems2" ';
print '        name="2lstItems2"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #3                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="2lstItems3">Item #3 : ';
print '<select id="2lstItems3" ';
print '        name="2lstItems3"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #4                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="2lstItems4">Item #4 : ';
print '<select id="2lstItems4" ';
print '        name="2lstItems4"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #5                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="2lstItems5">Item #5 : ';
print '<select id="2lstItems5" ';
print '        name="2lstItems5"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #6                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="2lstItems6">Item #6 : ';
print '<select id="2lstItems6" ';
print '        name="2lstItems6"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';
print '</fieldset>';

print '<button type="submit" class="pure-button pure-button-primary">Submit</button>';

print '</form>';




include ("footer.php");
?>

</body>
</html>