 <?php
    include_once("header.php");
 ?>
 
 
 <div class="row">
            <div class="col-lg-12 hide_it">
                <p class="caculate_sport">Calculate Your Sport Betting Returns</p>
                <div class="spacer"></div>
            </div>
 </div>
 
 <div class="row mobile_slider" >
        <div class="col-lg-12" style="text-align: center;">
        <p class="text_white text-center" style="margin: 0px;">SELECT BET TYPE</p>
        </div>
    <iframe src="slider.php"  class="slider_iframe" scrolling="no"></iframe>
 </div>
 
      <div class="row">
        <div class="col-lg-1 col-md-1"></div>
        <div
          class="col-lg-5 col-md-5 col-sm-12 calc_btn_left"
          style=" text-align: center;"
        >
        <div class="caculate_section">
          <p class="text_white text-center">UNIT STAKE</p>
          
          <span class="price_symbols">
         	&#163; 	&#36; <br /> &#128; &#165;
          </span>
          <input
            type="text"
            placeholder="0.00"
            maxlength="4"
            class="input_field"
          />
          <hr class="unit_border"  />
            
          <!-- <div class="rectangle">
            <input
              type="button"
              class="button rect_win rectangle_btn button_active"
              value="WIN"
            />
            <input
              type="button"
              class="button rect_each rectangle_btn "
              value="EACH WAY"
            />
          </div> -->

           <!-- Toggle Button yellow color-->

           <div class="toggle-switch-yellow">
            <input type="checkbox" id="chkTest" name="chkTest" />
            <label for="chkTest" id="slider">
              <span class="toggle-track-yellow">
                <p id="each-way">Each Way</p>
                <p id="win">WIN</p>
              </span>
            </label>
          </div>

            <!-- 3 state button -->
            <div class="three-state-button-wrap">
              <div class="three-state-button">
                <input type="radio" id="state-na" name="three-state" />
                <input type="radio" id="state-on" name="three-state" />
                <input type="radio" id="state-off" name="three-state" />
  
                <label id="on" for="state-on">
                  <span class="toggle-track-three-state state state-on"
                    >Decimals <span style="color: #777573;">1.33</span></span
                  ></label
                >
                <label id="state-na" for="state-na"
                  ><span class="toggle-track-three-state state state-na" checked
                    >Fractions <span style="color: #777573;">1 / 3</span> </span
                  >
                </label>
                <label for="state-off">
                  <span class="toggle-track-three-state state state-off"
                    >American <span style="color: #777573;">-300</span> </span
                  ></label
                >
              </div>
            </div>

            <div class="toggle-switch-skyblue">
              <input type="checkbox" id="chkTest-light" name="chkTest" />
              <label for="chkTest-light" id="blue-equal">
                <span class="toggle-track-skyblue toggle-track-skyblue1">
                  <p id="equally">EQUALLY DIVIDED</p>
                  <p id="win-to-win">WIN-TO-WIN PLACE-TO-PLACE</p>
                </span>
              </label>
            </div>
            <!-- 2 -->
            <div class="toggle-switch-skyblue">
              <input type="checkbox" id="chkTest-light2" name="chkTest" />
              <label for="chkTest-light2" id="blue2-equal">
                <span class="toggle-track-skyblue toggle-track-skyblue2">
                  <p id="rule">Rule 4</p>
                  <p id="off2">OFF</p>
                </span>
              </label>
            </div>
  
        
          <div class="spacer"></div>
            <p class="text_color text-center hide_it_help">Need Help?</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 caculate_section_right" style="border-left: 1px solid rgba(159,237,215,0.15); ">
          <p class="text_white text-center">SELECT BET TYPE</p>

          <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div  class="col-lg-1 ">
                    </div>
                    <div  class="col-lg-10 col-md-12 ">
                        <div class="row">
                    
                    
                                <div class="col-lg-4 col-md-4" style="text-align: right;">
                                  <input
                                    type="button"
                                    class="button button_custom button_active"
                                    value="SINGLE"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: center;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="DOUBLE"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: left;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="TREBLE"
                                  />
                                </div>
                                <!---->
                                <div class="col-lg-4 col-md-4" style="text-align: right;">
                                  <input
                                    type="button"
                                    class="button button_custom "
                                    value="Accumulator"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: center;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Trixie"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: left;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Patent"
                                  />
                                </div>
                                <!---->
                                <div class="col-lg-4 col-md-4" style="text-align: right;">
                                  <input
                                    type="button"
                                    class="button button_custom "
                                    value="Yankee"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: center;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Canadian"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: left;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Super Yankee"
                                  />
                                </div>
                                <!---->
                                <div class="col-lg-4 col-md-4" style="text-align: right;">
                                  <input
                                    type="button"
                                    class="button button_custom "
                                    value="Heinz"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: center;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Super Heinz"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: left;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Goliath"
                                  />
                                </div>
                                <!---->
                                <div class="col-lg-4 col-md-4" style="text-align: right;">
                                  <input
                                    type="button"
                                    class="button button_custom "
                                    value="Lucky 15"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: center;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Lucky 31"
                                  />
                                </div>
                                <div class="col-lg-4 col-md-4" style="text-align: left;">
                                  <input
                                    type="button"
                                    class="button button_custom"
                                    value="Lucky 63"
                                  />
                                </div>
                                <!---->
                                
                                <div class="spacer"></div>
                                <p class="text_color_detail text-center">Single bets ... dolor sit amet, consectetur adipiscing elit. Suspendisse massa nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa nunc.</p>
                        </div>
                    </div>
                    <div  class="col-lg-1">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>

      <div class="row row_hide" style="padding: 20px 0px;">
        <div class="col-lg-12">
          <p class="text_white text-center" style="margin-top:2%;">
            SELECTIONS
          </p>
        </div>
      </div>

      <div class="row" style="padding: 0px 0px; ">
        <div class="col-lg-1 hide_it">
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 Sections_blocks">
            <div class="row" style="border-top: 1px solid #000;">
                <div class=" bg_color_1 add_after_this selection_box">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1" style="max-width: 36px !important; float: left;">
                            <p class="select_numbering">#1</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-11 col-xgreen" style="border-left:  1px solid rgba(159,237,215,0.15);">
                            <div class="row" style="border-bottom: 1px solid rgba(159,237,215,0.15); padding-bottom: 10px;">
                                <input type="button" class="button rect_win select_btn button_active" value="WON" />
                                <input type="button" class="button rect_win select_btn " value="DEAD HEAT" />
                                <input type="button" class="button rect_win select_btn " value="LOST" />
                                <input type="button" class="button rect_win select_btn " value="VOID" /> 
                                
                            </div>
                            
                            <div class="row" style="padding: 12px 0px;">
                                <div class="col-lg-5 col-md-3 col-sm-3 col-xs-3 col-dds">
                                    <p class="dds">DDS</p>
                                    <div style="clear: both;"></div>
                                    <input type="text" maxlength="1" value="1" class="input_field_select" /><span class="curvy">/</span><input type="text" maxlength="1" value="1" class="input_field_select" />
                                    <hr width="100%" style="border-color: #FFF9C7; margin: 0px 0px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               

                <div class=" bg_color_3">
                    <div class="row">
                        <p class="add_more icon_add_more">SELECTION</p>
                    </div>
                </div>
            
            </div>
        </div>
      </div>
      
      <!---------------------->
      <!-- <div class="row" style="padding: 20px 0px;">
       <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-4">  
                </div>
                <div class="col-lg-4">
                    <a href="#" class="btn calculate_btn">CALCULATE</a>  
                </div>
                <div class="col-lg-4">  
                </div>
            </div>
        </div>
        </div>
        
      </div> -->
      <div class="align-calc-center">
        <a href="#" class="btn calculate_btn">CALCULATE</a>  
      </div>

      <!---------------------->
      <div class="row padding_result" style="">
        <div class="col-lg-12">
          <p class="text_white text-center restult_btn" style="margin-top:2%;">RESULTS</p>
        </div>
      </div>
      <div class="row" style="padding: 20px 0px;">
        <div class="col-lg-2 col-md-8" style="text-align: center;">
        </div>
        <div class="col-lg-8" style="text-align: center;">
             <div class="row">
                <div class="col-lg-4 col-md-4" style="text-align: center;">
              <p class="total-stake">Total Stake</p>
                    <p class="group_price icon1">0.00</p>
              <hr  class="price_line" style="border-color: #FFF9C7; margin-top: -15px; margin-bottom:30px; " />
            </div>
            
            <div class="col-lg-4 col-md-4" style="text-align: center;">
              <p class="total-stake">Total Profit</p>
              <p class="group_price icon2">0.00</p>
              <hr  class="price_line" style="border-color: #FFF9C7; margin-top: -15px; margin-bottom:30px; " />
            </div>
            
             <div class="col-lg-4 col-md-4" style="text-align: center;">
              <p class="total-stake">Total Return</p>
              <p class="group_price icon3">0.00</p>
              <hr class="price_line" style="border-color: #FFF9C7; margin-top: -15px; margin-bottom:30px; " />
            </div>
                
             </div>
        </div>
        <div class="col-lg-2 col-md-2" style="text-align: center;">
        </div>
      
       
      </div>
      
      <div class="row mobile_btn" style="padding: 20px 0px;" >
            
                <a class="btn button-light btn_before_footer"  href="bet_offers.php"> <img src="assets/Free_Bets_Icon.png" style="width:  15px; position: absolute; margin: 0 0 0 -38px;" />FREE BET OFFERS</a>
            
      </div>
      
      <div class="row" style="padding: 20px 0px 70px;">
      
      <div class="container">
      <h2 class="calculater_glossary">Calculator Glossary</h2>
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
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>
            </div>
        </div>
      </div>
      </div>
<?php
    include_once("footer.php");
 ?>