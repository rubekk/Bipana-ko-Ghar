// query selectors
const mapElem=document.querySelector("#map");
const sliderImg=document.querySelector('.slider-img');
const smallImgs=document.querySelectorAll('.small-img');

const coords=[mapElem.getAttribute("lat"),mapElem.getAttribute("long")];
const map = L.map('map').setView(coords, 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.marker(coords).addTo(map);

const removeActiveImg=index=>{
    smallImgs.forEach((img,i)=>{
        if(index!=i) img.className="small-img";
    })
}

sliderImg.src=smallImgs[0].src;
smallImgs[0].className="small-img active-img";

smallImgs.forEach((img,i)=>{
    img.addEventListener("click",()=>{
        sliderImg.src=smallImgs[i].src;
        img.className="small-img active-img";

        removeActiveImg(i);
    })
})
