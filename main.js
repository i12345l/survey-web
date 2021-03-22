function mbti() {
    var obj_length = document.getElementsByName("Personality").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("Personality")[i].checked == true) {
            var mbti=document.getElementsByName("Personality")[i].value;
        }
    }
if(mbti!=undefined){
    var A = document.getElementById("first");
var B = document.getElementById("second");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
if(mbti=="INTP"){
    document.getElementById("q1").innerHTML = "나는 아이디어가 많다.";
    document.getElementById("q2").innerHTML = "나는 창의적이다.";
    document.getElementById("q3").innerHTML = "나는 나의 의견보다 다른 사람의 의견을 더 신경 쓴다.";
    document.getElementById("q4").innerHTML = "나는 모든 일에 열정적이다.";
    document.getElementById("q5").innerHTML = "나는 관찰력이 좋다.";
    document.getElementById("q6").innerHTML = "나는 규칙을 잘 지킨다.";
    document.getElementById("q7").innerHTML = "나는 어색한 상황에서 먼저 말을 거는 편이다.";
}
else if(mbti=="INTJ"){
    document.getElementById("q1").innerHTML = "나는 이성적이다.";
    document.getElementById("q2").innerHTML = "나는 체계적인 것을 중요시한다.";
    document.getElementById("q3").innerHTML = "나는 의욕적이고 활동적이다.";
    document.getElementById("q4").innerHTML = "나는 완벽주의자이다.";
    document.getElementById("q5").innerHTML = "나는 여러가지 일에 관심이 있다.";
    document.getElementById("q6").innerHTML = "나는 분석하는 것을 잘한다.";
    document.getElementById("q7").innerHTML = "나는 어떤 작업을 할 때 효율성을 따진다.";
}
else if(mbti=="INFJ"){
    document.getElementById("q1").innerHTML = "나는 창의성이 뛰어난 사람이다.";
    document.getElementById("q2").innerHTML = "나는 다른 사람들의 습관을 빨리 발견하는 편이다.";
    document.getElementById("q3").innerHTML = "나는 거짓말을 싫어한다.";
    document.getElementById("q4").innerHTML = "나는 친구들의 고민을 열심히 듣는다.";
    document.getElementById("q5").innerHTML = "나는 비판에 쉽게 화를 낸다.";
    document.getElementById("q6").innerHTML = "나는 어지러운 환경을 싫어한다.";
    document.getElementById("q7").innerHTML = "나는 과제를 끝까지 미룬다.";
}
else if(mbti=="INFP"){
    document.getElementById("q1").innerHTML = "나는 다른 사람의 마음을 먼저 생각한다.";
    document.getElementById("q2").innerHTML = "나는 친구의 말에 쉽게 상처받는다.";
    document.getElementById("q3").innerHTML = "나는 규율을 잘 지킨다.";
    document.getElementById("q4").innerHTML = "나는 새로운 아이디어를 좋아한다.";
    document.getElementById("q5").innerHTML = "나는 나보다 다른 사람을 우선시 여긴다.";
    document.getElementById("q6").innerHTML = "나는 감정적이지 않다.";
    document.getElementById("q7").innerHTML = "나는 쉽게 들뜬다.";
}
else if(mbti=="ISTJ"){
    document.getElementById("q1").innerHTML = "나는 돌려 말하지 않는다.";
    document.getElementById("q2").innerHTML = "나는 나의 의지대로 행동한다.";
    document.getElementById("q3").innerHTML = "나는 다른 사람의 일에 관심이 없다.";
    document.getElementById("q4").innerHTML = "나는 일과 휴식의 구분이 확실하다.";
    document.getElementById("q5").innerHTML = "나는 방 안이 흐트러져도 참을 수 있다.";
    document.getElementById("q6").innerHTML = "나는 참을성이 있다.";
    document.getElementById("q7").innerHTML = "나는 나의 감을 믿는다.";
}
else if(mbti=="ISFJ"){
    document.getElementById("q1").innerHTML = "나는 힘든 사람을 보면 돕는다.";
    document.getElementById("q2").innerHTML = "나는 다른 사람들의 말에 잘 속는 편이다.";
    document.getElementById("q3").innerHTML = "나는 생각하고 말한다.";
    document.getElementById("q4").innerHTML = "나는 열정적이다.";
    document.getElementById("q5").innerHTML = "나는 성취욕이 높다.";
    document.getElementById("q6").innerHTML = "나는 나의 행동에 자신감이 많다.";
    document.getElementById("q7").innerHTML = "나는 변화를 싫어한다.";
}
else if(mbti=="ISTP"){
    document.getElementById("q1").innerHTML = "나는 낙천적이다.";
    document.getElementById("q2").innerHTML = "나는 일을 할 때 실용성을 강조한다.";
    document.getElementById("q3").innerHTML = "나는 화를 잘 낸다.";
    document.getElementById("q4").innerHTML = "나는 의견을 굽히지 않는다.";
    document.getElementById("q5").innerHTML = "나는 변화에 민감하다.";
    document.getElementById("q6").innerHTML = "나는 친구들과 노는 것이 좋다.";
    document.getElementById("q7").innerHTML = "나는 모든 일이 재밌다.";
} 
else if(mbti=="ISFP"){
    document.getElementById("q1").innerHTML = "나는 화를 잘 참는다.";
    document.getElementById("q2").innerHTML = "나는 가능성을 다양하게 열어두는 편이다.";
    document.getElementById("q3").innerHTML = "나는 감정에 치우치지 않는다.";
    document.getElementById("q4").innerHTML = "나는 호기심이 많다.";
    document.getElementById("q5").innerHTML = "나는 자유로운 것을 좋아한다.";
    document.getElementById("q6").innerHTML = "나는 내일 할 것을 미리 생각한다.";
    document.getElementById("q7").innerHTML = "나는 화를 잘 참는다.";
}
else if(mbti=="ENTJ"){
    document.getElementById("q1").innerHTML = "나에게 효율은 그 무엇보다 중요하다.";
    document.getElementById("q2").innerHTML = "나는 리더쉽이 뛰어나다.";
    document.getElementById("q3").innerHTML = "나는 인정이 많다.";
    document.getElementById("q4").innerHTML = "나는 자기애가 강하다.";
    document.getElementById("q5").innerHTML = "나는 참을성이 뛰어나다.";
    document.getElementById("q6").innerHTML = "나는 카리스마가 넘친다.";
    document.getElementById("q7").innerHTML = "나는 다른 친구들의 의견을 잘 들어주는 편이다.";
}
else if(mbti=="ENTP"){
    document.getElementById("q1").innerHTML = "나는 상상력이 뛰어나다.";
    document.getElementById("q2").innerHTML = "나는 일 없이는 살지 못한다.";
    document.getElementById("q3").innerHTML = "나는 집중력이 뛰어나다.";
    document.getElementById("q4").innerHTML = "나는 내가 정직하고 공정한 편이라고 생각한다.";
    document.getElementById("q5").innerHTML = "나는 자신감이 약한 편이다.";
    document.getElementById("q6").innerHTML = "나는 긍정적인 에너지를 가지고 있다고 생각한다.";
    document.getElementById("q7").innerHTML = "나는 일상적인 일을 하는 것을 좋아한다.";
}
else if(mbti=="ENFJ"){
    document.getElementById("q1").innerHTML = "나는 힘이 넘치고 열정적이다.";
    document.getElementById("q2").innerHTML = "나는 사람을 좋아한다.";
    document.getElementById("q3").innerHTML = "나는 성격이 급하지 않은 편이다.";
    document.getElementById("q4").innerHTML = "나는 타인을 지나치게 의식한다.";
    document.getElementById("q5").innerHTML = "나는 감정적이다.";
    document.getElementById("q6").innerHTML = "나는 관심사가 다양하며 학습 속도 또한 빠르다.";
    document.getElementById("q7").innerHTML = "나는 남을 비판하거나 훈련시키는 것을 잘 할 수 있다.";
} 
else if(mbti=="ENFP"){
    document.getElementById("q1").innerHTML = "나는 호기심이 많은 사람이다.";
    document.getElementById("q2").innerHTML = "나는 활기차고 열정적인 사람이다.";
    document.getElementById("q3").innerHTML = "나는 집중력이 뛰어난 사람이다.";
    document.getElementById("q4").innerHTML = "나는 물체를 관찰하는 것을 좋아한다.";
    document.getElementById("q5").innerHTML = "나는 스트레스를 거의 받지 않는다.";
    document.getElementById("q6").innerHTML = "나는 친화력이 뛰어나 처음 보는 사람을 만나도 쉽게 친해질 수 있다.";
    document.getElementById("q7").innerHTML = "나는 이성적이다.";
} 
else if(mbti=="ESTJ"){
    document.getElementById("q1").innerHTML = "나는 나의 장점이 무엇인지 잘 안다.";
    document.getElementById("q2").innerHTML = "내가 조별과제에서 조장을 맡았을 때 잘할 자신이 있다.";
    document.getElementById("q3").innerHTML = "나는 내가 알고 있던 사실과 다른 내용을 들어도 받아들일 것이다.";
    document.getElementById("q4").innerHTML = "나는 성실한 편이다.";
    document.getElementById("q5").innerHTML = "나는 비효율적인 것을 보아도 참을 수 있다.";
    document.getElementById("q6").innerHTML = "나는 일 처리 능력이 뛰어나다.";
    document.getElementById("q7").innerHTML = "나는 참을성이 약하다.";
} 
else if(mbti=="ESFJ"){
    document.getElementById("q1").innerHTML = "나는 사람들 사이에서 중재자 역할을 잘 수행할 수 있다.";
    document.getElementById("q2").innerHTML = "나는 걱정이 많다.";
    document.getElementById("q3").innerHTML = "나는 자기주장이 강하다.";
    document.getElementById("q4").innerHTML = "나는 현실주의자이다.";
    document.getElementById("q5").innerHTML = "나는 눈치가 없는 편이다.";
    document.getElementById("q6").innerHTML = "나는 완벽주의 기질이 있다.";
    document.getElementById("q7").innerHTML = "나는 참을성이 없다.";
} 
else if(mbti=="ESTP"){
    document.getElementById("q1").innerHTML = "나는 자존감이 높다.";
    document.getElementById("q2").innerHTML = "나는 선입견이 별로 없고 개방적이다.";
    document.getElementById("q3").innerHTML = "나는 오늘 해야 할 일은 내일로 미루지 않는 편이다.";
    document.getElementById("q4").innerHTML = "나는 성취욕이 강하다.";
    document.getElementById("q5").innerHTML = "나는 참을성이 뛰어나다.";
    document.getElementById("q6").innerHTML = "나는 자기주장이 강하다.";
    document.getElementById("q7").innerHTML = "나는 공식적인 자리에서 긴장을 자주 한다.";
} 
else if(mbti=="ESFP"){
    document.getElementById("q1").innerHTML = "나는 진지한 분위기를 싫어한다.";
    document.getElementById("q2").innerHTML = "나는 공감능력이 뛰어나다.";
    document.getElementById("q3").innerHTML = "나는 어렵고 복잡한 것이더라도 관심이 있다면 열심히 한다.";
    document.getElementById("q4").innerHTML = "나는 열정적이다.";
    document.getElementById("q5").innerHTML = "나는 문제가 생기면 바로 맞닥뜨리는 경향이 있다.";
    document.getElementById("q6").innerHTML = "나는 나의 이야기를 남에게 밝히는 것을 좋아하지 않는다.";
    document.getElementById("q7").innerHTML = "나는 어떤 상황이던지 적응을 잘 한다.";
}
}else{
    alert("꼭 체크하고 넘겨주세요!");
}
}

function question1() {
    var check=0;
    var obj_length = document.getElementsByName("pro7").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("pro7")[i].checked == true) {
            check=1;
        }
    }
if(check==1){
var A = document.getElementById("second");
var B = document.getElementById("third");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
}else{
    alert("꼭 체크하고 넘겨주세요!");
}
}


function question2() {
    var check=0;
    var obj_length = document.getElementsByName("pro1").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("pro1")[i].checked == true) {
            check=1;
        }
    }
if(check==1){
var A = document.getElementById("third");
var B = document.getElementById("fourth");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
}else {
    alert("꼭 체크하고 넘겨주세요!");
}
}
function question3() {
    var check=0;
    var obj_length = document.getElementsByName("pro2").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("pro2")[i].checked == true) {
            check=1;
        }
    }
if(check==1){
var A = document.getElementById("fourth");
var B = document.getElementById("fifth");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
}else {
    alert("꼭 체크하고 넘겨주세요!");
}
}
function question4() {
    var check=0;
    var obj_length = document.getElementsByName("pro3").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("pro3")[i].checked == true) {
            check=1;
        }
    }
if(check==1){
var A = document.getElementById("fifth");
var B = document.getElementById("sixth");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
}else {
    alert("꼭 체크하고 넘겨주세요!");
}
}
function question5() {
    var check=0;
    var obj_length = document.getElementsByName("pro4").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("pro4")[i].checked == true) {
            check=1;
        }
    }
if(check==1){
var A = document.getElementById("sixth");
var B = document.getElementById("seventh");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
}else {
    alert("꼭 체크하고 넘겨주세요!");
}
}
function question6() {
    var check=0;
    var obj_length = document.getElementsByName("pro5").length;
    for (var i=0; i<obj_length; i++) {
        if (document.getElementsByName("pro5")[i].checked == true) {
            check=1;
        }
    }
if(check==1){
var A = document.getElementById("seventh");
var B = document.getElementById("eighth");
A.style.display = "none";
A.style.visibility = "hidden";
B.style.display = "block";
B.style.visibility = "visible";
element=document.getElementById("test");
element.setAttribute( 'onsubmit', 'return true;' )
}else {
    alert("꼭 체크하고 넘겨주세요!");
}
}