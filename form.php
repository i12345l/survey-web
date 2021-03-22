<!DOCTYPE html>
<html>
<head>
    <title> 심리 테스트 설문조사 - AHSKNUE </title>
    <main charset = "utf-8"/>
    <script lang="javascript" src="javascript/main.js"></script>
    <script src="main.js">
    </script>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<form id = "test" action = "final.php" method = "POST" onsubmit="return false;">
    <span id = "Data" style = "display: none;">
        <?php
            
            $b = $_POST["Bloodtype"];
            $c = $_POST["Age"];
            $d = $_POST["Gender"];
            
            print('<input type = "text" name = "Bloodtype" value = "'.$b.'"/>');
            print('<input type = "text" name = "Age" value = "'.$c.'"/>');
            print('<input type = "text" name = "Gender" value = "'.$d.'"/>');

        ?>
    </span>
    <span id = "first" style = "display: block; visibility: visible;">
        <h2>당신의 성격유형은 어떤 것 인가요?</h2>
        <fieldset id="fieldss">
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
        </fieldset>
        <button type = "button" class = "next" onclick = "javascript: insert(); mbti();">Next</button>
    </span>
    <div id = "second" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 첫번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q1">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro7" value="1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro7" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro7" value="-1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <button type = "button" class = "next" onclick = "javascript: question1()"/>Next</button>
    </div>
    <div id = "third" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 두번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q2">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro1" value="1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro1" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro1" value="-1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <button type = "button" class = "next" onclick = "javascript: question2()"/>Next</button>
    </div>
    
    <div id = "fourth" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 세번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q3">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro2" value="-1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro2" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro2" value="1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <button type = "button" class = "next" onclick = "javascript: question3()"/>Next</button>
    </div>
    <div id = "fifth" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 네번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q4">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro3" value="1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro3" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro3" value="-1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <button type = "button" class = "next" onclick = "javascript: question4()"/>Next</button>
    </div>
    <div id = "sixth" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 다섯번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q5">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro4" value="-1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro4" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro4" value="1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <button type = "button" class = "next" onclick = "javascript: question5()"/>Next</button>
    </div>
    <div id = "seventh" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 여섯번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q6">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro5" value="1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro5" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro5" value="-1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <button type = "button" class = "next" onclick = "javascript: question6()"/>Next</button>
    </div>
    <div id = "eighth" style = "visibility: hidden; display: none;">
        <h2> 해당 성격유형의 일곱번째 특징입니다. <br/> 현재의 당신과 얼마나 일치한가요</h2>
        <table class = "q_table">
            <tr>
                <p id="q7">내용</p> 
            </tr>
        </table>
        <table>
            <tr>
                <td> <input type="radio" name="pro6" value="-1"/>일치한다. <br/></td>
                <td> <input type="radio" name="pro6" value="0"/>잘 모르겠다. <br/></td>
                <td> <input type="radio" name="pro6" value="1">일치하지 않는다. <br/></td>
            </tr>
        </table>
        <input hidden="hidden" />
        <input type = "submit"/>
    </div>
</form>
</body>
</html>