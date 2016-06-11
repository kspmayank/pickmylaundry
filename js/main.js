
$(document).ready(function(){

	// Fetching My Orders
	$.ajax({
	    type: 'GET',
	    url: 'get_orders.php',
	    data: { contactid: "10202", key: "15805b7d1f6aefe789c10c3d0a97", api_key: "adurcupsk49f8fwek1" },
	    success: function(resp) {
	    	console.log(1); 
	    	console.log(resp); 
	    	console.log(resp.data[0].OrderId);
	    	for (var i = resp.data.length - 1; i >= 0; i--) {
		    	$("#orderst tbody").append("<tr><td>"+resp.data[i].OrderId+"</td><td>"+resp.data[i].salesorder_no+"</td><td>"+resp.data[i].OrderDate+"</td><td>"+resp.data[i].OrderStatus+"</td><td>"+resp.data[i].TotalBill+"</td></tr>");
	    	};
	    }
	});

	
    // For Filters
	$('#apply').click(function(){
		var sd = $('#startdate').val();	
		var ed = $('#enddate').val();
		$.ajax({
		    type: 'GET',
		    url: 'https://api.myjson.com/bins/1n732',
		    data: { contactid: "123", key: "abcd", api_key: "adurcupsk49f8fwek1", from: sd, to: ed },
		    success: function(resp) { 
		    	console.log(resp.data[0].OrderId);
		    	for (var i = resp.data.length - 1; i >= 0; i--) {
			    	$("#orderst tbody").append("<tr><td>"+resp.data[i].OrderId+"</td><td>"+resp.data[i].salesorder_no+"</td><td>"+resp.data[i].OrderDate+"</td><td>"+resp.data[i].OrderStatus+"</td><td>"+resp.data[i].TotalBill+"</td></tr>");
		    	};
		    }
		});
	});


	$('#pick').click(function(){
		var pd = $('#pickupdate').val();	
		$.ajax({
		    type: 'POST',
		    url: 'create_order.php',
		    data: { contactid: "123", key: "abcd", api_key: "adurcupsk49f8fwek1", address: "sd", pickup_date: "ed", service: "wash" },
		    success: function(resp) { 
		    	console.log(resp);
		    	alert("Thank You for your order. Your Order No. is" + resp.order_no + ". Your Pickup will be scheduled shortly.");
		    }
		});
	});


	$('#tr-complete').click(function(){
		var sd = $('#startdate').val();	
		var ed = $('#enddate').val();
		$.get("orders.php",
		    {
		    	contactid: "9999999999",
		    	key: "abcd",
		    	api_key: "adurcupsk49f8fwek1",
		    	salesorderid: ""
		    }	
		     ,function(data, status){
	        	
	    });
	});



});


$('#startdate').on("change",function(){var a = $(this).val();console.log(a);});

$("button").click(function(){
    $.get("order_details.php", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});