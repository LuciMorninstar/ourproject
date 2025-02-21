
// __________________________________________SEARCH BAR___________________________



const search = document.getElementById("search");
const suggestions_list = document.getElementById("suggestions_list");

search.addEventListener("click", (e) => {
    e.stopPropagation(); 
    suggestions_list.classList.add("visible");
});

document.addEventListener("click", () => {
    suggestions_list.classList.remove("visible");
});


let hosteldata = [];

fetch("../json/improved2.json")
.then(response => response.json())
.then(data =>{
    hostelsdata = data;
    // console.log(hostelsdata);


search.addEventListener("input",(e)=>{
    const query = e.target.value.toLowerCase();
    suggestions_list.innerHTML = "";


    if(query){
        const filteredHostels = hostelsdata.filter(hostel =>
            hostel.hostel_name.toLowerCase().includes(query) ||
            hostel.hostel_address.toLowerCase().includes(query)
        );

        filteredHostels.forEach(hostel =>{
            const listItem = document.createElement("li");
            listItem.innerHTML = `
            <img src = "${hostel.hostel_image}" alt ="noimage">
            <p class ="name"> ${hostel.hostel_name}</p>
            <p class ="address"> ${hostel.hostel_address}</p>
            
            
            `;
            

            listItem.addEventListener("click", ()=>{
                localStorage.setItem("selectedHostel", JSON.stringify(hostel));
                window.location.href = "inside.php";
            });

            suggestions_list.appendChild(listItem);





        })
        




    }
})
  

})
.catch(error => console.error("error occured"));




// _______________________________________SEARCH BAR FINISHED________________________









