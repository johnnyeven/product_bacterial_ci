$(function() {
	$( "#couponDialog" ).dialog({
		resizable: false,
		autoOpen: false,
		width: 400,
		modal: true,
		buttons: [
			{
				text: "Ok",
				click: function() {
					$( this ).dialog( "close" );
				}
			}
		]
	});
	$("#getCode").click(function() {
		$( "#couponDialog" ).dialog( "open" );
		$.post("services/activity/coupon", {}, onGetCoupon);
		event.preventDefault();
	});
});

function onGetCoupon(data) {
	
}