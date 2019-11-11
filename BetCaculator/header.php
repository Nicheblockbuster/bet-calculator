<?php
$file_path =  $_SERVER['SCRIPT_NAME'];
$file_path = explode("/",$file_path);
$current_file = $file_path[count($file_path)-1];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="lolkittens" />
    <title>Bet Calculator</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <!--<link
      href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&display=swap"
      rel="stylesheet"
    /> -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css" />
    
            
    <script
      src="https://kit.fontawesome.com/a9174587ea.js"
      crossorigin="anonymous"
    ></script>
    <script>
        $(document).ready(function() {
          console.log($(window).width());

          if($(window).width() <= 769){
             <?php
                if($current_file=="index.php"){
                ?>
                    /* $('.fre_calc').hide();
                    $('.fre_bet').show(); */
                    
                    $(".fre_calc").css("display", "none");
                    $(".fre_bet").css("display", "block");
                <?php
                }else if($current_file=="bet_offers.php"){
                ?>
                    
                         $(".fre_bet").css("display", "none");
                         $(".fre_calc").css("display", "block");                   
                     <?php
                     }
                ?>
          }else{
            
          }
          //  if($(window).width()<769){  
               
          //           else if($current_file=="bet_offers.php"){
          //           ?>
                    
          //               $(".fre_bet").css("display", "none");
          //               $(".fre_calc").css("display", "block");
                        
          //               ///$('.fre_calc').show();
          //               //$('.fre_bet').hide();
          //           <?php
          //           }
          //           ?>
          //  }else{
                
          //  }
        });
    </script>
  </head>

  <body style="background-color: #05636b;">
    <nav id="navbar">
      <!-- <a href="#default" id="logo">LOGO</a> -->
      <img
        src="/assets/logo.png"
        id="logo"
        alt="bet-calculator-logo"
        onclick="window.location='index.php';"
        style=""
      />
      <div id="navbar-right">
      <style>
      .deactive_bet_of{
        background-color: #9fedd7 !important;
      }
      .active_bet_of{
        background-color: #fbe180 !important;
      }
      </style>
      <?php
      if($current_file=="bet_offers.php"){
        $active_bet_offer = "active_bet_of";
        $deactive_bet_offer = "deactive_bet_of";
      }
      ?>
        <a class="<?php echo $deactive_bet_offer; ?> btn button-dark fre_calc" style="margin-right: 5px;"  href="index.php"> <img src="assets/Bet_Calc_Icon.png" style="width:  20px; float: left; margin: -2px 0px 0 0px;" />BET CALCULATOR</a>
        <a class="<?php echo $active_bet_offer; ?> btn button-light fre_bet"  href="bet_offers.php"> <img src="assets/Free_Bets_Icon.png" style="width:  15px; float: left; margin: -2px 0px 0 0px;" />FREE BET OFFERS</a>
        
      </div>
    </nav>

    <div class="clear_bar"></div>
    
    <div class="container container_mob" >
    