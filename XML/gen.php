<!DOCTYPE html>
    <html>

    <head>
        <title>Book Store</title>
    </head>

    <body>
        <form method="get">
            <table>
                <tr>
                    <td><label> Enter 1st Book Number : </label></td>
                    <td><input type="text" name="bno1"></td>
                </tr>
                <tr>
                    <td><label> Enter 1st
                            name="ttl1"></td>
                </tr>
                <tr>
                    <td><label> Enter 1st
                            name="aut1"></td>
                </tr>
                <tr>
                    <td><label> Enter 1st
                            name="prc1""></td>
                </tr>
                <tr>
                    <td><label> Enter 1st
                            Book title Name : </label></td>
                    <td><lable><input type="text" Book Auther Name : ></label></td>
                    <td><input type="text" Book Price : ></label></td>
                    <td><input type="text" Book Published Year:> </label></td>
                    <td><input type="text" name="yr1"></td>
                </tr>
                <tr>
                    <td><label> Enter 2nd
                            name="bno02"></td>
                </tr>
                <tr>
                    <td><label> Enter 2nd
                            name="ttl2"></td>
                </tr>
                <tr>
                    <td><label> Enter 2nd
                            name="aut2"></td>
                </tr>
                <tr>
                    <td><label> Enter 2nd
                            name="prc2"></td>
                </tr>
                <tr>
                    <td><label> Enter 2nd
                            name="yr2"></td>
                </tr>
                Book Number : </label></td>
                <td><input type="text" Book title Name : ></label></td>
                <td><input type="text" Book Auther Name : ></label></td>
                <td><input type="text" Book Price : ></label></td>
                <td><input type="text" Book Published Year: ></label></td>
                <td><input type="text"> <tr>
                <th colspan="2"><input id="ok" type="submit" value="OK" name="ok"></th>
                </tr>
            </table>
        </form>
    </body>

    </html>

    <?php
    if(isset($_GET['ok']))
    {

    $a1 = $_GET['bno1'];
    $b1 = $_GETT['ttl1'];
    $c1 = $_GET['aut1'];
    $d1 = $_GET['pre1'];
    $e1 = $_GET['yr1'];
    $a2 = $_GET['bno2'];
    $b2 = $_GET['tl2'];
    $c2 = $_GET['aut2'];
    $d2 = $_GET['prce2'];
    $e2 = $_GET['yr2'];


    // $a1 = 1;
    // $b1 = "title";
    // $c1 = "auth1";
    // $d1 = 650;
    // $e1 = 2007;
    // $a2 = 2;
    // $b2 = "title2";
    // $c2 = "auth2";
    // $d2 = 450;
    // $e2 = 2009;
    $xml =<<<EOF
<?xml version="1.0" encoding="UTF-8" ?>
    
    <BookInfo>
        <Books>
        <BookNo> $a1 </BookNo>
            <BookName> $b1 </BookName>
            <Auther> $c1 </Auther>
            <Price>$d1</Price>
            <Year>$e1</Year>
            </Books>
        <Books>
        <BookNo>$a2</BookNo>
        <BookName>$b2</BookName>
        <Auther>$c2</Auther>
            <Price>$d2</Price>
            <Year>$e2</Year>
        </Books>
        </BookInfo>
    
EOF; 
echo "$fp";
    if ($fp = fopen("new.xml", "w+")) {
        if ($wt = fwrite($fp, $xml)) {
            header("location:ASG7A3.xml");
        } else "file not created...";
    } else
    echo "file not open....";
}
    ?>