
// ______________________________________________SideBar_____________________________________________________

function dropsubmenu(button){    //aru menu vaye this attribute le garda milxa rakhna
    button.nextElementSibling.classList.toggle("show");  //Css ko show wala lai refer garxa yesle
    //button ko nextsibling =submenu.vanneclasskolist(li)lai.toggleproperyusegareko.css property

    button.classList.toggle("rotate");

    //since on closing the submenu contents are still visible so on submenu . When clicking icons on the submenu the sidebar should open

if(sidebar.classList.contains("close")){
    sidebar.classList.toggle("close");
    togglebutton.classList.toggle("rotate");


}

}

const togglebutton = document.getElementById("toggle-button");
const sidebar = document.getElementById("sidebar");

function togglesidebar(){
    sidebar.classList.toggle("close");
    togglebutton.classList.toggle("rotate");

    
    Array.from(sidebar.getElementsByClassName("show")).forEach(ul=>{
        ul.classList.remove("show");
        ul.previousElementSibling.classList.remove("rotate");
    })
}



// __________________________________SIDEBAR ENDS___________________________________
