var nume=document.querySelector("#nume");
var buton=document.querySelector("#validare");
var p=document.querySelector("#p");
buton.addEventListener("click",arata,false);
function arata () {
	p.textContent=nume.value;
}

