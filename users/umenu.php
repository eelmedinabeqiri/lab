<head>
    <link rel="stylesheet" href="css/umenu.css">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>

<body>
    <div class="main-container">
        <div class="main">
           
            <div class="links">
            <div class="search">
                <form action="displaysearch.php" method="POST" id="form">
                <input type="text" id="search" placeholder=" Search..." name="search" style="border-radius:15px; ">
                <div id='button'>
                <button name="submit" id="searchbttn" style="background-color:transparent; border:none; margin:0px 30px;"><img src='../pictures/search.png' /></button>
                </div>
            </form>
            </div>
          
        
            <div class="logout"> <button class="logOut" onclick="window.location.href='LogOut.php'">Log Out</button></div>
           
        </div>
    </div>
</body>


