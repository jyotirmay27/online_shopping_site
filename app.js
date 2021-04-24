const image=document.querySelector('.image');

const tl =new TimelineMax();

tl.fromTo(image,1,{heigth:'40%'},{heigth:'100%'});