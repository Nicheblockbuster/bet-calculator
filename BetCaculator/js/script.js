window.onscroll = function() {
  scrollFunction();
};

// Slide button color change

// getting Checked status



document.querySelector("#slider").addEventListener("click", function() {
  if (document.getElementById("chkTest").checked) {
    document.getElementById("win").style.color = "#024146";
    document.getElementById("each-way").style.color = "rgba(251,225,128,0.6)";
  } else {
    document.getElementById("each-way").style.color = "#024146";
    document.getElementById("win").style.color = "rgba(251,225,128,0.6)";
  }
});

document.querySelector("#on").addEventListener("click", function() {
  document.querySelector(".state-on").style.color = "#024146";
  document.querySelector(".state-na").style.color = "rgba(251,225,128,0.6)";
  document.querySelector(".state-off").style.color = "rgba(251,225,128,0.6)";
});

document.querySelector("#state-na").addEventListener("click", function() {
  document.querySelector(".state-na").style.color = "#024146";
  document.querySelector(".state-on").style.color = "rgba(251,225,128,0.6)";
  document.querySelector(".state-off").style.color = "rgba(251,225,128,0.6)";
});

document.querySelector("#state-off").addEventListener("click", function() {
  document.querySelector(".state-off").style.color = "#024146";
  document.querySelector(".state-on").style.color = "rgba(251,225,128,0.6)";
  document.querySelector(".state-na").style.color = "rgba(251,225,128,0.6)";
});

document.querySelector("#blue-equal").addEventListener("click", function() {
  if (document.getElementById("chkTest-light").checked) {
    document.getElementById("equally").style.color = "rgba(159,237,215,0.6)";
    document.getElementById("win-to-win").style.color = "#024146";
  } else {
    document.getElementById("equally").style.color = "#024146";
    document.getElementById("win-to-win").style.color = "rgba(159,237,215,0.6)";
  }
});

document.querySelector("#blue2-equal").addEventListener("click", function() {
  if (document.getElementById("chkTest-light2").checked) {
    document.getElementById("rule").style.color = "rgba(159,237,215,0.6)";
    document.getElementById("off2").style.color = "#024146";
  } else {
    document.getElementById("off2").style.color = "rgba(159,237,215,0.6)";
    document.getElementById("rule").style.color = "#024146";
  }
});

function scrollFunction() {
    
    if($(window).width() <= 769){
        
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "15px 10px";
            document.getElementById("logo").style.width = "130px";
          } else {
            document.getElementById("navbar").style.padding = "18px 10px";
            // document.getElementById("logo").style.fontSize = "35px";
            document.getElementById("logo").style.width = "160px";
          }
        
    }else{
    
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "15px 30px";
        document.getElementById("logo").style.width = "175px";
      } else {
        document.getElementById("navbar").style.padding = "20px 30px";
        // document.getElementById("logo").style.fontSize = "35px";
        document.getElementById("logo").style.width = "212px";
      }
  }
}
jQuery(document).ready(function() {
    
    jQuery('.button_custom').click(function(){
       jQuery('.button_custom').removeClass("button_active");
       jQuery(this).addClass("button_active");
    });
    
  jQuery(".add_more").click(function() {
    var clas_count = jQuery(".selection_box").length;
    var c = clas_count;
    clas_count = clas_count + 1;
    jQuery(".selection_box").removeClass("add_after_this");
    jQuery(".selection_box")
      .last()
      .addClass("add_after_this");

    if (c % 2 == 0) {
      var clas_name = "bg_color_1";
    } else {
      var clas_name = "bg_color_2";
    }
    //}
    var fnc = 'onclick="Dltsect('+clas_count+')"';
    var string =
      '<div id="section_'+clas_count+'" class=" ' + clas_name + ' add_after_this selection_box">';
    string += '<div class="row">';
    string += '<div class=col-lg-1 col-md-1 col-sm-1" style="max-width: 36px !important; float: left;">';
    string += '<p class="select_numbering">#' + clas_count + "</p>";
    string += '<i '+fnc+' style="cursor: pointer;" class="fa fa-trash-alt trsh_icon"></i>';
    string += "</div>";
    string +=
      '<div class="col-lg-10 col-md-11 col-sm-11 col-xgreen" style="border-left:  1px solid rgba(159,237,215,0.15);">';
    string +=
      '<div class="row" style="border-bottom: 1px solid rgba(159,237,215,0.15); padding-bottom: 10px;">';
    string +=
      '<input type="button" class="button rect_win select_btn button_active" value="WON" />';
    string +=
      '<input type="button" class="button rect_win select_btn " value="DEAD HEAT" />';
    string +=
      '<input type="button" class="button rect_win select_btn " value="LOST" />';
    string +=
      '<input type="button" class="button rect_win select_btn " value="VOID" />';

    string += "</div>";

    string += '<div class="row" style="padding: 12px 0px;">';
    string += '<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3 col-dds">';
    string += '<p class="dds">DDS</p>';
    string += '<div style="clear: both;"></div>';
    string +=
      '<input type="text" maxlength="1" value="1" class="input_field_select" /><span class="curvy">/</span><input type="text" maxlength="1" value="1" class="input_field_select" />';
    string +=
      '<hr width="100%" style="border-color: #FFF9C7; margin: 0px 0px;" />';
    string += "</div>";
    string += "</div>";
    string += "</div>";
    string += "</div>";
    string += "</div>";
    jQuery(".add_after_this").after(string);

    //jQuery('.selection_box').removeClass('add_after_this');
  });
  
  
  
});

function Dltsect(id){
    jQuery('#section_'+id).remove();
}
//Toogles
$(function() {
  $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
