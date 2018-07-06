var navBar = document.querySelector('.navbar');
var sec2 = document.querySelector('.pagedetail-section-2');

sec2.style.marginTop = (navBar.offsetHeight + 10) + 'px';

var cardImg;
var img_0 = document.querySelectorAll('.img-0');

for(var i=0; i<img_0.length; i++)
{
    cardImg = img_0[i].parentElement;
    img_0[i].style.width = cardImg.offsetWidth + 'px';
    img_0[i].style.height = 200 +'px';
}