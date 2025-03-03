
// ____________________map scroll________________________
const map_view_scroller = document.getElementById("map_view_scroller");

map_view_scroller.addEventListener("click",()=>{
    const map = document.getElementById("map");
    map.scrollIntoView({behavior:"smooth"});


})




const clicked_add = JSON.parse(localStorage.getItem("clicked_add"));

if(clicked_add){
    document.querySelector(".hostel_name3").textContent = clicked_add.hostel_name;
    document.querySelector("#hostel_name3").textContent = clicked_add.hostel_name;
    document.querySelector(".hostel_address3").textContent = clicked_add.hostel_address;
    document.querySelector("#describe2").textContent = clicked_add.hostel_intro;
    // document.querySelector("#describe2").textContent = Clickedbox2.intro2;


    // localStorage.removeItem("Clickedbox2");
}