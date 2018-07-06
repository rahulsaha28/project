$(".carousel").carousel();




 var navBar = document.querySelector('.navbar');
 var sec2 = document.querySelector('.main-section-2');

 var divImg;
 var img_1 = document.querySelectorAll('.img-1');
 var fontIcon = document.querySelectorAll('.font-icon');

 for(var i=0; i<img_1.length; i++)
 {
     divImg = img_1[i].parentElement;
     divImg.style.height = 300 + 'px';
     img_1[i].style.width = (divImg.offsetWidth-20) + 'px';
     img_1[i].style.height = 300 +'px';

    fontIcon[i].style.width = (divImg.offsetWidth-20) + 'px';
    fontIcon[i].style.height = 300 +'px';

 }

$(document).ready(function(){

    var thumImg;
    var img_2 = document.querySelectorAll('.img_2');
   
    for(var i=0; i<img_2.length; i++)
    {
        thumImg = img_2[i].parentElement;
        img_2[i].style.width = thumImg.offsetWidth + 'px';
        img_2[i].style.height = 250+'px';
    }
   
   
    var imgScroll;
    var img_0 = document.querySelectorAll('.img-0');
   
    for(var i=0; i<img_0.length; i++)
    {
        imgScroll = img_0[0].parentElement;
        img_0[i].style.width = imgScroll.offsetWidth +'px';
        img_0[i].style.height = 400 + 'px';
    }
    
});

 
 


sec2.style.marginTop = navBar.offsetHeight + 'px';




