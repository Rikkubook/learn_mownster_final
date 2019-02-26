window.onload = function () {      
    $('.mownster__confirm').click(function(){ 
    cansrc=document.querySelector('.img--Gradation').src;
    numcans=cansrc.substring(cansrc.length-5, cansrc.length-4)
        changeImg();
        setTimeout( saveImage, 3000);
    });

    numcans=1;

    // changeImg();
    function changeImg(){
        var ctx = document.getElementById("myCanvas").getContext('2d');
        var svg_xml = (new XMLSerializer()).serializeToString(document.getElementById("svg"+numcans));
        var svgStr = (new XMLSerializer()).serializeToString(document.getElementById("svg"+numcans));

        var canvas = new fabric.Canvas('myCanvas');
        var path = fabric.loadSVGFromString(svgStr,function(objects, options) {
        var obj = fabric.util.groupSVGElements(objects, options);
        canvas.add(obj).renderAll();
        })
        
        var img = new Image();
        var img2 = new Image();
        var img3 = new Image();
        var img4 = new Image();
        var img5 = new Image();
        
        var ah=document.querySelector(".mownster__drag").offsetHeight;
        var aw=document.querySelector(".mownster__drag").offsetWidth;

        sec=eyesscale;
        rec=eyesdeg;
        const eangle = rec * Math.PI / 180;  

        smc=mouthscale;
        rmc=mouthdeg;
        const mangle = rmc * Math.PI / 180;  

        sacc=accessoryscale;
        racc=accessorydeg;
        const aangle = racc * Math.PI / 180;  
        
        var eh=document.getElementById("drageyes").offsetHeight;
        var ew=document.getElementById("drageyes").offsetWidth;
        var mh=document.getElementById("dragmouth").offsetHeight;
        var mw=document.getElementById("dragmouth").offsetWidth;
        var ach=document.getElementById("dragaccessory").offsetHeight;
        var acw=document.getElementById("dragaccessory").offsetWidth;

        var ceh=eh/ah*250*sec;
        var cew=ew/aw*250*sec;
        var cmh=mh/ah*250*smc;
        var cmw=mw/aw*250*smc;
        var cah=ach/ah*250*sacc;
        var caw=acw/aw*250*sacc;


        var et=document.getElementById("drageyes").offsetTop;
        var el=document.getElementById("drageyes").offsetLeft;
        var mt=document.getElementById("dragmouth").offsetTop;
        var ml=document.getElementById("dragmouth").offsetLeft;
        var act=document.getElementById("dragaccessory").offsetTop;
        var acl=document.getElementById("dragaccessory").offsetLeft;

        var cet=(et+(eh/2))*(250/ah)-(ceh/2);
        var cel=(el+(ew/2))*(250/aw)-(cew/2);
        var cmt=(mt+(mh/2))*(250/ah)-(cmh/2);
        var cml=(ml+(mw/2))*(250/aw)-(cmw/2);
        var cat=(act+(ach/2))*(250/ah)-(cah/2);
        var cal=(acl+(acw/2))*(250/aw)-(caw/2);


        img2.onload = function () {
            img.onload = function () {
                ctx.clip();
                ctx.clearRect( 0, 0,250,250); //清除舊圖
                ctx.drawImage(img, 0, 0, 250, 250);
                ctx.drawImage(img2,0, 0, 250, 250); 
                
                // console.log(canvas1.width, canvas1.height); //要在cnavas下不吃css
                ctx.translate((cel+cew/2), (cet+ceh/2));
                ctx.rotate(eangle);
                ctx.drawImage(img3,-cew/2,-ceh/2,cew,ceh);
                ctx.rotate(-eangle);
                ctx.translate(-(cel+cew/2), -(cet+ceh/2));

                ctx.translate((cml+cmw/2), (cmt+cmh/2));
                ctx.rotate(mangle);
                ctx.drawImage(img4,-cmw/2,-cmh/2,cmw,cmh);
                ctx.rotate(-mangle);
                ctx.translate(-(cml+cmw/2), -(cmt+cmh/2));

                ctx.translate((cal+caw/2), (cat+cah/2));
                ctx.rotate(aangle);
                ctx.drawImage(img5,-caw/2,-cah/2,caw,cah);
                ctx.rotate(-aangle);
                ctx.translate(-(cal+caw/2), -(cat+cah/2));
            };
        };

        img.src = "data:image/svg+xml;base64," + window.btoa(svg_xml);
        img2.src = document.getElementById("can"+numcans).src;
        img3.src= document.getElementById("drageyes").firstElementChild.src;
        img4.src= document.getElementById("dragmouth").firstElementChild.src;
        img5.src= document.getElementById("dragaccessory").firstElementChild.src;
        
    }
    // var hslH = document.getElementById("hsl-h");
    // hslH.oninput = changeImg;
    // var hslL = document.getElementById("hsl-l");
    // hslL.oninput = changeImg;
}

function saveImage() {
// alert('已儲存');
var canvas = document.getElementById("myCanvas");
var dataURL = canvas.toDataURL("image/png");
document.getElementById('hidden_data').value = dataURL;
var formData = new FormData(document.forms["form1"]);
var xhr = new XMLHttpRequest();
xhr.open('POST', 'M-canvas_load_save.php', true);

xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
            if( xhr.status == 200 ){
            // alert('Succesfully uploaded');  
            }else{
            alert('系統錯誤');
            }
    }
};
    
xhr.send(formData);
}