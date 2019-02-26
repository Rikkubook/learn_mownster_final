function verification(){
    var creditCardSafeCode = document.getElementsByName("creditCardSafeCode");
    if(creditCardSafeCode){
        for(var i=0;i<creditCardSafeCode.length;i++){
            creditCardSafeCode[i].onkeypress = function(){
                return event.keyCode>=48 && event.keyCode<=57;
            }
            creditCardSafeCode[i].oninput = function(){
                if(this.value.length>3){this.value=this.value.slice(0,3);}
            }
        }
    }  
        
    var creditCard = document.querySelectorAll("input[name^='creditCard-']");
    if(creditCard){
        for(var i=0;i<creditCard.length;i++){
            creditCard[i].onkeypress = function(){
                return event.keyCode>=48 && event.keyCode<=57;
            }
            creditCard[i].oninput = function(){
                if(this.value.length>4){this.value=this.value.slice(0,4);}
            }
        }
    }
}

function sum(){
    var sum = 0;
    var totalPrice = document.getElementsByClassName("totalPrice");
    if(totalPrice){
        for(var i=0;i<totalPrice.length;i++){
            sum += parseInt(totalPrice[i].innerHTML);
        }
        var discount = document.getElementById("discount").innerHTML;
        if(discount == ""){
            discount = 10;
        }
        discountSum =  sum * parseInt(discount) / 10;
        document.getElementById("sumTotalPrice").innerHTML = parseInt(discountSum);
    }
}

function choosePay(evt, payTypeName) {
    // Declare all variables
    var i, payTypeDetail, paybtn;

    // Get all elements with class="payTypeDetail" and hide them
    payTypeDetail = document.getElementsByClassName("payTypeDetail");
    for (i = 0; i < payTypeDetail.length; i++) {
        payTypeDetail[i].style.display = "none";
    }

    // Get all elements with class="paybtn" and remove the class "activePayType"
    paybtn = document.getElementsByClassName("paybtn");
    for (i = 0; i < paybtn.length; i++) {
        paybtn[i].className = paybtn[i].className.replace(" activePayType", "");
    }

    // Show the current payType, and add an "activePayType" class to the button that opened the payType
    document.getElementById(payTypeName).style.display = "block";
    evt.currentTarget.className += " activePayType";
}

function c_year(){
    var nowTime = new Date();
    var theYear = nowTime.getFullYear();

    var chooseYear = document.getElementById("chooseYear");
    if(chooseYear){
        for (var i = 0; i < 20; i++) {
            var t = theYear + i + "年";
            var v = theYear + i;
            var new_option = new Option(t, v);
            chooseYear.options.add(new_option);
        }
    }
}

function c_month(){
    var chooseMonth = document.getElementById("chooseMonth");
    if(chooseMonth){
        for (var i = 1; i <= 12; i++) {
            var t = i + "月";
            var v = i;
            var new_option = new Option(t, v);
            chooseMonth.options.add(new_option);
        }
    }
}

function submitInfo_close(){
    var close = document.getElementById("close");
    if(close){
        close.onclick = function(){
            document.getElementById("infoShow").style.display = "none";
            document.getElementById("orderSubmit").style.display = "none";
            location.href = "shop.php";
        }
    }
}

function submitInfo_show(){
    var submitInfo = document.getElementById("submitInfo");
    if(submitInfo){
        submitInfo.onclick = function(){
            var xhr = new XMLHttpRequest(); 

            xhr.onload = function (){
                if( xhr.status == 200 ){
                    document.getElementById("orderSubmit").innerHTML = xhr.responseText;
                    document.getElementById("orderSubmit").style.display = "block";
                    submitInfo_close();
                }else{
                    alert( xhr.status );
                }
            }
        
            var url = "TransactionComplete.php";
            xhr.open("Get", url, true); 
            xhr.send(null);
            document.getElementById("orderSubmit").style.display = "block";
        }
    }
}
function cancelCheckInfo(){
    var xhr = new XMLHttpRequest(); 

    var url = "cancelCheckInfo.php";
    xhr.open("Get", url, true);
    xhr.send(null);
}

function checkInfo_cancel(){
    var cancel = document.getElementById("cancel");
    if(cancel){
        cancel.onclick = function(){
            document.getElementById("infoShow").style.display = "none";
            cancelCheckInfo();
        }
    }
}

function checkInfo_creditCard(sumTotalPrice,activePayType,creditCard_1,creditCard_2,creditCard_3,creditCard_4,theMonth,theYear,creditCardSafeCode,orderPerson_name,orderPerson_phone,orderPerson_address,receivePerson_name,receivePerson_phone,receivePerson_address){
    var xhr = new XMLHttpRequest(); 
    
    xhr.onload = function (){
        if( xhr.status == 200 ){
            if(xhr.responseText == "error"){
                var str = "系統有誤";
            }else{
                var str = xhr.responseText;
            }
            document.getElementById("infoShow").innerHTML = str;
            document.getElementById("infoShow").style.display = "block";
            checkInfo_cancel();
            submitInfo_show();
        }else{
            alert( xhr.status );
        }
    }

    var url = "showCheckInfo.php";
    xhr.open("post", url, true);
    
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
    var orderInformation = {};
    orderInformation.totalPrice = sumTotalPrice;
    orderInformation.payType = activePayType;
    orderInformation.creditCardNum_1 = creditCard_1;
    orderInformation.creditCardNum_2 = creditCard_2;
    orderInformation.creditCardNum_3 = creditCard_3;
    orderInformation.creditCardNum_4 = creditCard_4;
    orderInformation.month = theMonth;
    orderInformation.year = theYear;
    orderInformation.cardSafeCode = creditCardSafeCode;
    orderInformation.orderPersonName = orderPerson_name;
    orderInformation.orderPersonPhone =orderPerson_phone;
    orderInformation.orderPersonAddress = orderPerson_address;
    orderInformation.receivePersonName = receivePerson_name;
    orderInformation.receivePersonPhone =receivePerson_phone;
    orderInformation.receivePersonAddress = receivePerson_address;
    var data_info = "jsonStr=" + JSON.stringify( orderInformation );
    xhr.send(data_info);
}

function checkInfo_cash(sumTotalPrice,activePayType,orderPerson_name,orderPerson_phone,orderPerson_address,receivePerson_name,receivePerson_phone,receivePerson_address){
    var xhr = new XMLHttpRequest(); 
    
    xhr.onload = function (){
        if( xhr.status == 200 ){
            if(xhr.responseText == "error"){
                var str = "系統有誤";
            }else{
                var str = xhr.responseText;
            }
            document.getElementById("infoShow").innerHTML = str;
            document.getElementById("infoShow").style.display = "block";
            checkInfo_cancel();
            submitInfo_show();
            submitInfo_close();
        }else{
            alert( xhr.status );
        }
    }

    var url = "showCheckInfo.php";
    xhr.open("post", url, true);
    
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
    var orderInformation = {};
    orderInformation.totalPrice = sumTotalPrice;
    orderInformation.payType = activePayType;
    orderInformation.orderPersonName = orderPerson_name;
    orderInformation.orderPersonPhone =orderPerson_phone;
    orderInformation.orderPersonAddress = orderPerson_address;
    orderInformation.receivePersonName = receivePerson_name;
    orderInformation.receivePersonPhone =receivePerson_phone;
    orderInformation.receivePersonAddress = receivePerson_address;
    var data_info = "jsonStr=" + JSON.stringify( orderInformation );
    xhr.send(data_info);

}

function checkInfo_show(){
    var checkInfo = document.getElementById("checkInfo");
    if(checkInfo){
        checkInfo.onclick = function(){ 
            var sumTotalPrice = document.getElementById("sumTotalPrice").innerHTML;
            var activePayType = document.getElementsByClassName("activePayType")[0];
            if(activePayType.value === "0"){
                var creditCard = document.querySelectorAll("input[name^='creditCard-']");
                for (var i = 0; i < creditCard.length; i++) {
                    if(creditCard[i].value === "" || creditCard[i].value === null){
                        alert(creditCard[i].parentNode.firstElementChild.innerHTML + "不完整");
                        return false;
                    }
                }
                var creditCardSafeCode = document.querySelectorAll("input[name='creditCardSafeCode']");
                    if(creditCardSafeCode[0].value === "" || creditCardSafeCode[0].value === null){
                        alert(creditCardSafeCode[0].parentNode.firstElementChild.innerHTML + "不完整");
                        return false;
                }
                var theMonth = document.getElementById("chooseMonth").value;
                var theYear = document.getElementById("chooseYear").value;
            }
            
            var orderPerson = document.querySelectorAll("input[name^='order-']");
            for (var i = 0; i < orderPerson.length; i++) {
                if(orderPerson[i].value === "" || orderPerson[i].value === null){
                    alert(orderPerson[i].parentNode.firstElementChild.innerHTML + "不完整");
                    return false;
                }
            }
            var receivePerson = document.querySelectorAll("input[name^='receive-']");
            for (var i = 0; i < receivePerson.length; i++) {
                if(receivePerson[i].value === "" || receivePerson[i].value === null){
                    alert(receivePerson[i].parentNode.firstElementChild.innerHTML + "不完整");
                    return false;
                }
            }
            if(activePayType.value === "0"){
                checkInfo_creditCard(sumTotalPrice,activePayType.value,creditCard[0].value,creditCard[1].value,creditCard[2].value,creditCard[3].value,theMonth,theYear,creditCardSafeCode[0].value,orderPerson[0].value,orderPerson[1].value,orderPerson[2].value,receivePerson[0].value,receivePerson[1].value,receivePerson[2].value);
            }else{
                checkInfo_cash(sumTotalPrice,activePayType.value,orderPerson[0].value,orderPerson[1].value,orderPerson[2].value,receivePerson[0].value,receivePerson[1].value,receivePerson[2].value);
            }
        }
    }
}

function return_previous_page(){
    var returnPreviousPage = document.getElementById("returnPreviousPage");
    if(returnPreviousPage){
        returnPreviousPage.onclick = function(){
            history.go(-1);
        }
    }
}

function shoppingCart_border(){
    var shoppingCart = document.getElementsByClassName("shoppingCart");
    if(shoppingCart){
        for(var i=0;i<shoppingCart.length;i++){
            shoppingCart[i].parentNode.style.borderBottom = "1px solid #c8c8c8";
        }
    }
}



function init(){
    shoppingCart_border();
    return_previous_page();
    checkInfo_show();
    c_month();
    c_year();
    document.getElementById("defaultOpen").click();
    sum();
    verification();
}

window.onload = init;