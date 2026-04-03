<?php
$account = "DC000001";
$password = "19961015";
?>

<html>
<head>
    <title>數位馬戲團_許可文件</title>
</head>
<body>
    <br/><br/><br/><br/><br/><br/>
    <center><h1>🕯 機密入場許可文件</h1></center>
    <table border="1" style="margin:auto; width:600px; text-align:left;">
    <tr>
        <td colspan="2" style="font-size:22px;">
            <font size="3">From: </font><b>Caine </b><font size="3">&ltcaine@digitalcircus.com&gt</font>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            恭喜你，<br/>
            你已被「選中」加入數位馬戲團夏令營🎪
            <p>
            登入帳號：<?php echo $account; ?><br/>
            登入密碼：<?php echo $password; ?>
            <p>
            ⚠ 請妥善保管此資，遺失後果自負
        </td>
    </table>
    <p>
    <center><button onclick=location.href="login.php" style="width: 150px; height:50px">前往登入</button></center>
</body>
</html>