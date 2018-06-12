$(document).ready(function(){

    $('#sendButton').attr('disabled',true);

    $('#pallet').keyup && $('#eilutes').keyup(function(){
        if($(this).val().length !=0){
            $('#sendButton').attr('disabled', false);
        }
        else if($(this).val() < 0){
            $('#sendButton').attr('disabled', false);
        }
        else
        {
            $('#sendButton').attr('disabled', true);
        }

    })
});

function sumValues() {
    var num1,num2, res,resfixed;
    num1=Number(document.getElementById("pallet").value);
    num2=Number(document.getElementById("eilutes").value);
    res=(num1*0.11)+(num2*0.09);
    resfixed=res.toFixed(2);

    //over ride if negative
    if(resfixed < 0) {
        resfixed = "Neigiamas skaičius";
    }
    document.getElementById("result").innerHTML=resfixed;
}

function populateSecondTextBox() {

    document.getElementById('eilutesSecond').innerHTML = document.getElementById('eilutes').value;
    document.getElementById('palletSecond').innerHTML = document.getElementById('pallet').value;
    document.getElementById('resultSecond').innerHTML = document.getElementById('result').innerHTML;
}
