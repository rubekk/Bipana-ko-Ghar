const filterBottom=document.querySelector(".filter-bottom");
const filterTxt=document.querySelector(".filters-txt");

let showing=false;

const handleFilter=()=>{
    showing=!showing;
    if(showing){
        filterBottom.className="filter-bottom";
    }
    else{
        filterBottom.className="filter-bottom hide";
    }
}

filterTxt.addEventListener("click", handleFilter);