/*lo way dashboard dentist patient lasar har chehani bu awian background
shin bi yanish datanin bleyn active diar bi*/
let options= $('.options-btn');
   
$(document).ready(function () {
    options.click(function(){
    $('.active').removeClass('active');
    $(this).addClass('active'); 
    })
});


/* ba switch case drust kraya loway agar dashboard y dagrin dashboard man peshanda
yanish appoinment y dagrin awman peshan da lalay rast   
harwaha lahar section ak la home.php yak(id) man dayta section akan
loway display bkayna none => loway bzr bi yan inline-block loway la dasta rast
nishan da     */
//more info dashboard to show patients
$(document).ready(function(){
  $(".show-patient").click(function(){
           $('#first').css('display',"none");
            $('#second').css('display',"inline-block");
            $('#third').css('display',"none"); 
             $('#fourth').css('display',"none"); 
                $('#fifth').css('display',"none"); 
                $('#sixth').css('display',"none");
                 $('#seventh').css('display',"none");
  });
});
//more info dashboard to show appointment
$(document).ready(function(){
  $(".show-appointment").click(function(){
      $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"none"); 
                  $('#fourth').css('display',"none"); 
                  $('#fifth').css('display',"inline-block");
                  $('#sixth').css('display',"none");
                 $('#seventh').css('display',"none");
       
  });
});
//more info dashboard to show prescription
$(document).ready(function(){
  $(".show-prescription").click(function(){
        
  $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"none"); 
                  $('#fourth').css('display',"none"); 
                  $('#fifth').css('display',"none");
                  $('#sixth').css('display',"inline-block");
                 $('#seventh').css('display',"none");
  });
});

$(document).ready(function () {
      $('#first').css('display',"inline-block");
            $('#second').css('display',"none");
            $('#third').css('display',"none"); 
             $('#fourth').css('display',"none"); 
                $('#fifth').css('display',"none"); 
                    $('#sixth').css('display',"none"); 
                    $('#seventh').css('display',"none");
options.click(function(){
     let optionsIndex=0;
    optionsIndex=options.index(this);
//    $('.count').text("index count= "+ optionsIndex);
    switch (optionsIndex) {
        case 0:
            $('#first').css('display',"inline-block");
            $('#second').css('display',"none");
            $('#third').css('display',"none"); 
             $('#fourth').css('display',"none"); 
                $('#fifth').css('display',"none"); 
                    $('#sixth').css('display',"none"); 
                    $('#seventh').css('display',"none");
            break;
        case 1:
             $('#first').css('display',"none");
            $('#second').css('display',"inline-block");
            $('#third').css('display',"none"); 
             $('#fourth').css('display',"none"); 
                $('#fifth').css('display',"none"); 
                $('#sixth').css('display',"none");
                 $('#seventh').css('display',"none");
                break;

        case 2:   $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"inline-block"); 
                  $('#fourth').css('display',"none"); 
                $('#fifth').css('display',"none");
                $('#sixth').css('display',"none"); 
                 $('#seventh').css('display',"none");
                 break;
        case 3: $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"none"); 
                  $('#fourth').css('display',"inline-block"); 
                $('#fifth').css('display',"none");
                $('#sixth').css('display',"none"); 
                 $('#seventh').css('display',"none");

                break;
        case 4: $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"none"); 
                  $('#fourth').css('display',"none"); 
                  $('#fifth').css('display',"inline-block");
                  $('#sixth').css('display',"none");
                 $('#seventh').css('display',"none");

                break;
        case 5: $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"none"); 
                  $('#fourth').css('display',"none"); 
                  $('#fifth').css('display',"none");
                  $('#sixth').css('display',"inline-block");
                 $('#seventh').css('display',"none");

            break;
              case 6: $('#first').css('display',"none");
                $('#second').css('display',"none"); 
                 $('#third').css('display',"none"); 
                  $('#fourth').css('display',"none"); 
                  $('#fifth').css('display',"none");
                  $('#sixth').css('display',"none");
                  $('#seventh').css('display',"inline-block");
            break;
            
        default:
            break;
    }
})
});



function showProfile() {
  document.getElementById("popup").style.display = "block";
}

function hideProfile() {
  document.getElementById("popup").style.display = "none";
}
