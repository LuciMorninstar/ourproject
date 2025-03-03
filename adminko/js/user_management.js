


// +++++++++++++++++++++++++++++++++++++++++++++ADDED JAVASCRIPT+++++++++++++++++++++++++++++++++++++++++++++++

// ________________________________________________FOR ADD USER BUTTON_______________________________________

const add_user = document.querySelector(".add_user");
const this_svg = document.querySelector(".this_svg");
const add_user_details = document.querySelector(".add_user_details");

const Topic = document.querySelector(".Topic");
const information = document.querySelector(".information");

const bluring_items = [add_user, add_user_details, Topic, information];



add_user.addEventListener("click",()=>{


    add_user_details.classList.toggle("dekhau");
    this_svg.classList.toggle("rotation");

    // bluring_items.forEach((items)=>{

    //     items.classList.add("blur");
    // })
    

})


const close_register_btn = document.querySelector(".close_register_btn");

close_register_btn.addEventListener("click",()=>{
    add_user_details.classList.toggle("dekhau");
    this_svg.classList.toggle("rotation");

    
    // bluring_items.forEach((items)=>{

    //     items.classList.remove("blur");
    // })

    

    
    

    
    
   
    
})

document.addEventListener("DOMContentLoaded", function () {
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // Adjust for local time
    const formattedDateTime = now.toISOString().slice(0, 16);
    document.getElementById("booking_date").value = formattedDateTime;
  });




