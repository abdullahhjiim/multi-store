$((function(t){"use strict";$(document).on("click","#but1",(function(t){$("body").removeClass("timer-alert");var e=$("#message").val();""==e&&(e="Your message"),swal(e)})),$(document).on("click","#but2",(function(t){$("body").removeClass("timer-alert");var e=$("#message").val(),o=$("#title").val();""==e&&(e="Your message"),""==o&&(o="Your message"),swal(o,e)})),$("#but3").on("click",(function(t){$("body").removeClass("timer-alert");var e=$("#message").val(),o=$("#title").val();""==e&&(e="New Notification from Sparic"),""==o&&(o="Notification Styles"),swal({title:o,text:e,imageUrl:"http://localhost:8000/assets/images/brand/favicon.png"})})),$("#but4").on("click",(function(t){$("body").addClass("timer-alert");var e=$("#message").val(),o=$("#title").val();""==e&&(e="New Notification from Sparic"),""==o&&(o="Notification Styles"),e+="(close after 30 seconds)",swal({title:o,text:e,timer:1e3,showConfirmButton:!1,showCancelButton:!1,closeOnConfirm:!1})})),$(document).on("click","#click",(function(t){$("body").removeClass("timer-alert");var e=$("#type").val();swal({title:"Title",text:"Your message",type:e})})),$(document).on("click","#prompt",(function(t){$("body").removeClass("timer-alert"),swal({title:"Add",text:"Enter your message",type:"input",showCancelButton:!0,closeOnConfirm:!1,inputPlaceholder:"Your message"},(function(t){""!=t&&swal("Input","You have entered : "+t)}))})),$(document).on("click","#confirm",(function(t){$("body").removeClass("timer-alert"),swal({title:"Alert",text:"Are you really want to exit",type:"warning",showCancelButton:!0,confirmButtonText:"Exit",cancelButtonText:"Stay on the page"})})),$(document).on("click","#click",(function(t){$("body").removeClass("timer-alert"),swal("Congratulations!","Your message has been succesfully sent","success")})),$(document).on("click","#click1",(function(t){$("body").removeClass("timer-alert"),swal({title:"Alert",text:"Waring alert",type:"warning",showCancelButton:!0,confirmButtonText:"Exit",cancelButtonText:"Stay on the page"})})),$(document).on("click","#click2",(function(t){$("body").removeClass("timer-alert"),swal({title:"Alert",text:"Danger alert",type:"error",showCancelButton:!0,confirmButtonText:"Exit",cancelButtonText:"Stay on the page"})}))}));