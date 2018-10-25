function sumValues() {

    let num1, num2, num3, res, resfixed;
    num1 = Number(document.getElementById("pallet").value);
    num2 = Number(document.getElementById("eilutes").value);
    num3 = Number(document.getElementById("vip").value);
    res = (num1 * 0.11) + (num2 * 0.09) + (num3 * 5);
    resfixed = res.toFixed(2);


    //override if negative
    if (resfixed < 0) {
        $('#sendButton').attr('disabled', true);
        resfixed = "Neigiamas skaičius";
    }
    else if (resfixed > 0) {
        $('#sendButton').attr('disabled', false);
    }

    document.getElementById("result").innerHTML = resfixed;
}

//Modal populate for pop-up
function populateSecondTextBox() {
    document.getElementById('eilutesSecond').innerHTML = document.getElementById('eilutes').value;
    document.getElementById('palletSecond').innerHTML = document.getElementById('pallet').value;
    document.getElementById('vipSecond').innerHTML = document.getElementById('vip').value;
    document.getElementById('valandosSecond').innerHTML = document.getElementById('valandos').value;
    document.getElementById('resultSecond').innerHTML = document.getElementById('result').innerHTML;
}

function modalDisabledAfterClick() {
    //Multiple submit protection on spam
    $(document).ready(function () {
        $("#sendModal").one("click", function () {
            $(this).attr('disabled', true);
        });
    });
}
function modalDisabledAfterClickMemo() {
    //Multiple submit protection on spam
    $(document).ready(function () {
        $("#sendMemo").one("click", function () {
            $(this).attr('disabled', true);
        });
    });
}