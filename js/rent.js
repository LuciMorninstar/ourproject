
const Clickedbox = JSON.parse(localStorage.getItem("Clickedbox"));
const Clickedbox2 = JSON.parse(localStorage.getItem("Clickedbox2"));
const clicked_add = JSON.parse(localStorage.getItem("clicked_add"));


 
if(Clickedbox){
    document.querySelector("#hostel_name").value = Clickedbox.hostel_name;
    // document.querySelector(".hostel_name").textContent = Clickedbox.hostel_name;
    document.querySelector("#address").value = Clickedbox.hostel_address;
    // document.querySelector("#d   escribe").textContent = Clickedboxz.intro;
    document.querySelector("#price").value = Clickedbox.price;

    // localStorage.removeItem("Clickedbox");
    

}
else if(Clickedbox2){
    document.querySelector("#hostel_name").value = Clickedbox2.hostel_name2;
    document.querySelector("#address").value = Clickedbox2.hostel_address2;
    document.querySelector("#price").value = Clickedbox2.price2;


}

else if(clicked_add){
    document.querySelector("#hostel_name").value = clicked_add.hostel_name;
    document.querySelector("#address").value = clicked_add.hostel_address;
    document.querySelector("#price").value = clicked_add.hostel_price;


}




const rentbtn_clicked = document.querySelector("#pay");


rentbtn_clicked.addEventListener("click",()=>{

    const fname = document.querySelector("#first_name").value;
    const lname = document.querySelector("#last_name").value;
    const email = document.querySelector("#email").value;
    const number = document.querySelector("#number").value;
    const hostel_name = document.querySelector("#hostel_name").value;
    const address = document.querySelector("#address").value;
    const beds = document.querySelector(".beds").value;
    const booking_date = document.querySelector("#booking_date").value;
    const arrival_date = document.querySelector("#arrival_date").value;
    const price = document.querySelector("#price").value;


const rentvalues = {

fname : fname,
lname : lname,
email : email,
number : number,
hostel_name : hostel_name,
address : address,
beds : beds,
booking_date : booking_date,
arrival_date : arrival_date,
price : price


}
localStorage.setItem("rentkovalue",JSON.stringify(rentvalues));
  
    // console.log(rentvalues);
    


})














 




