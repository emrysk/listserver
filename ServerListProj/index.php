<!-- php
Document   : index.php
Created on : Sep 24, 2013, 3:05:51 PM
Author     : EmrysK
-->
<!DOCTYPE html>
<?php 

session_start();

include "Classes/config.php";
include "Classes/database.php";

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Server List - Beta</title>
        <link rel="stylesheet" type="text/css" href="list-style.css">
    </head>
    <body>
        <div class="titlebar tablehead">
            <div>
                <div class="button"> <a href="">Link</a> </div>
                <div class="button"> <a href="">Link</a> </div>
                <div class="button"> <a href="">Link</a> </div> 
                <div class="button"> <a href="">Link</a> </div>
                
                <?php 
                if (!empty($_SESSION['user']) && !empty($_SESSION['userid'])) 
                {
                    $account = "<div class='loginbtn'><a href=account.php>" . $_SESSION['user'] ."</a></div>";
                    echo $account;
                }
                else {
                    echo "<div class='loginbtn'><a href=http://ccstaff.net/login.php>Login</a></div>";
                }
                ?>
            </div> 
        </div>
        
        <div class="headerbar">
            ServerListSite.com
        </div>

        <div class="premium"> 
            
        </div>
        
         <div class="container">
             <div class="Divider"></div>
             <div class="tablehead topColumn">
                 <h1>Server Listings</h1>
             </div>
             <div class="ListingRow">
                 <div class="floatleft"><img src="cclogo-468x60.gif"></div>
                 <div class="floatleft">Status: Online IP: play.abcd.xyz<BR>
                 Players Online: xx/xxx<BR>Votes this month: xxx<BR>All-time votes: xxx</div>
             </div>
             <div class="Divider"></div>
         </div>

        
        <!-- SideBar with 120x600 Google AdSense Ad -->
        <div class="SideBar">
            <div style="height:600px; width:300px; background-color: #787F6A; padding: 5px; text-align: center;">AdSense</div>
        </div>
    </body>
</html>
