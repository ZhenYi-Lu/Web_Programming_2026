<html>
<head>
    <title>錯誤</title>
</head>
<body>
    <?php
        $fID="DC000001";
        $fPWD="19961015";

        if(isset($_POST["uID"])&& isset($_POST["uPWD"])){
            $uID=$_POST["uID"];
            $uPWD=$_POST["uPWD"];

            if($fID==$uID && $fPWD==$uPWD){
                header("Location: form.php");
            }else{
                echo "帳號或密碼輸入錯誤";
                header("Refresh:2; url=login.php");
            }
        }
    ?>
</body>
</html>