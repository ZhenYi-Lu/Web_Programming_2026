<html>
<head>
    <title>數位馬戲團_資料確認</title>
</head>
<body> 
    <center><h1>請確認以下資料是否正確</h1></center>
    <p>
    <table border="1" width="800" style="margin:auto; text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center; font-size:24px">📌 基本資料</th>
        </tr>
        <tr>
            <th width="400">姓名</th>
            <td><?php 
                    echo $_POST["nName"]; 
                ?>
            </td>
        </tr>
        <tr>
            <th>性別</th>
            <td><?php 
                    $nGender=$_POST["nGender"];
                    if($nGender=="m") echo "Male";
                    else if($nGender=="f") echo "Female";
                ?>
            </td>
        </tr>
        <tr>
            <th>出生日期</th>
            <td><?php 
                    echo $_POST["nDate"]
                ?>
            </td>
        </tr>
        <tr>
            <th>連絡電話</th>
            <td><?php 
                    echo $_POST["nNumber"]
                ?>
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php 
                    echo $_POST["nEmail"]
                ?>
            </td>
        </tr>
        <tr>
            <th>學校/年級</th>
            <td><?php 
                    echo $_POST["nSchool"]."/".$_POST["nGrade"];
                ?>
            </td>
        </tr>
        <tr>
            <th colspan="2" style="text-align:center; font-size:24px">🎭 馬戲團設定</th>
        </tr>
        <tr>
            <th>如果你進入數位馬戲團，你覺得自己會是？</th>
            <td><?php 
                    $character=$_POST["character"];
                    switch($character){
                        case "clown";
                            echo "🤡 小丑";
                            break;
                        case "magician";
                            echo "🎩 魔術師";
                            break;
                        case "acrobat";
                            echo "🎪 雜技演員";
                            break;
                        case "audience";
                            echo "👁 觀眾";
                            break;
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>面對未知與混亂，你的反應是？（複選）</th>
            <td><?php 
                    $reaction=$_POST["reaction"];
                    foreach($reaction as $i){
                        switch($i){
                            case "1";
                                echo "▪️享受它";
                                break;
                            case "2";
                                echo "▪️試圖控制";
                                break;
                            case "3";
                                echo "▪️找出口";
                                break;
                            case "4";
                                echo "▪️假裝沒事";
                                break;
                            case "5";
                                echo "▪️……我本來就是混亂";
                                break;    
                        }
                        echo "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>你是否能接受「不完全合理」的任務挑戰？</th>
            <td><?php 
                    echo $_POST["acceptability"];
                ?>
            </td>
        </tr>
        <tr>
            <th colspan="2" style="text-align:center; font-size:24px">🧩 參與動機</th>
        </tr>
        <tr>
            <th>你為什麼想加入這個夏令營？</th>
            <td><?php 
                    echo nl2br($_POST["why"]);
                ?>
            </td>
        </tr>
        <tr>
            <th>你希望在這裡獲得什麼？</th>
            <td><?php 
                    echo nl2br($_POST["what"]);
                ?>
            </td>
        </tr>
    </table>
    <p>
    <center>
        <button onclick=location.href="ticket.php" style="width: 150px; height:50px">確認，領入場券</button>
        <button onclick="history.back()" style="width: 150px; height:50px">有誤，回上一頁</button>
    </center>
</body>
</html>
