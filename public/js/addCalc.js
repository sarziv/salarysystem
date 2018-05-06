function sumValues() {
    var num1,num2, res,resfixed;
    num1=Number(document.getElementById("pallet").value);
    num2=Number(document.getElementById("eilutes").value);
    res=(num1*0.11)+(num2*0.09);
    resfixed=res.toFixed(2);
    document.getElementById("result").innerHTML=resfixed;
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}