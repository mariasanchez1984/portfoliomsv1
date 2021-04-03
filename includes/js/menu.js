/* Para el menú */
const btnMenu = document.querySelector("#btnMenu"); 
const menu = document.querySelector("#menu"); /* Elementos que no van a cambiar y los selecciono */
btnMenu.addEventListener("click", function() { /* Al hacer click en el botón de menú, escucha al evento "click" y ejecuta una función */
    menu.classList.toggle("mostrar"); /* A menú se le agrega la clase "mostrar" */    
});
/* Para el menú desplegable */
const subMenuBtn = document.querySelectorAll(".submenu-btn"); 
for (let i=0; i < subMenuBtn.length; i++) { /* Creo un for para que recorra el submenú, siendo menor y para que lo repita dependiendo de los que haya */
    subMenuBtn[i].addEventListener("click", function() { /* Detecto en cual se hizo click, y se agrega el evento y a este, le hago la función */
        if (window.innerWidth < 1024) { /* Para cuando el ancho de la ventana sea menor a 1024px */
            const subMenu = this.nextElementSibling; /* Selecciona al submenú siguiente del que se le ha dado "click", es decir a <ul class="submenu" */
            const height = subMenu.scrollHeight;
            /* Donde se realiza el juego de mostrar y ocultar */
            if (subMenu.classList.contains("desplegar")) {
            subMenu.classList.remove("desplegar"); /* Cuando contiene la clase "desplegar" para identificar al elenento que tenga ese estilo */
            subMenu.removeAttribute ("style");
            } else {
            subMenu.classList.add("desplegar");
            subMenu.style.height = height + "px";
            }
        }
    });
}