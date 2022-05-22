
<?php
$var=simplexml_load_file("gen.xml") or die("can't open file");
echo "<table border=1>";
echo "<tr>
<td>bookno</td>
<td>bookname</td>
<td>authername</td>
<td>price</td>
<td>year</td>
</tr>";
foreach($var->children() as $v)
{
    echo "<tr>
    <td>$v->bookno</td>
    <td>$v->bookname</td>
    <td>$v->authorname</td>
    <td>$v->price</td>
    <td>$v->year</td>

    </tr>";
}
echo"</table>";
?>