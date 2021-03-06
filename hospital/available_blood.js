function drawTable(){
    var tableJson = $.ajax({
            url: "available_b_request.php",
            dataType: "json",
            async: false
            }).responseText;

    	var parsed = JSON.parse(tableJson);
        var tr;
        for (var i = 0; i < parsed.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" + parsed[i].id + "</td>");
            tr.append("<td>" + parsed[i].b_group + "</td>");
            tr.append("<td>" + parsed[i].b_quantity + "</td>");
            tr.append("<td>" + parsed[i].update_time + "</td>");
            
            $('#table1').append(tr);
        }

	}
	drawTable();

function drawTable2(){
    var tableJson = $.ajax({
            url: "view_request.php",
            dataType: "json",
            async: false
            }).responseText;

        var parsed = JSON.parse(tableJson);
        var tr;
        for (var i = 0; i < parsed.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" + parsed[i].blood_group + "</td>");
            tr.append("<td>" + parsed[i].receiver_id + "</td>");
            tr.append("<td>" + parsed[i].email + "</td>");
            tr.append("<td>" + parsed[i].update_time + "</td>");
            
            $('#table2').append(tr);
        }

    }
    drawTable2();