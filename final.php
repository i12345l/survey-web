<!DOCTYPE html>
<html>
<head>
    <title> 심리 테스트 설문조사 </title>
    <main charset = "utf-8"/>
    <script lang="javascript" src="javascript/main.js"></script>
    <script>
    </script>
</head>
<body>
    <?php
        $txt=$txt."\n";
        foreach ($_POST as $Key => $Value) {
            $txt=$txt." ".$Value;
        }
        $myfile = fopen("result.txt", "a");
        fwrite($myfile,$txt);
        fclose($myfile);
    ?>
    <p>설문에 참여해주셔서 감사합니다!</p>
</body>
</html>