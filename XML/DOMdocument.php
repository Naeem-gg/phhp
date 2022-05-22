<?php
$dom= new DOMDocument;
$x=$dom->load("Movies.xml") or die("Unable to load xml");
if($x)
{
    $title=$dom->getElementsByTagName("movietitle");
    $name=$dom->getElementsByTagName("actorname");
    echo "title<br><br>";
    foreach($title as $t)
    {
        echo"<br>";
        echo $t->textContent;
    }
    echo "<br><br>name";
    foreach($name as $n)
    {
        echo "<br>";
        echo $n->textContent;
    }
}
?>