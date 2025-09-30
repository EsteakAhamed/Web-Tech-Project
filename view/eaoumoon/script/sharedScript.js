function getFieldText (id) {
    const val= document.getElementById(id).value;
    return val
}

function span(id, text){
     document.getElementById(id).innerHTML= text
     document.getElementById(id).style.color="red"  
}