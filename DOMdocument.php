<?php
$doc=new DOMDocument();
$doc->load("Movies.xml");
$name=$doc->getElementsByTagName("movietitle");
$year=$doc->getElementsByTagName("year");
echo "Movie title";
foreach($name as $val)
{
echo "<br>".$val->textContent;}
echo "<br><br> Year";
foreach($year as $value)
{
echo "<br>".$value->textContent;
}
?>