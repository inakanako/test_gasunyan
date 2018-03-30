<?php
/**
 * Created by PhpStorm.
 * User: nako
 * Date: 2018/03/30
 * Time: 16:18
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>伊奈のページ</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        //ロードが終わったら実行
        var i = 0
        $(() => {
            setInterval(ando, 1000)
        });

        function ando() {
            $("#box").append("<a>ando</a>")
            i++
            if (i > 10) {
                $("#box").empty()
            }
        }

        hairetu = [0, 1, 2, 3, 4, 5]
        hairetu[1]

        rensou = {
            "name": "ando",
            "age": 21,
            "sex": "man"
        }

        rensou["name"]
    </script>
</head>
<body>
<div id="box"></div>
</html>