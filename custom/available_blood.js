function drawTable(){
    var tableJson = $.ajax({
            url: "custom/available_b_request.php",
            dataType: "json",
            async: false
            }).responseText;
    console.log("Dataaaaaaaaaaaaaaaaaaa:", tableJson);
    	var parsed = JSON.parse(tableJson);
        var tr;
        for (var i = 0; i < parsed.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" + parsed[i].h_id + "</td>");
            tr.append("<td>" + parsed[i].name + "</td>");
            tr.append("<td>" + parsed[i].email + "</td>");
            tr.append("<td>" + parsed[i].blood_group + "</td>");
            tr.append("<td>" + parsed[i].blood_quantity + "</td>");
            
            $('#table1').append(tr);
        }

	}
	drawTable();