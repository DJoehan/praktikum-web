<!DOCTYPE html>
<html>
        <head>
                <title>Menciptakan Tabel</title>
        </head>

        <body>
                <?php
                        require_once './koneksi.php';

                        $db = 'myweb';

                        $res = mysql_query('CREATE DATABASE ' . $db);
                        if($res){
                                echo 'Database ' .$db. ' Created';
                                mysql_close($res);
                        } else {
                                echo mysql_error();
                        }
        
                ?>
</body>
</html>