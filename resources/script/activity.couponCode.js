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
		$("#couponContent").html("<p>抽取下载码中...</p>");
		$( "#couponDialog" ).dialog( "open" );
		$.post("services/activity/coupon", {}, onGetCoupon);
		event.preventDefault();
	});
});

function onGetCoupon(data) {
	if(data.code == 1001) {
		$("#couponContent").html("<p>恭喜你获得下载码，请复制到安全的地方：" + data.download_code + "</p><p>注意：您无法再次获得该下载码，请妥善保管。</p>");
	} else if(data.code == 1404) {
		$("#couponContent").html("<p>暂时还没有发放下载码</p>");
	}
}