<!DOCTYPE html>
<html>
<head>
    <title>심리 테스트 설문조사</title>
    <style>
        .noselect {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        body {
            width: 100%;
            height: 100%;
        }
        #test {
            position: relative;
            margin: 0px;
            padding-left: 2px;
            left: 25%;
            align-items: center;
            width: 50%;
            background-color: rgba(255, 255, 255, 255);
            height: 500px;
        }
        .next {
            float: right;
            top: 100%;
            bottom: 0px;
        }
        #show {
            border: 1px solid black;
            width: 400px;
            background-color: black;
        }
        tr {
            text-align: center;
            border: 1px solid black;
        }
        td p {
            text-align: center;
        }
        td {
            text-align: left;
            border: 1px solid black;
            background-color: white;
        }
    </style>
    <script>
        function test() {
            var A = document.getElementById("first");
            var B = document.getElementById("second");
            A.style.display = "none";
            A.style.visibility = "hidden";
            B.style.display = "block";
            B.style.visibility = "visible";
            
            var Advantages = document.getElementsByClassName("Advantage");
            for (var C of Advantages) {
                
            }
        }
    </script>
</head>
<body>
<form id = "test" action = "end.php" method = "POST">
    <span id = "Data" style = "display: block;">
        <?php
            $a = $_POST["Name"];
            $b = $_POST["Bloodtype"];
            $c = $_POST["Age"];
            $d = $_POST["Gender"];
            print('<input type = "text" name = "Name" value = "'.$a.'"/>');
            print('<input type = "text" name = "Bloodtype" value = "'.$b.'"/>');
            print('<input type = "number" name = "Age" value = "'.$c.'"/>');
            print('<input type = "text" name = "Name" value = "'.$d.'"/>');

        ?>
    </span>
    <span id = "Second" style = "display: block; visibility: visible;">
        <h2>당신의 성격유형은 어떤 것 인가요?</h2>
        <input type = "radio" name = "Personality" value = "ISTJ"/> ISTJ - 청렴결백한 논리주의자 <br/>
        <input type = "radio" name = "Personality" value = "ISFJ"/> ISFJ - 용감한 수호자 <br/>
        <input type = "radio" name = "Personality" value = "INFJ"/> INFJ - 선의의 옹호자 <br/>
        <input type = "radio" name = "Personality" value = "INTJ"/> INTJ - 용의주도한 전략가 <br/>

        <input type = "radio" name = "Personality" value = "ISTP"/> ISTP - 만능 재주꾼 <br/>
        <input type = "radio" name = "Personality" value = "ISFP"/> ISFP - 호기심 많은 예술가 <br/>
        <input type = "radio" name = "Personality" value = "INFP"/> INFP - 열정적인 중재자 <br/>
        <input type = "radio" name = "Personality" value = "INTP"/> INTP - 논리적인 사색가 <br/>

        <input type = "radio" name = "Personality" value = "ESTP"/> ESTP - 모험을 즐기는 사업가 <br/>
        <input type = "radio" name = "Personality" value = "ESFP"/> ESFP - 자유로운 영혼의 연예인 <br/>
        <input type = "radio" name = "Personality" value = "ENFP"/> ENFP - 재기발랄한 활동가 <br/>
        <input type = "radio" name = "Personality" value = "ENTP"/> ENTP - 뜨거운 논쟁을 즐기는 변론가 <br/>

        <input type = "radio" name = "Personality" value = "ESTJ"/> ESTJ - 엄격한 관리자 <br/>
        <input type = "radio" name = "Personality" value = "ESFJ"/> ESFJ - 사교적인 외교관 <br/>
        <input type = "radio" name = "Personality" value = "ENFJ"/> ENFJ - 정의로운 사회운동가 <br/>
        <input type = "radio" name = "Personality" value = "ENTJ"/> ENTJ - 대담한 통솔자 <br/>

        <button type = "button" class = "next" onclick = "javascript: test();">Next</button>
        <innput type = "submit"/>
    </span>
    <div id = "second" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 장점과 단점입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table id = "show">
            <tr>
                <td class = "B">
                    <p>장점</p>
                </td>
                <td class = "B">
                    <p>단점</p>
                </td>
            </tr>
            <tr>
                <td class = "A" id = "Advantage">
                    <li class = "Advantage"></li>
                </td>
                <td class = "A" id = "DisAdvantage">

                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td> 매우 일치한다. </td>
                <td> 약간 일치한다. </td>
                <td> 반반이다 </td>
                <td> 일치하지 않는다. </td>
                <td> 전혀 일치하지 않는다. </td>
            </tr>
        </table>
        <input type = "button" id = "Sure5" onclick = "javascript: change('Sure5')"/>
    </div>
</form>
</body>
</html>
