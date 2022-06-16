



//Ejecutando funciones
document.getElementById("inputSearch").addEventListener("keyup", Buscador_interno);

//Buscador de contenido
bars_search = document.getElementById("ctn-bars-search");
inputSearch = document.getElementById("inputSearch");
box_search  = document.getElementById("box-search");

//Funcion para filtrado
function Buscador_interno(){
    filter = inputSearch.value.toUpperCase();
    li = box-search.getElementByTagName("li");

    //Recorriendo elementos a filtrar
    for(i = 0; i < li.length; i++){
        
        a = li[i].getElementByTagName("a")[0];
        textValue = a.textValue || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){
            
            li[i].style.display = "";

        }else{
            li[i].style.display = "none";
        }

        
    }

}
