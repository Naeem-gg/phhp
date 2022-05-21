
<?php
$xml=simplexml_load_file("gen.xml") or die("eror:cannot create object");
echo "<table border=1 align=center>";
echo "<tr><td>Book No.</td><td>Book Name</td><td>Book
Auther</td><td>Price</td><td>Year</td></tr>";
foreach($xml->children() as $x)
{

echo"<tr><td>".$x->bookno."</td>";
echo"<td>".$x->bookname."</td>";
echo"<td>".$x->authorname."</td>";
echo"<td>".$x->price."</td>";
echo "<td>".$x->year."</td></tr>";
}
echo "<table>";
?>