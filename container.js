
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

fetch("improved2.json")
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






const sidebar = document.getElementById("sidebar");
const login = document.querySelector(".login")
const userlogin = document.querySelector(".userlogin");
const container = document.querySelector(".container");
// const filterbox = document.querySelector(".filterbox");
const top_offers = document.querySelector(".top_offers");
const swipe = document.querySelector(".swiper");
const social_media = document.querySelector(".social_media");
const close_btn = document.querySelector(".close_btn");
// const decrease = document.getElementById("decrease");    // noofrooms ko - button

// _______________________________


const enable_blur_on =[ swipe,top_offers,container,social_media,sidebar];


login.addEventListener("click",()=>{
    userlogin.classList.add("show");
    document.body.classList.add("disablescroll");
                
    

    enable_blur_on.forEach((element=>{
        element.classList.add("enableblur");
    }))
})


// _____________________________________


close_btn.addEventListener("click",()=>{
    userlogin.classList.remove("show");
     document.body.classList.remove("disablescroll");

    enable_blur_on.forEach((element=>{
        element.classList.remove("enableblur");
        
    }))
  


})

// ___________________________________________loginbutton name change as per username

const login_button = document.getElementById("login_button");
// const yourname = document.getElementById("yourname")   // -----register ko name--------------
// const login_name = document.getElementById("login_name");  //-------container ko login ko p---

// login_button.addEventListener("click",()=>{

//     login_name.style.display = "none";

//     const nawa = yourname.value;

//     login_name.textContent = nawa;







// })


// _______________________________________refere to registr_________________ yo check ani firi garni____

const refer_to_register = document.querySelector(".refer_to_register");
const register = document.querySelector(".register");

refer_to_register.addEventListener("click",()=>{
    register.classList.add("show");
    document.body.classList.add("disablescroll");
    userlogin.classList.remove("show");
    




})

const refer_to_login = document.querySelector(".refer_to_login");
const close_register_btn = document.querySelector(".close_register_btn")

close_register_btn.addEventListener("click",()=>{

    register.classList.remove("show");
    userlogin.classList.remove("show");
    document.body.classList.remove("disablescroll");

    enable_blur_on.forEach(element=>{
        element.classList.remove("enableblur");
    })

})

// ________________________________Refer to login___________________

refer_to_login.addEventListener("click",()=>{

register.classList.remove("show");
userlogin.classList.add("show");



})



login_button.addEventListener("click",()=>{
const email = document.getElementById("email").value.trim();
const password = document.getElementById("password").value.trim();
const Confirm_Password = document.getElementById("Confirm_Password").value.trim();
const yourname= document.getElementById("yourname").value.trim();


    // if(!email.endsWith("@gmail.com")){
    //     alert("Email must contains @gmail.com");
    // }

    if(password !== Confirm_Password){
        alert("Passwords do not match") ;
        return;                                           // need to stop the execution if password is incorrect

    }

    localStorage.setItem("yourname", yourname);
    localStorage.setItem("email", email);
    localStorage.setItem("password", password);
    


})

const userlogin_login_button = document.getElementById("userlogin_login_button");



userlogin_login_button.addEventListener("click",()=>{

    const login_email = document.querySelector(".login_email").value;
const login_password = document.querySelector(".login_password").value;

 

    //obtain gareko local storage bata
    const stored_email = localStorage.getItem("email");
    const stored_password = localStorage.getItem("password");

    if(login_email === stored_email && login_password === stored_password){
        alert("Login successful");

    
    const savedname = localStorage.getItem("yourname");

    login_name.textContent = "";
    login_name.textContent = savedname;


    }


    else{
        alert("Invalid username or password");
    }

})




// _______________________________ADDED IN USERLOGIN__________________

const login_as_admin = document.querySelector("#login_as_admin");
const adminlogin = document.querySelector(".adminlogin");
const close_admin_btn = document.querySelector(".close_admin_btn");

login_as_admin.addEventListener("click",()=>{

    adminlogin.classList.add("show");
    userlogin.classList.remove("show");

    enable_blur_on.forEach((element=>{
        element.classList.add("enableblur");
    }))

   

})


close_admin_btn.addEventListener("click",()=>{
    adminlogin.classList.remove("show");
     document.body.classList.remove("disablescroll");

    enable_blur_on.forEach((element=>{
        element.classList.remove("enableblur");
        
    }))
  


})





