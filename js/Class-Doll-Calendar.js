var now = new Date(); //目前時間，為了抓當下的年份與月份
nowYearDoll = now.getFullYear(); //當下年份
// console.log("nowYearDoll資料型態=" + typeof (nowYearDoll));
nowMonthDoll = now.getMonth(); //目前的月份，之後用此值在陣列中找出正確的天數

var baseYear = now.getFullYear();
var baseMonth = now.getMonth();
var baseDate = now.getDate();

// console.log(nowMonthDoll);
// console.log(baseMonth);
// console.log(nowYearDoll);
// console.log(baseYear);
// console.log(baseDate);

dollDate = new Array();
dollEnd = new Array();

    
function init() {
    //註冊年月按鈕
    // nextYear = document.querySelector('#timeBox--year .arrow--right');
    // lastYear = document.querySelector('#timeBox--year .arrow--left');
    
    nextMonthDoll = document.querySelector('#timeBox__doll--month .arrow--right');
    lastMonthDoll = document.querySelector('#timeBox__doll--month .arrow--left');
    // console.log(nextMonthDoll);
    // console.log(lastMonthDoll);
    
    nextMonthDoll.onclick = addMonth;
    lastMonthDoll.onclick = minusMonth;

    var dollPrice = document.getElementById('peopleTotalDoll');
    dollPrice.addEventListener('change', priceTotalDoll);
    
    // getDollClassDate();
    // showClass();
    var classDate = document.getElementsByClassName('doll__class--dates');
    var classEndDate = document.getElementsByClassName('doll__end--dates');
    //將li裡面的日期放入陣列
    for (let i = 0; i < classDate.length; i++) {
        dollDate.push(classDate[i].innerHTML);
        dollEnd.push(classEndDate[i].innerHTML);
    }

    runDateDoll();
}
    
var days = document.getElementsByClassName('days--doll'); //註冊所有td當成日期欄
function runDateDoll() {
        // console.log("days數量為" + days.length);
        var showYear = document.getElementById('titleYear--doll'); //年份欄
        var showMonth = document.getElementById('titleMonth--doll'); //月份欄
        
        var monthAmount = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31); //月份的天數  
        // console.log("第一格為" + days[0].innerHTML);
    //先清空月曆
    for (a = 0; a <= days.length - 1; a++) {
        days[a].innerHTML = "";
        days[a].classList.remove("showClass");
        days[a].classList.remove("pastShowClass");
        days[a].classList.remove("clickedClass");
        days[a].classList.remove("noShowClass");
        // if (days[a].classList.contains("showClass") == true) {
        //     days[a].classList.remove("showClass");
        // }
        // else if (days[a].classList.contains("pastShowClass") == true) {
        //     days[a].classList.remove("pastShowClass");
        // }else if (days[a].classList.contains("clickedClass") == true) {
        //     days[a].classList.remove("clickedClass");
        // }else{
        //     days[a].classList.remove("noShowClass");
        // }
        // console.log(days[a].innerHTML);
    }
    showYear.innerHTML = nowYearDoll; //放到年份欄
    // console.log(showYear);
    showMonth.innerHTML = (nowMonthDoll + 1) + "月";
    // console.log(showMonth);
    // console.log(nowMonthDoll + "＋1為目前的月份");

    //檢查閏月
    if (nowYearDoll % 4 == 0 && nowYearDoll % 100 != 0) {
        monthAmount[1] = 29;
    } else if (nowYearDoll % 400 == 0) {
        monthAmount[1] = 29;
    }
    // console.log("此年二月天數為" + parseInt(monthAmount[1]));
    startDate = new Date(nowYearDoll, nowMonthDoll, 1);
    //找出每個月份的第一天為禮拜幾,再從陣列中找出那個月有幾天
    var first = startDate.getDay(); //0~6
    // console.log("該月1號為星期" + first);

    //用迴圈將那個月的每一天依序帶入第一天之後的td空格
    for (var i = 1; i <= monthAmount[nowMonthDoll]; i++) {
        // console.log("該月天數為" + parseInt(monthAmount[nowMonthDoll]));
        // console.log("days[first + (i - 1)]" + (first + (i - 1)));
        days[first + (i - 1)].innerHTML = i;
        days[first + (i - 1)].classList.add("noShowClass");
    }

    // 帶入有課的日期，標示不同
    for (let j = 0; j < dollDate.length; j++) {
        if (parseInt(dollDate[j].split("-")[0]) == parseInt(nowYearDoll) && parseInt(dollDate[j].split("-")[1]) == parseInt(nowMonthDoll) + 1){
            //抓到所屬td格
            var showClass = days[first + parseInt(dollDate[j].split("-")[2]) - 1];
            // console.log(parseInt(dollDate[j].split("-")[2]));
            // console.log(showClass);

            //檢查是否已經超過7天報名期限
            var start = dollDate[j].split("-")[0] + dollDate[j].split("-")[1] + dollDate[j].split("-")[2];
            var end = dollEnd[j].split("-")[0] + dollEnd[j].split("-")[1] + dollEnd[j].split("-")[2];
            // console.log(start+"&"+end);
            // console.log(typeof(start) + "&" + typeof(end));

            // console.log((parseInt(baseMonth)));
            // console.log((parseInt(baseMonth) + 1).toString().length);
            if ((parseInt(baseMonth) + 1).toString().length == 1) {
                if (baseDate.toString().length == 1){
                    var current = baseYear.toString() + "0" + (parseInt(baseMonth) + 1).toString() + "0" + baseDate.toString();
                }else{
                    var current = baseYear.toString() + "0" + (parseInt(baseMonth)+1).toString() + baseDate.toString();
                }
            } else {
                if (baseDate.toString().length == 1) {
                    var current = baseYear.toString() + (parseInt(baseMonth) + 1).toString() + "0" + baseDate.toString();
                } else {
                    var current = baseYear.toString() + (parseInt(baseMonth) + 1).toString() + baseDate.toString();
                }
            }
            // console.log(parseInt(end));
            // console.log(parseInt(current));
            // console.log(parseInt(start));
            if (parseInt(start) <= parseInt(current)) {
                showClass.classList.remove("noShowClass");
                showClass.classList.add("pastShowClass");
            }
            else if (parseInt(end) <= parseInt(current) && parseInt(current) < parseInt(start)) {
                showClass.classList.remove("noShowClass");
                showClass.classList.add("pastShowClass");
            }else{
                showClass.classList.remove("noShowClass");
                showClass.classList.add("showClass");
            }
        }
    }

    //檢查最後一週的欄位是否為空白，空白的話隱藏
    // var weeks = document.getElementsByClassName('week--doll');
    // var lastRow = weeks[weeks.length - 1];
    // console.log(lastRow.toString());
    // var checkTds = lastRow.getElementsByClassName('days--doll');
    // console.log("最後一欄總共" + checkTds.length + "個td");

    // if (checkTds[0].innerHTML == "") {
    //     lastRow.style.display = "none";
    // } else {
    //     lastRow.style.display = "table-row";
    // }

    //註冊每個月的課程點擊事件
    everyMonthClass = document.getElementsByClassName("showClass");
    // console.log(everyMonthClass);
    // $('.showClass').off('click');
    for (let k = 0; k < everyMonthClass.length; k++) {
        everyMonthClass[k].removeEventListener('click', showClassAlert);
        everyMonthClass[k].removeEventListener('click', getClassInfo);
        everyMonthClass[k].addEventListener('click', getClassInfo);
        // console.log(everyMonthClass[k]);
    }

    pastClass = document.getElementsByClassName("pastShowClass");
    // console.log(pastClass);
    // $('.pastShowClass').off('click');
    for (let h = 0; h < pastClass.length; h++) {
        pastClass[h].removeEventListener('click', showClassAlert);
        pastClass[h].removeEventListener('click', getClassInfo);
        pastClass[h].addEventListener('click', showClassAlert);
        // console.log(pastClass[h]);
    }
    
}
//找到課程日期與時間的HTML
var showDollDate = document.getElementById("showDollDate");
var showDollTime = document.getElementById("showDollTime");

function showClassAlert(e) {
    $('.popup__alertClass .popup__wrap').fadeIn(100); //登入成功出現
    $('.popup__alertClass .popup__box').removeClass('transform--out').addClass('transform--in');
    e.preventDefault();
}

function getClassInfo(e) {
    for (let g = 0; g < everyMonthClass.length; g++) {
        everyMonthClass[g].classList.remove("clickedClass");
    }
    e.target.classList.add("clickedClass");
    showDollDate.innerHTML = nowYearDoll+"/"+(nowMonthDoll+1)+"/"+ e.target.innerHTML;
    showDollTime.innerHTML = "13：00 ～ 16：00";
    // console.log(document.getElementById('payClass--errorMsg').innerHTML);
    document.getElementById('payClass--errorMsg').innerHTML = "";
    e.preventDefault;
}

function addMonth() {
    nowMonthDoll += 1;
    if (nowMonthDoll > 11) {
        nowMonthDoll = 0;
        nowYearDoll++;
        // console.log("新查詢年份為" + nowYearDoll);
    }
    showDollDate.innerHTML = "請於上方月曆點選日期";
    showDollTime.innerHTML = "請選擇上課日期";
    // console.log("新查詢月份為" + (parseInt(nowMonthDoll)+1));
    runDateDoll();
}

function minusMonth() {
    if (nowMonthDoll == baseMonth && nowYearDoll == baseYear){
        return false;
    }else{
        nowMonthDoll -= 1;
        if (nowMonthDoll < 0) {
            nowMonthDoll = 11;
            nowYearDoll--;
        }
        showDollDate.innerHTML = "請於上方月曆點選日期";
        showDollTime.innerHTML = "請選擇上課日期";
        //重新跑月曆
        runDateDoll();
    }
}

function priceTotalDoll() {
    var totalPrice = document.getElementById('totalPriceDoll');
    totalPrice.innerHTML = "";
    var peopleNumber = $('#peopleTotalDoll option:selected').val();
    // alert(peopleNumber);
    // var peopleNumber = parseInt($('#peopleTotalDoll :selected').val());
    console.log(peopleNumber);
    totalPrice.innerHTML = "$" + 2000 * peopleNumber + "元";
}

window.onload = init();