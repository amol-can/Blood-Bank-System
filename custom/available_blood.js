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
            tr.append("<td><button class='form-group btn' type='submit' name='actiob_button' id='action_b' disabled>Request Sample</button>");
            
            $('#table1').append(tr);
        }

	}
	drawTable();