$(document).ready(function () {
	var $ts_forms = $(".ts_mail-form");
	var $ts_sendButton = $("[button='ts_send-form']");

	$ts_sendButton.on("click", function () {
		var $ts_form = $(this).parent("form");
		var $ts_inputBoxs = $($ts_form).find(".ts_input-box");
		var $ts_formName = $($ts_form).attr("name");

		var isError = false;
		var Data = [];

		for (var i = 0; i < $ts_inputBoxs.length; i++) {

			var inputName = $($ts_inputBoxs[i]).find("[name]").attr("name");
			var inputValue = $($ts_inputBoxs[i]).find("[name]").val();

			/* if input was mean */
			if ($($ts_inputBoxs[i]).hasClass("ts_mean")) {
				/* if mean input was empty */
				if (inputValue == "") {
					isError = true;
					$($ts_inputBoxs[i]).addClass("error");
				}
			} // if. $($ts_inputBoxs[i]).hasClass("ts_mean")

			/* data constructor */
			Data.push({
				"inputName": inputName,
				"inputValue": inputValue
			});

		} // for. i < $ts_inputBoxs.length

		if (isError == false) {
			$.ajax({
				type: "post",
				url: "lib/ts_send-form.ini.php",
				data: {
					data: Data,
					formName: $ts_formName
				},

				success: function (data) {
					console.log(data);
				}
			}); // ajax
		} // if. isError == false

		setTimeout(function () {
			$($ts_inputBoxs).removeClass("error");
		}, 1000);
	}); // click. $ts_sendButton
}); // document. ready