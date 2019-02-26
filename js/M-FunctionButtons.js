function doFirst() {
	eyesscale = 1; //原始尺吋1
	eyesdeg = 0; //原始角度0
	mouthscale = 1; //原始尺吋1
	mouthdeg = 0; //原始角度
	accessoryscale=1;
	accessorydeg = 0;
	// document.getElementById('dropzone').ondragover = dragOver; //呼叫dragOver函式
	// document.getElementById('dropzone').ondrop = dropped; //呼叫dropped函式

	document.getElementsByClassName('plus')[0].addEventListener('click',plus);
	document.getElementsByClassName('minus')[0].addEventListener('click',minus);
	document.getElementsByClassName('turn')[0].addEventListener('click',turn);
	document.getElementsByClassName('trash')[0].addEventListener('click',trash);
	document.getElementsByClassName('plus')[1].addEventListener('click',plus);
	document.getElementsByClassName('minus')[1].addEventListener('click',minus);
	document.getElementsByClassName('turn')[1].addEventListener('click',turn);
	document.getElementsByClassName('trash')[1].addEventListener('click',trash);
	document.getElementsByClassName('reset__btn')[0].addEventListener('click',trashall);
	document.getElementById('fbclick').addEventListener('click',fbclick);

	eyes = document.querySelector('.mownster__eyesposition');
	mouth = document.querySelector('.mownster__mouthposition');
	accessory= document.querySelector('.mownster__accessoryposition');

}
//加
function plus(){
	if($('#eyesbutton').is('.selector__choose--choosed')){
		eyesscale+=0.25; //先判斷在加
		eyes.style.transform = "scale(" + eyesscale +") rotate("+eyesdeg+"deg)";
	}
	if($('#mouthbutton').is('.selector__choose--choosed')){
		mouthscale+=0.25;
		mouth.style.transform = "scale(" + mouthscale +") rotate("+mouthdeg+"deg)";
	}
	if($('#accessorybutton').is('.selector__choose--choosed')){
		accessoryscale+=0.25;
		accessory.style.transform = "scale(" + accessoryscale +") rotate("+accessorydeg+"deg)";
	}
}
//減
function minus(){
	if($('#eyesbutton').is('.selector__choose--choosed')){
		eyesscale-=0.25; //先判斷在加
		eyes.style.transform = "scale(" + eyesscale +") rotate("+eyesdeg+"deg)";
	}
	if($('#mouthbutton').is('.selector__choose--choosed')){
		mouthscale-=0.25;
		mouth.style.transform = "scale(" + mouthscale +") rotate("+mouthdeg+"deg)";
	}
	if($('#accessorybutton').is('.selector__choose--choosed')){
		accessoryscale-=0.25;
		accessory.style.transform = "scale(" + accessoryscale +") rotate("+accessorydeg+"deg)";
	}
}
//轉
function turn(){
	if($('#eyesbutton').is('.selector__choose--choosed')){
		eyesdeg-=10; //先判斷在加
		eyes.style.transform = "scale(" + eyesscale +") rotate("+eyesdeg+"deg)";
	}
	if($('#mouthbutton').is('.selector__choose--choosed')){
		mouthdeg-=10;
		mouth.style.transform = "scale(" + mouthscale +") rotate("+mouthdeg+"deg)";
	}
	if($('#accessorybutton').is('.selector__choose--choosed')){
		accessorydeg-=10;
		accessory.style.transform = "scale(" + accessoryscale +") rotate("+accessorydeg+"deg)";
	}
}
// 丟
function trash(){
	if($('#eyesbutton').is('.selector__choose--choosed')){
		document.querySelector('.mownster__eyesposition img').src=""
		eyesscale = 1; //原始尺吋1
		eyesdeg = 0; //原始角度0
		eyes.style.transform = "scale(" + eyesscale +") rotate("+eyesdeg+"deg)";
		eyes.style="";
	}
	if($('#mouthbutton').is('.selector__choose--choosed')){
		document.querySelector('.mownster__mouthposition img').src=""
		mouthscale = 1; //原始尺吋1
		mouthdeg = 0; //原始角度
		mouth.style.transform = "scale(" + mouthscale +") rotate("+mouthdeg+"deg)";
		mouth.style="";
	}
	if($('#accessorybutton').is('.selector__choose--choosed')){
		document.querySelector('.mownster__accessoryposition img').src=""
		accessoryscale=1;
		accessorydeg = 0;
		accessory.style.transform = "scale(" + accessoryscale +") rotate("+accessorydeg+"deg)";
		accessory.style="";
	}
}

// 丟
function trashall(){
		document.querySelector('.mownster__eyesposition img').src=""
		eyesscale = 1; //原始尺吋1
		eyesdeg = 0; //原始角度0
		eyes.style.transform = "scale(" + eyesscale +") rotate("+eyesdeg+"deg)";
		eyes.style="";

		document.querySelector('.mownster__mouthposition img').src=""
		mouthscale = 1; //原始尺吋1
		mouthdeg = 0; //原始角度
		mouth.style.transform = "scale(" + mouthscale +") rotate("+mouthdeg+"deg)";
		mouth.style+="top:45%,left:35%";
		mouth.style="";

		document.querySelector('.mownster__accessoryposition img').src=""
		accessoryscale=1;
		accessorydeg = 0;
		accessory.style.transform = "scale(" + accessoryscale +") rotate("+accessorydeg+"deg)";
		accessory.style="";
};

function fbclick(){
  document.getElementsByClassName('fb-xfbml-parse-ignore')[0].click();
}

window.addEventListener('load', doFirst);

