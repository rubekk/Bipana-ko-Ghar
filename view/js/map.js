// query selectors
const coordsInp=document.querySelector(".coords-inp");
const selectBtn=document.querySelector(".select");
const coordsDisplay=document.querySelector(".coords-display");
const submitBtn=document.querySelector(".submit");

const map = L.map('map').setView([27.675615, 85.322543], 12);
let coords=[];
let coordsSelected=false;
let mapMarker;

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// functions
const handleMapClick=e=>{
    if(mapMarker) map.removeLayer(mapMarker);
    
    coords=[map.mouseEventToLatLng(e.originalEvent).lat, map.mouseEventToLatLng(e.originalEvent).lng];
    mapMarker=L.marker(coords).addTo(map);

    selectBtn.style.display="flex";
}
const handleSelectClick=e=>{
    e.preventDefault();
    if(mapMarker && coords){
        coordsDisplay.innerText=`Selected coordinates is [${coords[0].toFixed(4)}, ${coords[1].toFixed(4)}].`;
        coordsDisplay.style.display="block";
        coordsSelected=true;
        coordsInp.value=coords;
    }
}
const handleSubmitClick=e=>{
    if(!coordsSelected) e.preventDefault();
}

// event listeners
selectBtn.addEventListener("click", handleSelectClick);
submitBtn.addEventListener("click", handleSubmitClick);
map.addEventListener("click", handleMapClick);