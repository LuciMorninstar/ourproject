<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sidebar.css">

</head>
<body>


    
        <!-- ----------------------------------------------------SIDE BAR----------------------------------- -->
        <aside id ="sidebar">
            <ul>
                <li>
                    <!-- <span>ValleyStay</span> -->
                    <button onclick=togglesidebar() id="toggle-button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="29px" viewBox="0 -960 960 960" width="29px" fill="#e8eaed"><path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/></svg>  
                    </button>
                </li>


                
                <li class="active">
                    <a href="home.html">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                        <span>Home</span>
            </a>
        </li>

        <li>
            <a href="Top-offers.html">  
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/></svg>    

                <span>Top-Offers</span>
            </a>
        </li>

        
        <li>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z"/></svg>
                <span>Top-Hostels</span>
            </a>
        </li>
        
        
        <li>
            <button onclick =dropsubmenu(this) class="dropdown-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h240v80H120Zm0-200v-80h480v80H120Zm0-200v-80h720v80H120Z"/></svg>
                <span>Sort By</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>

            </button>
            <!-- <ul class="submenu show"> -->
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
                               <!-- <button>hello</button> -->

                             <button type="submit" id = "filter_search" name = "filter_search">Filter</button>
                               
                            </div>
                        </ul>
                        </li>

                    



                    

                <!-- <li><a href="#">Amenities</a></li> -->
                <li><a href="#">Ratings</a></li>
            </div>
            </ul>
          
        </li>
        
        

    </ul>


</aside>


   
<script src="../js/sidebar.js" defer></script>
</body>
</html>