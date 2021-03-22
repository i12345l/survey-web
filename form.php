<!DOCTYPE html>
<html>
<head>
    <title> 심리 테스트 설문조사 </title>
    <main charset = "utf-8"/>
    <script lang="javascript" src="javascript/main.js"></script>
    <script src="main.js">
    </script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script>
        function test() {
            var A = document.getElementById("Second");
            var B = document.getElementById("second");
            A.style.display = "none";
            A.style.visibility = "hidden";
            B.style.display = "block";
            B.style.visibility = "visible";
            
            var Advantages = document.getElementsByClassName("Advantage");
            for (var C of Advantages) {
                C.style.display="block";
                C.style.visibility="visible";
            }
        }
        function question1() {
            var A = document.getElementById("second");
            var B = document.getElementById("third");
            A.style.display = "none";
            A.style.visibility = "hidden";
            B.style.display = "block";
            B.style.visibility = "visible";
            
            var Advantages = document.getElementsByClassName("Advantage");
            for (var C of Advantages) {
                C.style.display="block";
                C.style.visibility="visible";
            }
        }
        function question2() {
            var A = document.getElementById("third");
            var B = document.getElementById("fourth");
            A.style.display = "none";
            A.style.visibility = "hidden";
            B.style.display = "block";
            B.style.visibility = "visible";
            
            var Advantages = document.getElementsByClassName("Advantage");
            for (var C of Advantages) {
                C.style.display="block";
                C.style.visibility="visible";
            }
        }
    </script>
</head>
<body>
<form id = "test" action = "final.php" method = "POST">
    <span id = "Data" style = "display: block;">
        <?php
            $a = $_POST["Name"];
            $b = $_POST["Bloodtype"];
            $c = $_POST["Age"];
            $d = $_POST["Gender"];
            print('<input type = "text" name = "Name" value = "'.$a.'"/>');
            print('<input type = "text" name = "Bloodtype" value = "'.$b.'"/>');
            print('<input type = "text" name = "Age" value = "'.$c.'"/>');
            print('<input type = "text" name = "Gender" value = "'.$d.'"/>');

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

        <button type = "button" class = "next" onclick = "javascript: test(),mbti();">Next</button>
    </span>
    <div id = "second" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 장점입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table id = "show">
            <tr class = "B">
                    <p>장점</p>
            </tr>
            <tr>
                <h1>내용</h1>
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="advantage" value="correct"/>일치한다. <br/></td>
                <td> <input type="radio" name="advantage" value="midium"/>보통이다. <br/></td>
                <td> <input type="radio" name="advantage" value="incorrect">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <input type = "button" id = "next" onclick = "javascript: question1()"/>next</button>
    </div>
    <div id = "third" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형 단점입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table id = "show">
            <tr class = "B">
                <p>단점</p>
            </tr>
            <tr>
                <p>내용</p>
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="weakness" value="correct"/>일치한다. <br/></td>
                <td> <input type="radio" name="weakness" value="midium"/>보통이다. <br/></td>
                <td> <input type="radio" name="weakness" value="incorrect">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <input type = "button" id = "next" onclick = "javascript: question2()"/>next</button>
    </div>
    <div id = "fourth" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 연인관계입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table id = "show">
            <tr class = "B">
                <p>연인관계</p>
            </tr>
            <tr>
                <p>내용</p>
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="love" value="correct"/>일치한다. <br/></td>
                <td> <input type="radio" name="love" value="midium"/>보통이다. <br/></td>
                <td> <input type="radio" name="love" value="incorrect">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <input type = "submit"/>
    </div>
</form>
</body>
</html>