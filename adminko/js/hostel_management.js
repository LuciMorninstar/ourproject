
const add_hostel = document.querySelector(".add_hostel");
const this_svg = document.querySelector(".this_svg");
const add_hostel_details = document.querySelector(".add_hostel_details");

const Topic = document.querySelector(".Topic");

const bluring_items = [add_hostel, add_hostel_details, Topic];



add_hostel.addEventListener("click",()=>{


    add_hostel_details.classList.toggle("dekhau");
    this_svg.classList.toggle("rotation");

    // bluring_items.forEach((items)=>{

    //     items.classList.add("blur");
    // })
    

})


const close_register_btn = document.querySelector(".close_register_btn");

close_register_btn.addEventListener("click",()=>{
    add_hostel_details.classList.toggle("dekhau");
    this_svg.classList.toggle("rotation");


    
    // bluring_items.forEach((items)=>{

    //     items.classList.remove("blur");
    // })

    

    
    

    
    
 
    
})


