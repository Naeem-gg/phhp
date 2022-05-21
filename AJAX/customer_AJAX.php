<!DOCTYPE html>
<html>
<style>
    th,
    td {
        padding: 5px;
    }
</style>

<body>
    <h2>The XMLHttpRequest Object</h2>
    <form action="">
        <select name="s" onchange="showCustomer(this.value)">
            <option value="">Select Teacher : </option>
            <option value="DJD">D. J. Deore</option>
            <option value="ADK">A. D. Kasliwal</option>
        </select>
    </form>
    <br>
    <div id="txtHint">Customer info will be listed here...</div>
    <script>
        function showCustomer(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            xhttp.open("GET", "ASG9B2.php?q=" + str);
            xhttp.send();
        }
    </script>
</body>

</html>

<?php
$s = $_GET['q'];
$con = pg_connect("host=localhost port=5432 user=postgres password=msgcs
dbname=ASG") or die("Fail to connect");
//$query = "SELECT * FROM cars LIMIT 5";
$query = "SELECT tno, tnm, qual, cont FROM teacher WHERE tnm=$s";
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
echo "<table>";
echo "<tr>";
echo "<th>CustomerlD</th>";
echo "<th>CompanyName</th>";
echo "<th>ContactName</th>";
echo "<th>Address</th>";
while ($row = pg_fetch_row($rs)) {
    echo "$row[0] $row[1] $row[2]\n";
    echo "<tr><td>" . $cid . "</td>";
    echo "<td>" . $cname . "</td>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $adr . "</td>";
    echo "</tr>";
}
echo "</table>";
?>