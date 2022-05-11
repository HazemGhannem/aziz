let submit=document.getElementById("submit");
submit.addEventListener("click",(e)=>{
    
    
    let pourcentage=document.getElementById("pourcentage").value;
    let datedeb=document.getElementById("datedeb").value.split("-");
    let datefin=document.getElementById("datefin").value.split("-");
    let errorPourcentage=document.getElementById("errorPourcentage");
    let errorDate=document.getElementById("errorDate");
    errorDate.innerText="";
    errorPourcentage.innerText="";
    let yeardeb=datedeb[0];
    let monthdeb=datedeb[1];
    let daydeb=datedeb[2];
    let yearfin=datefin[0];
    let monthfin=datefin[1];
    let dayfin=datefin[2];
    if(pourcentage>100  || pourcentage<0){
        errorPourcentage.innerText="mauvaise valeur de pourcentage";
        e.preventDefault();
    }

    if(yeardeb>yearfin ){
        errorDate.innerText="mauvaise date";
        e.preventDefault();
    }else if ( monthdeb>monthfin){
        errorDate.innerTExt="mauvaise date";
        e.preventDefault();
    } else if (daydeb>dayfin){
        errorDate.innerText="mauvaise date";
        e.preventDefault();
    }

})

