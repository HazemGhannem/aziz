let submit=document.getElementById("submit");
submit.addEventListener("click",(e)=>{
const specialChars = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

let duree=document.getElementById("duree").value;
let nom=document.getElementById("nom").value;
let errorDuree=document.getElementById("errorDuree");
let errorNom=document.getElementById("errorNom");
errorDuree.innerText="";
errorNom.innerText="";
if(duree<=0){
    errorDuree.innerText="valeur de duree incorrecte";
    e.preventDefault();
}
if(specialChars.test(nom)){
    errorNom.innerText="veuilez ne pas utiliser des characteres speciaux";
    e.preventDefault();
}



});