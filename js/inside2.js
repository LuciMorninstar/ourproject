


// ____________________map scroll________________________
const map_view_scroller = document.getElementById("map_view_scroller");

map_view_scroller.addEventListener("click",()=>{
    const map = document.getElementById("map");
    map.scrollIntoView({behavior:"smooth"});


})


// _________________________________FEATURING_OINES CLICKEDBOX1__________________

const Clickedbox2 = JSON.parse(localStorage.getItem("Clickedbox2"));

if(Clickedbox2){
    document.querySelector(".hostel_name2").textContent = Clickedbox2.hostel_name2;
    document.querySelector(".hostel_address2").textContent = Clickedbox2.hostel_address2;
    document.querySelector("#describe2").textContent = Clickedbox2.intro2;


    // localStorage.removeItem("Clickedbox2");
}