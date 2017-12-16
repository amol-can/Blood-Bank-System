/* For fetching available blood samples*/
function drawTable(){
    var tableJson = $.ajax({
            url: "http://localhost/blood/custom/available_b_request.php",
            dataType: "json",
            async: false
            }).responseText;

    	var parsed = JSON.parse(tableJson);
        var tr;
        for (var i = 0; i < parsed.length; i++) {
            tr = $('<tr/>');
            tr.append("<td id='h_id'>" + parsed[i].h_id + "</td>");
            tr.append("<td>" + parsed[i].name + "</td>");
            tr.append("<td id='email'>" + parsed[i].email + "</td>");
            tr.append("<td id='blood_group'>" + parsed[i].blood_group + "</td>");
            tr.append("<td>" + parsed[i].blood_quantity + "</td>");
            tr.append("<td><button type='submit' class='btn' name='actiob_button' id='action_b' disabled>Request Sample</button>");
            
            $('#table1').append(tr);
        }

	}
	drawTable();

    /* Requesting Samples to hospital by Receivers*/
    $(document).ready(function(){
        $("button").click(function(){
            var value1 = $('#h_id').text();
            var value2 =$('#blood_group').text();
            var url="http://localhost/blood/receiver/send_request.php?hospitalId="+value1 + "&" + "bloodGroup=" + value2;
            console.log(url);
            var res=encodeURI(url);
                var ReceiverJson = $.ajax({
                        url: res,
                        dataType: "json",
                        async: false
                    }).responseText;
                alert("Successfull request sent to Hospital");
                $('button').attr('disabled','disabled');
                $("button").css("background-color","#CFCFD6");
        });
    });  

function enableButton(){
    var rows = document.getElementById("table1").getElementsByTagName("tbody")[0].getElementsByTagName("tr");
    
    console.log("Blood Group",user_blood);
      // loops through each row
        if (user_blood == 'AB+'){                                                   
          for (i = 0; i < rows.length; i++) {
             var cells = rows[i].getElementsByTagName('td');
                if (cells[3].innerHTML == 'A+' || cells[3].innerHTML == 'O+' || cells[3].innerHTML == 'B+'|| 
                    cells[3].innerHTML == 'AB+' || cells[3].innerHTML == 'A-' || cells[3].innerHTML == 'O-' || 
                    cells[3].innerHTML == 'B-' || cells[3].innerHTML == 'AB-' )
                {
                  console.log("elseIF",cells[3].innerHTML);
                  $('#action_b').removeAttr('disabled');
                  $("#action_b").css("background-color","#ADE8E2");
                }
            }
        }
        else if (user_blood == 'O+') {
            for (i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName('td');
                if (cells[3].innerHTML == 'O+' || cells[3].innerHTML == 'O-'){
                  console.log("Check in elseif",cells[3].innerHTML);
                  rows[i].className = "colorRank2"
                  /*rows[i].disabled = false;*/
                  /*cells[3].innerHTML.disabled = true;*/
                   $("#action_b").removeAttr("disabled");                  
                  $("#action_b").css("background-color","#ADE8E2");
              }
            }
        }                               
}
enableButton();