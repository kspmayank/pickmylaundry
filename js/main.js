
$(document).ready(function(){




});


// $('#startdate').on("change",function(){var a = $(this).val();console.log(a);});

// $("button").click(function(){
//     $.get("order_details.php", function(data, status){
//         alert("Data: " + data + "\nStatus: " + status);
//     });
// });


var Laundary = (function(){
	return{
		init : function(){
				// Fetching My Orders
				console.log(new Date($.now()));
				$.ajax({
					type: 'GET',
					url: 'get_orders.php',
					beforeSend: function(){
						$("#loader").show();
					},
					data: { contactid: "10202", key: "15805b7d1f6aefe789c10c3d0a97", api_key: "adurcupsk49f8fwek1" },
					success: function(resp) {
						console.log(new Date($.now()));
						var jsonObj = JSON.parse(resp);
						for (var i = jsonObj.data.length - 1; i >= 0; i--) {
							if (jsonObj.data[i].OrderStatus == "Invoice Created" || jsonObj.data[i].OrderStatus == "Pickup Rider Assigned" || jsonObj.data[i].OrderStatus == "Vendor Assigned")
							{
								$("#orderst tbody").append("<tr><td>"+jsonObj.data[i].OrderId+"</td><td>"+jsonObj.data[i].salesorder_no+"</td><td>"+jsonObj.data[i].OrderDate+"</td><td><a class='status-modal btn modal-trigger' href='#modal-complete' data-orderid='"+jsonObj.data[i].OrderId+"' >"+jsonObj.data[i].OrderStatus+"</a></td><td>"+jsonObj.data[i].TotalBill+"</td></tr>");		    		
								$('.modal-trigger').leanModal();     		    		
							}
							else{
								$("#orderst tbody").append("<tr><td>"+jsonObj.data[i].OrderId+"</td><td>"+jsonObj.data[i].salesorder_no+"</td><td>"+jsonObj.data[i].OrderDate+"</td><td>"+jsonObj.data[i].OrderStatus+"</td><td>"+jsonObj.data[i].TotalBill+"</td></tr>");
							}
						};
						$("#orderst").css("display","table");
						$("#loader").css("display","none");
						Laundary.renderModal();
					}
				});
},
renderModal : function(){
	$(".status-modal").on("click",function(){
		console.log("ffgddd");
		var oi = $(this).data("orderid");
		$.ajax({
			type: 'GET',
			url: 'order_details.php',
			beforeSend: function(){
				$("#load-order").show();
			},
			data: { contactid: "10202", key: "15805b7d1f6aefe789c10c3d0a97", api_key: "adurcupsk49f8fwek1", salesorderid: oi},
			success: function (details) {
						// body...
						var jsonObject = JSON.parse(details);
						$(".details-table").css("display","table");
						$("#so-no").html(jsonObject.data.salesorder_no);
						$("#pdate").html(jsonObject.data.pickup_date);
						$("#ddate").html(jsonObject.data.delivery_date);
						for(var i = jsonObject.data.product.length - 1; i>=0; i--) {
							console.log(jsonObject.data.product[i]);
							$(".details-table tbody").html("<tr><td>"+i+"</td><td>"+jsonObject.data.product[i].name+"</td><td>"+jsonObject.data.product[i].quantity+"</td><td></td><td>"+jsonObject.data.product[i].price+"</td></tr>");
						}
						$("#load-order").css("display","none");
					}
				});
	});
},

createOrder : function() {
	// body...
	$("#pick").on("click", function () {
		// body...
		console.log("Create Order API Called ");
		var serv = $("input[name='service']:checked").val();
		var pu_date = $("#pickupdate").val();
		$.ajax({
			type: 'POST',
			url: 'create_order.php',
			data: {  contactid: "10202", key: "15805b7d1f6aefe789c10c3d0a97", api_key: "adurcupsk49f8fwek1", address: "", pickup_date: pu_date, service: serv },
			success: function(response) {
				var jsonResp = JSON.parse(response);
				console.log(response);
				alert("ThankYou! Your order has been generated. Your Order Number is "+jsonResp.order_no+".");
			}
		});
	});
},

}
})();
Laundary.init();
Laundary.createOrder();