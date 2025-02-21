
// ______________________________________________SWIPER_______________________________________________

// const swipe = document.querySelector(".swiper");


const swiper = new Swiper('.swiper', {
    loop: true,
    direction: 'horizontal',
    slidesPerView: 3, // Show 4 slides at a time
    spaceBetween:2, // Space between slides in pixels
    centeredSlides: true,
    
    pagination: {
        el: '.swiper-pagination',
        clickable: true,    
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


   
});

// _________________________________________SWIPER ENDS_________________________________________




// _____________TOP OFFERS CLICKED BOX____________________________

const boxes = document.querySelectorAll(".box");

boxes.forEach((box)=>{

    box.addEventListener("click",()=>{

        const boxdata = {

            hostel_name: box.querySelector(".hostel_name").textContent,
            hostel_address: box.querySelector(".hostel_address").textContent,
            intro : box.querySelector(".intro").textContent


        }
        localStorage.setItem("Clickedbox", JSON.stringify(boxdata));
    })


  

})


// _____________FEATURING ONES  CLICKED BOX____________________________

const boxes2 = document.querySelectorAll(".box1");

boxes2.forEach((box)=>{

    box.addEventListener("click",()=>{

        const boxdata2 = {
            hostel_name2 :box.querySelector(".hostel_name1").textContent,
            hostel_address2 :box.querySelector(".hostel_address1").textContent,
            intro2: box.querySelector(".intro1").textContent
        };

        localStorage.setItem("Clickedbox2", JSON.stringify(boxdata2));

    })
})


const boxes3 =  document.querySelectorAll(".box3");
// console.log(boxes3);

boxes3.forEach((box)=>{

    box.addEventListener("click", ()=>{

        const details = {

            // hostel_image: box.querySelector(".hostel_image3").src,
            hostel_name : box.querySelector(".hostel_name3").textContent,
            hostel_address : box.querySelector(".hostel_address3").textContent,
            hostel_price: box.querySelector(".rent3").textContent
           


        }
        // console.log(details.hostel_name);
        

        localStorage.setItem("clicked_add", JSON.stringify(details));





    })

    


})









// ____________________TOP OFFERS____________________________________

fetch("../json/Top_offers.json")
.then(response=>{
    if(!response.ok){
        throw new Error("Status code  ${response.status}found");

    }
    return response.json();
})
.then(data=>{
    data.forEach((hostel,index)=>{
        // console.log(hostel.price);
        document.querySelectorAll(".hostel_name")[index].textContent = hostel.hostel_name;
        document.querySelectorAll(".hostel_address")[index].textContent = hostel.hostel_address;
        document.querySelectorAll(".hostel_image")[index].src = hostel.hostel_image;
        document.querySelectorAll(".intro")[index].textContent = hostel.intro;
        document.querySelectorAll(".status")[index].textContent = hostel.status;
        document.querySelectorAll(".rent")[index].textContent = `NRs. ${hostel.price}`;


    })

})
 .catch(error =>console.error(error));


// __________________________________FEATURING ONES____________________________

fetch("../json/featuring_ones.json")
.then(response=>{
    if(!response.ok){
        throw new Error("Status code  ${response.status} found");

    }
    return response.json();
})
.then(data=>{
    data.forEach((hostel,index)=>{
        // console.log(hostel.price);
        document.querySelectorAll(".hostel_name1")[index].textContent = hostel.hostel_name;
        document.querySelectorAll(".hostel_address1")[index].textContent = hostel.hostel_address;
        document.querySelectorAll(".hostel_image1")[index].src = hostel.hostel_image;
        document.querySelectorAll(".intro1")[index].textContent = hostel.intro;
        document.querySelectorAll(".status1")[index].textContent = hostel.status;
        document.querySelectorAll(".rent1")[index].textContent = `NRs. ${hostel.price}`;


    })

})
 .catch(error =>console.error(error));



//___________________________REFER TO PAYMENT GATEAWAY_____________________________

