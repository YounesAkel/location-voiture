//ajouter et supprimer les propriéter de la class 'active' aux elements de 'navigation' et de 'main'
let toggle= document.querySelector('.toggle');
let navigation=document.querySelector('.navigation');
let main=document.querySelector('.main');
toggle.onclick=function()
{
    navigation.classList.toggle('active');
    main.classList.toggle('active');
  
}


//ajouter et supprimer les effets des membres de la liste non ordonnées une fois sont toucher par le curseur en définissant les propriéter de la class "hovered" dans le fichier css qui est ajouter aux éléments par ce effet.
/*let list = document.querySelectorAll('.navigation li');
function activeLink(){
    list.forEach((item)=>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item)=>
    item.addEventListener('mouseover',activeLink));*/