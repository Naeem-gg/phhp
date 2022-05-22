<?php
                        $fp = fopen('contact.dat', 'r');
                        echo "<table border=1 style=text-align:center;>";
                        echo "<tr><th>Sr. No.</th><th>Name</th><th>Residence No.</th><th>Mob. no.</th><th>Relation</th></tr>";

                        while ($row = fgets($fp))
                         {
                            echo "<tr>";
                            $sep=explode(" ",$row);
                            foreach ($sep as $r) {
                                echo "<td>$r</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                        fclose($fp);
?>