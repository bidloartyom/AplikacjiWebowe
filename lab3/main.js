function ChangeText() {
    document.getElementById("demo").innerHTML = "Zmieniony";
}
function ChangeImg(){
    document.getElementById('myImage').src='smile.jpg'
}
function ChangeStyle(){
    document.getElementById('text').style.fontSize='70px'
}
function ShowText(){
    document.getElementById('hide').style.display='block'
}
function changeBigImage(src) {
    document.getElementById("bigImage").src = src;
}
function calculate() {
    var arg1 = parseFloat(document.getElementById("arg1").value); 
    var arg2 = parseFloat(document.getElementById("arg2").value); 
    var operator = document.getElementById("operator").value;
    var result; 
    switch(operator) {
        case "+":
            result = arg1 + arg2; 
            break;
        case "-":
            result = arg1 - arg2; 
            break;
        case "*":
            result = arg1 * arg2; 
            break;
        case "/":
            if (arg2 !== 0) {
                result = arg1 / arg2; 
            } else {
                result = "Nie można dzielić przez 0"; 
            }
            break;
        default:
            result = "Nie poprawny operator";
    }
    document.getElementById("result").innerText = arg1 + " " + operator + " " + arg2 + " = " + result;
}
