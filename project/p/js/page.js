var navBar = document.querySelector('.navbar');
var sec2 = document.querySelector('.main-section-2');

sec2.style.marginTop = navBar.offsetHeight + 'px';

var img_0 = document.querySelector('.img-0');


    img_0.style.width = (img_0.parentElement.offsetWidth) + 'px';
    img_0.style.height = 400+'px';

var revNum = 0;
var rev = document.querySelector('.revnum');

 $('.review-inbox .fa').click(function(e){

      
      if(this.classList.contains('red'))
      {
        this.classList.remove('red');

      }
      else
      {
        this.classList.add('red');
        revNum++;
        rev.value = revNum;
      } 
     
 });    