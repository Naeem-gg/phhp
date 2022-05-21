<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate an xml in php</title>
</head>
<body>
    <?php
    $xml=<<<EOF
    <?xml version="1.0" encoding="UTF-8" ?>
                    <Bookinfo>
                        <book>
                                <bookno>1</bookno>
                                <bookname>JAVA</bookname>
                                <authorname>Balguru Swami</authorname>
                                <price>250</price>
                                <year>2006</year> 
                        </book>
                        <book>
                                <bookno>2</bookno>
                                <bookname>C</bookname>
                                <authorname>Denis Ritchie</authorname>
                                <price>500</price>
                                <year>1971</year>
                         </book>
                    </Bookinfo>
                         
                         
                
    EOF;
            $f=fopen("gen.xml","w+");
            $x=fwrite($f,$xml) or die("unable to write data");
            if($x)
            {
                header("Location:gen.xml");
            }
            
    ?>
</body>
</html>