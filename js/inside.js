// ____________________map scroll________________________
const map_view_scroller = document.getElementById("map_view_scroller");

map_view_scroller.addEventListener("click",()=>{
    const map = document.getElementById("map");
    map.scrollIntoView({behavior:"smooth"});


})

// ___________________________   TOP _OFFERS CLICKEDBOX_______________________________

const Clickedbox = JSON.parse(localStorage.getItem("Clickedbox"));
 
if(Clickedbox){
    document.querySelector(".hostel_name").textContent = Clickedbox.hostel_name;
    document.querySelector("#hostel_name").textContent = Clickedbox.hostel_name;
    document.querySelector(".hostel_address").textContent = Clickedbox.hostel_address;
    document.querySelector("#describe").textContent = Clickedbox.intro;

    // localStorage.removeItem("Clickedbox");

}



