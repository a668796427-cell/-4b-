<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>翁瑋聖簡介</title>
    <style type="text/css">
        /* 設定字體與標題顏色大小 */
        * { font-family: "標楷體"; margin-left: auto; margin-right: auto; }
        h1 { color: blue; font-size: 40pt; }
        h2 { color: #33ff33; font-size: 40px; }
        
        /* 讓表格置中顯示 */
        table { margin-left: auto; margin-right: auto; }
    </style>

    <script>
        // 滑鼠移入：換成山景與靜宜企管文字
        function change1() {
            document.getElementById("pic").src = "static/mountain.jpg";
            document.getElementById("h2text").innerText = "靜宜企管";
        }

        // 滑鼠移出：換回懸崖與英文名字
        function change2() {
            document.getElementById("pic").src = "static/cliff.jpg";
            document.getElementById("h2text").innerText = "Wei-sheng WENG";
        }
    </script>
</head>
<body>

    <div style="text-align: center;">
        <h1>歡迎 {{ name }} 蒞臨</h1>
    </div>

    <hr>

    <table width="70%">
        <tr>
            <td width="50%">
                <img src="static/cliff.jpg" width="100%" id="pic" onmouseover="change1()" onmouseout="change2()" alt="個人照片">
            </td>
            <td>
                <h1>翁瑋聖</h1>
                <h2 id="h2text">Wei-sheng WENG</h2>
            </td>
        </tr>
    </table>

    <br>

    <table width="90%" border="1" cellpadding="10">
        <tr>
            <td>
                <strong>個人網頁：</strong><br>
                <a href="about.html">點此查看關於我</a>
            </td>

            <td>
                <strong>電影配樂：</strong><br>
                <audio controls>
                    <source src="static/elephant.mp3" type="audio/mpeg">
                    您的瀏覽器不支援音頻播放。
                </audio>
            </td>

            <td>
                <strong>推薦影片：</strong><br>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/pW88QFpHXa8" frameborder="0" allowfullscreen></iframe>
            </td>
        </tr>
    </table>

</body>
</html>