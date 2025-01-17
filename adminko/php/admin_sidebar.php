<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_sidebar.css">
</head>
<body>

    

        <!-- ----------------------------------------------------SIDE BAR----------------------------------- -->
        <aside id ="sidebar">
            <ul>
                <li>
                    <!-- <span>ValleyStay</span> -->
                    <button onclick=togglesidebar() id="toggle-button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="29px" viewBox="0 -960 960 960" width="29px" fill="#e8eaed"><path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/></svg>                </button>
                </li>

                <li>
                    <img src="../images/profile.avif" width="150px"  class="admin_photo" >
                    <p class="admin_name">Bibek Pandit</p>
                    <span>System_Administrator</span>
                </li>


                
                <li class="active">
                    <a href="admin_dashboard.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                        <span> Admin Dashboard</span>
            </a>
        </li>

        <li>
            <a href="user_management.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                <span>User Management</span>
            </a>
        </li>




        <li>
            <a href="hostel_management.php">  
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M80-120v-720h400v160h400v560H80Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h320v-400H480v80h80v80h-80v80h80v80h-80v80Zm160-240v-80h80v80h-80Zm0 160v-80h80v80h-80Z"/></svg>

                <span>Hostel Management</span>
            </a>
        </li>

        
       
        
<!--         
        <li>
            <button onclick =dropsubmenu(this) class="dropdown-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h240v80H120Zm0-200v-80h480v80H120Zm0-200v-80h720v80H120Z"/></svg>
                <span>Sort By</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>

            </button>
          
            <ul class="submenu" id ="firstsubmenu">
                <div>
                <li>
                    <button onclick =dropsubmenu(this) class="dropdown-button">
                    <span style="padding-left:12px;"> Range</span>
                    </button>

                    <ul class="submenu">
                        <div>
                            <li class="added">
                                
                                <input type="text" id="From"  name="From" pattern="\d*" placeholder = "From (in NRS)">
                               
                                <input type="text" id="To"  name="To" pattern="\d*" placeholder = "To (in NRS)">
                                <button type="submit" id="range_search" name="range_search">Search</button>

                            </li>
                            
                        </div>
                    </ul>
                    </li>


                    <li>
                        <button onclick =dropsubmenu(this) class="dropdown-button">
                            <span style="padding-left:12px;">Amenities</span>
                        </button>
    
                        <ul class="submenu" id="needs">
                            <div>
                               <button>Free Wifi</button>
                               <button>2 beds</button>
                               <button>Kitchen</button>
                             
                               <button>24hr Water </button>
                               <button>2 beds</button>
                               <button>Parking</button>
                               <button>Laundry</button>
                               <button>Free Cancel</button>
                           

                             <button type="submit" id = "filter_search" name = "filter_search">Filter</button>
                               
                            </div>
                        </ul>
                        </li>

                    



                    

              
                <li><a href="#">Ratings</a></li>
            </div>
            </ul>
          
        </li> -->
        
        

    </ul>


</aside>



   


<script src="../js/admin_sidebar.js" defer></script>
</body>
</html>