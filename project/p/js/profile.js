var navBar = document.querySelector('.navbar');
var sec2 = document.querySelector('.profile-section-2');

sec2.style.marginTop = (navBar.offsetHeight + 20) + 'px';

var EditProfile = document.querySelector('.edit-profile');
var SaveProfile = document.querySelector('.save-profile');
var proPhoto = document.querySelector('.Edit-cam');

EditProfile.addEventListener('click',function(){
    
   proPhoto.classList.remove('show');
   this.classList.add('show');
   SaveProfile.classList.remove('show');

});

SaveProfile.addEventListener('click', function(){
    proPhoto.classList.add('show');
    this.classList.add('show');
    EditProfile.classList.remove('show');
});


var img_0 = document.querySelector('.img-0');
img_0.style.width = (img_0.parentElement.offsetWidth -10) +'px';
img_0.style.height = 250 +'px';



var proDetail = document.querySelectorAll('.pro-detail');
var img_d = document.querySelectorAll('.img-icon');
 var proDetailParent;

 for(var i=0; i<img_d.length; i++)
 {
    proDetailParent = img_d[i].parentElement;

    proDetail[i].style.width = proDetailParent.offsetWidth + 'px';
    img_d[i].style.width = proDetailParent.offsetWidth + 'px';
    img_d[i].style.height = 200 + 'px';
   
    proDetail[i].style.height = (200/2) +'px';

 }