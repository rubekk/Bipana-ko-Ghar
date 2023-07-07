const filterBottom=document.querySelector(".filter-bottom");
const filterTxt=document.querySelector(".filters-txt");
const select=document.querySelector("select");
const selectForm=document.querySelector(".select-form");

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
const handleSelect=()=>{
    selectForm.submit();
}

filterTxt.addEventListener("click", handleFilter);
select.addEventListener("change",handleSelect);