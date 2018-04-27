function sumValues() {
    var num1,num2, res,resfixed;
    num1=Number(document.getElementById("pallet").value);
    num2=Number(document.getElementById("eilutes").value);
    res=(num1*0.11)+(num2*0.09);
    resfixed=res.toFixed(2);
    document.getElementById("result").innerHTML=resfixed;

}