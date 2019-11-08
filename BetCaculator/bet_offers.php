 <?php
    include_once("header.php");
 ?>
    <style>
      /* heading */
      .main-heading {
        text-align: center;
        color: #9fedd7;
        font-family: "Titillium Web";
        font-size: 36px;
        font-weight: 200;
        letter-spacing: 0.75px;
        line-height: 55px;
      }

      /* Toggle Button */
      .bet-offer_toggle {
        display: flex;
        justify-content: center;
        margin-top: 26px;
      }

      .bet-offer_toggle input[type="checkbox"] {
        display: none;
      }
      .bet-offer_toggle label {
        cursor: pointer;
      }

      .bet-offer_toggle label .toggle-betOffer_track {
        display: block;
        height: 31px;
        width: 338px;
        background-color: #024146;
        border-radius: 40px;
        position: relative;
        margin-bottom: 15px;
      }

      .bet-offer_toggle .toggle-betOffer_track:before {
        content: "";
        display: inline-block;
        height: 31px;
        /* width: 145.83px; */
        width: 168.83px;
        background-color: #9fedd7;
        border-radius: 40px;
        position: absolute;
        top: 0;
        right: 170px;
        transition: right 0.2s ease-in;
      }

      .bet-offer_toggle
        input[type="checkbox"]:checked
        + label
        .toggle-betOffer_track:before {
        background-color: #9fedd7;
        right: 0;
      }

      .toggle-betOffer_track2 p {
        position: absolute;
        z-index: 3;
        font-size: 10px;
        letter-spacing: 1.63px;
        line-height: 15px;
        text-transform: uppercase;
      }

      .toggle-betOffer_track2 p:first-child {
        right: 3%;
        top: 22%;
        color: rgba(159, 237, 215, 0.6);
      }

      .toggle-betOffer_track2 p:last-child {
        left: 12%;
        top: 25%;
        color: #024146;
      }

      /* Card */
      .card {
  background: #024146;
  width: 320px;
  margin-bottom: 2rem;
}

.card-red{
  background: #AE1515;
}

.card-title {
  padding: 12px;
  display: flex;
  justify-content: space-between;
  align-content: center;
  align-items: center;
}

.card-title h1 {
  color: #ffffff;
  font-family: "Titillium Web";
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 0.25px;
  line-height: 27px;
  margin: 0;
}

.claim-button {
  /* height: 15px; */
  width: 95px;
  font-family: "Titillium Web";
  font-size: 10px;
  line-height: 15px;
  font-weight: 600;
  transition: all 0.3s ease-in-out;
  text-align: center;
  letter-spacing: 2px;
  padding: 6px 6px;
  text-decoration: none !important;
  border-radius: 2px;
  color: #024146;
    background: #FBE180;
}

.claim-button:hover {
  color: #fff9c7;
  background: rgba(255, 255, 255, 0.1);
}

.card-description {
  background: rgba(255, 255, 255, 0.1);
  padding: 12px;
  color: #fff;
}

.card-description p {
  margin: 0;
  height: 81px;
  width: 256px;
  color: #ffffff;
  font-family: "Titillium Web";
  font-size: 18px;
  letter-spacing: 0.25px;
  line-height: 27px;
}

.card-description > span {
  height: 17px;
  width: 177px;
  color: #ffffff;
  font-family: "Titillium Web";
  font-size: 8px;
  font-weight: bold;
  letter-spacing: 1.3px;
  line-height: 12px;
}

.cards{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-row-gap: 3rem;
  grid-auto-rows: auto;
  grid-template-rows: 1fr;
}

.custom-container{
  max-width: 1100px;
  margin: auto;
}

.free_bet_panel .panel{
    border-bottom: 0px !important;
    padding-top: 0 !important;
}
.free_bet_panel .panel-heading{
    background-color: rgba(237,234,229,0.1);
    padding: 0 13px;
}
.free_bet_panel .panel-title{
    height: 17px;	
    width: 177px;	
    color: #FFFFFF;	
    font-family: "Titillium Web";	
    font-size: 8px;	
    font-weight: bold;	
    letter-spacing: 1.3px;	
    line-height: 12px;
    margin-bottom: 0px;
}
.free_bet_panel .panel-collapse{
    	background-color: #024146;
}

.free_bet_panel .panel-collapse-red{
  background: #AE1515;
}

.free_bet_panel .panel-collapse .panel-body{
     height: auto	width: 256px;	
    color: #FFFFFF;	
    font-family: "Titillium Web";	
    font-size: 10px;	
    font-weight: 600;	
    letter-spacing: 1.25px;	
    line-height: 13px;
    padding: 5px 13px;
    margin-bottom: 0px;
}

/* Red Cards */
.red-cards{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  display: none;
}



/* @media(max-width: 850px and min-width: 769px) {
  .cards{
  grid-template-columns: 1fr 1fr;
} */

@media(max-width: 1200px and min-width: 1001px){
  .card-description p {
  width: 100%;
}

.card{
  width: 100%;
}
}

@media(max-width: 1000px) {
  .cards{
    grid-column-gap: 1rem;
    grid-row-gap: 1rem;
   grid-template-columns: 1fr 1fr;
}

.red-cards{
  grid-column-gap: 1rem;
  grid-row-gap: 1rem;
  grid-template-columns: 1fr 1fr;
}

.card-description p {
  width: 100%;
}

.card{
  width: 100%;
}

}

@media(max-width: 500px) {
  .cards{
   grid-template-columns: 1fr;
}
.red-cards{
  grid-template-columns: 1fr;
}

}
    </style>
  <h1 class="main-heading">Free Betting Offers (H1)</h1>
    <!-- Toggle button -->
    <div class="bet-offer_toggle">
      <input type="checkbox" id="bet-toggle-button" name="bet-offer_toggle" />
      <label for="bet-toggle-button" id="bet-toggle-label">
        <span class="toggle-betOffer_track toggle-betOffer_track2">
          <p id="rule">Free bets no deposit</p>
          <p id="off2">Free Bets</p>
        </span>
      </label>
    </div>

    <div class="cards custom-container">
       <div>
            <div class="card">
                <div class="card-title">
                  <h1>LOGO HERE</h1>
                  <a class="claim-button" href="#">CLAIM OFFER</a>
                </div>
                <div class="card-description">
                  <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                    <!--<span>+ TERMS & CONDITIONS</span>-->
                </div>
                <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_1" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_1" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
              </div>

              <div class="card">
                  <div class="card-title">
                    <h1>LOGO HERE</h1>
                    <a class="claim-button" href="#">CLAIM OFFER</a>
                  </div>
                  <div class="card-description">
                    <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                  </div>
                <!---TOOTLE-->
                <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_2" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_2" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                </div>

                <div class="card">
                    <div class="card-title">
                      <h1>LOGO HERE</h1>
                      <a class="claim-button" href="#">CLAIM OFFER</a>
                    </div>
                    <div class="card-description">
                      <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                       
                    </div>
                    <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_3" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_3" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                  </div>

                  <div class="card">
                      <div class="card-title">
                        <h1>LOGO HERE</h1>
                        <a class="claim-button" href="#">CLAIM OFFER</a>
                      </div>
                      <div class="card-description">
                        <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                         
                      </div>
                      <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_4" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_4" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                    </div>

        </div>

        <div>
            <div class="card">
                <div class="card-title">
                  <h1>LOGO HERE</h1>
                  <a class="claim-button" href="#">CLAIM OFFER</a>
                </div>
                <div class="card-description">
                  <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                  
                </div>
                <!---TOOTLE-->
                <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_5" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_5" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
              </div>

              <div class="card">
                  <div class="card-title">
                    <h1>LOGO HERE</h1>
                    <a class="claim-button" href="#">CLAIM OFFER</a>
                  </div>
                  <div class="card-description">
                    <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                      
                  </div>
                  <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_6" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_6" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                </div>

                <div class="card">
                    <div class="card-title">
                      <h1>LOGO HERE</h1>
                      <a class="claim-button" href="#">CLAIM OFFER</a>
                    </div>
                    <div class="card-description">
                      <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                        
                    </div>
                    <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_7" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_7" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                  </div>

                  <div class="card">
                      <div class="card-title">
                        <h1>LOGO HERE</h1>
                        <a class="claim-button" href="#">CLAIM OFFER</a>
                      </div>
                      <div class="card-description">
                        <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                          
                      </div>
                      <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_8" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_8" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                    </div>
        </div>
        <div>
            <div class="card">
                <div class="card-title">
                  <h1>LOGO HERE</h1>
                  <a class="claim-button" href="#">CLAIM OFFER</a>
                </div>
                <div class="card-description">
                  <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                    
                </div>
                <!---TOOTLE-->
                <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_9" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_9" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
              </div>

              <div class="card">
                  <div class="card-title">
                    <h1>LOGO HERE</h1>
                    <a class="claim-button" href="#">CLAIM OFFER</a>
                  </div>
                  <div class="card-description">
                    <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                     
                  </div>
                  <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_10" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_10" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                </div>

                <div class="card">
                    <div class="card-title">
                      <h1>LOGO HERE</h1>
                      <a class="claim-button" href="#">CLAIM OFFER</a>
                    </div>
                    <div class="card-description">
                      <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                       
                    </div>
                    <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_11" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_11" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                  </div>

                  <div class="card">
                      <div class="card-title">
                        <h1>LOGO HERE</h1>
                        <a class="claim-button" href="#">CLAIM OFFER</a>
                      </div>
                      <div class="card-description">
                        <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                          
                      </div>
                      <!---TOOTLE-->
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_12" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_12" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    <!---TOOTLE-->
                    </div>
        </div>    
    </div>

  <div class="red-cards">
    <!-- 1st column -->
      <div>
      <div class="card card-red">

                      <div class="card-title">
                        <h1>LOGO HERE</h1>
                        <a class="claim-button" href="#">CLAIM OFFER</a>
                      </div>
                      <div class="card-description">
                        <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                          
                      </div>
                   
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_red-1" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_red-1" class="panel-collapse panel-collapse-red collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    
                    </div>

      </div>

      <!-- 2nd Column -->

      <div>
      <div class="card card-red">
        
                      <div class="card-title">
                        <h1>LOGO HERE</h1>
                        <a class="claim-button" href="#">CLAIM OFFER</a>
                      </div>
                      <div class="card-description">
                        <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                          
                      </div>
                   
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_red-2" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_red-2" class="panel-collapse panel-collapse-red collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    
                    </div>

      </div>

      <!-- 3rd Column -->

      <div>
      <div class="card card-red">
        
                      <div class="card-title">
                        <h1>LOGO HERE</h1>
                        <a class="claim-button" href="#">CLAIM OFFER</a>
                      </div>
                      <div class="card-description">
                        <p><span style="font-weight: bold;"> £10 and get £30</span> in free bets with <Company> when you visit via The Bet Calculator.</p>
                          
                      </div>
                   
                 <div class="panel-group free_bet_panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 data-toggle="collapse" data-parent="#accordion" href="#term_red-3" class="panel-title expand">
                               <div class="right-arrow pull-right">+</div> TERMS & CONDITIONS
                            </h4>
                          </div>
                          <div id="term_red-3" class="panel-collapse panel-collapse-red collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                          </div>
                        </div>
                    </div>
                    
                    </div>

      </div>
  </div>



     <div class="row" style="padding: 20px 0px;">
      
      <div class="container">
      <h2 class="calculater_glossary">FAQs</h2>
      <hr style="border-color: #FFF9C7; margin-bottom: 0px;" />
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div> Win or Each Way
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div> Decimals, Fractions, American
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div> What is a free bet?
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div> What is a free bet?
                </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>A free bet is, or should in theory, be exactly that, a bet which is given to you for free which you can then place with a chance to win real money. In reality though it is more complicated than that with terms and conditions varying with every bookmaker around their free bet or sign up offers.</p>
                    <p>We try to explain the free bet and sign up bonus offers here for you as much as possible given the space but please click through to the <a href="#">online bookmakers</a> and read their terms and conditions in full before signing up. 
                    </p>
                    <p>Many of the betting offers will require you to deposit money first and place a bet. This first bet or qualifying bet will often need to be placed at certain odds. For example this condition may read something like this 
                    </p>
                    <p>“the qualifying bet must have minimum odds of 4/5”
                    </p>
                    <p>Often the first bet you place is the qualifying bet and the amount of that bet will be matched (up to a certain amount) with a free bet of the same amount. 
                    </p>
                    <p>There are many variations though from the more simple bet £10 get £10 free bet to Bet £10 get £20, <a href="#">Bet £10 get £30 in free bets</a> or even bet £20 get £10. 
                    </p>
                    <p>Normally the main sign up offer for the bookmaker is available to use on all sports. But be careful to check as sometimes offers are for horse racing or football only. If you are looking for good bets to use on the qualifying stake to get your free bet, then check out our top tipsters predictions including our horse racing tips here.</p> 
                </div>
              </div>
            </div>
        </div>
      </div>
      </div>
    
    
    
    
    
    
    <script>
       
document
  .querySelector("#bet-toggle-label")
  .addEventListener("click", function() {
    if (document.getElementById("bet-toggle-button").checked) {
      document.getElementById("rule").style.color = "rgba(159,237,215,0.6)";
      document.getElementById("off2").style.color = "#024146";
      $(".red-cards").css("display", "none");
      $(".cards").css("display", "grid");
    } else {
      document.getElementById("rule").style.color = "#024146";
      document.getElementById("off2").style.color = "rgba(159,237,215,0.6)";
      $(".cards").css("display", "none");
      $(".red-cards").css("display", "grid");
    }
  });
    </script>
<?php
    include_once("footer.php");
 ?>