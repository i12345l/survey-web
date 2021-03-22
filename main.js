function mbti() {
        var obj_length = document.getElementsByName("Personality").length;
        for (var i=0; i<obj_length; i++) {
            if (document.getElementsByName("Personality")[i].checked == true) {
                const mbti=document.getElementsByName("Personality")[i].value;
            }
        }
    if(mbti="INTP"){
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
        document.getElementById("q1").innerHTML = "나는 좋은 분석능력을 지녔으며 풍부한 생각을 하는 사람이다.";
    }
}

function question1() {
    var A = document.getElementById("second");
    var B = document.getElementById("third");
    A.style.display = "none";
    A.style.visibility = "hidden";
    B.style.display = "block";
    B.style.visibility = "visible";
}

function insert() {
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