function mbti() {
        var obj_length = document.getElementsByName("Personality").length;
        for (var i=0; i<obj_length; i++) {
            if (document.getElementsByName("Personality")[i].checked == true) {
                const mbti=document.getElementsByName("Personality")[i].value;
            }
        }
    if(mbti=="INTP"){
        var elements = document.getElementsByTagName("h1");
        document.write("0번째 : " + elements[0].innerText);
    }
}