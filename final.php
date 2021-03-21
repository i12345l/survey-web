<!DOCTYPE html>
<html>
<head>
    <title> 심리 테스트 설문조사 </title>
    <main charset = "utf-8"/>
    <script lang="javascript" src="javascript/main.js"></script>
    <script>
        function Check(){
            var A = document.getElementsByTagName("label");
            A[0].style.color="red";
        }
    </script>
</head>
<body>
    <?php
        foreach ($_POST as $Key => $Value) {
            $txt=$txt.",".$Value;
            print('<input type = "text" name = "'.$Key.'" value = "'.$Value.'" style = "display: block; visibility: visible;"/>');
        }
        $myfile = fopen("result.txt", "w");
        fwrite($myfile,$txt);
        fclose($myfile);
    ?>
</body>
</html>