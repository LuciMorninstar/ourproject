

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
                    <a href="main.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                        <span>Home</span>
            </a>
        </li>

        <li>
            <a href="#featuring_ones">  
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/></svg>    

                <span>Featuring_ones</span>
            </a>
        </li>

        
        <li>
            <a href="#newly_added">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z"/></svg>
                <span>Newly Added</span>
            </a>
        </li>
        
        
        <!-- <li>
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

        <li>
            <a href="#social_media">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z"/></svg>
                <span>Our Services</span>
            </a>
        </li>

          
        <li>
            <a href="message.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M80-560q0-100 44.5-183.5T244-882l47 64q-60 44-95.5 111T160-560H80Zm720 0q0-80-35.5-147T669-818l47-64q75 55 119.5 138.5T880-560h-80ZM160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/></svg>                <span>Notification</span>
            </a>
        </li>
        
        
        

    </ul>


</aside>


   
<script src="../js/sidebar.js" defer></script>
</body>
</html>