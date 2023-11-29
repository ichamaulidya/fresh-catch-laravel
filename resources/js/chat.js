$(document).ready(function () {
	$.ajax({
		url: "https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-eohht/endpoint/getPenggunaLainnya",
		type: "GET",
		data: {
			// penerima: "admin",
			penerima: $("#username").html(),
		},
		beforeSend: function () {
			$("#list-users").html(
				'<a href="#" class="list-group-item list-group-item-action">Loading...</a>'
			);
		},
		success: function (res) {
			var view = "";

			res.map((data) => {
				view +=
					'<a href="#" class="list-group-item list-group-item-action user">' +
					data.username +
					"</a>";
			});
			$("#list-users").html(view);
			console.log(res);
		},
		error: function (err) {
			$("#list-users").html(
				'<a href="#" class="list-group-item list-group-item-action"> Fetch Error...</a>'
			);
			console.log(err);
		},
	});

	function currentDate() {
		var date = new Date();
		return date.toUTCString();
		//alert(date.toUTCString())
		//alert(date.getDate()+' '+date.getMonth()+' '+ date.getFullYear()+' '+ date.getHours()+':'+date.getMinutes())
	}

	function load_chat() {
		$.ajax({
			url: "https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-eohht/endpoint/getObrolanByPengirimPenerima",
			type: "GET",
			data: {
				//pengirim: $('#list-users .active').html(),
				pengirim: $("#list-users .active").html(),
				penerima: $("#username").html(),
			},
			beforeSend: function () {
				$("#list-chats").html(
					'<div class="card">' +
						'<div class="card-body">' +
						"Loading..." +
						"</div>" +
						"</div>"
				);
			},
			success: function (res) {
				var view = "";

				res.map((data) => {
					if (data.pengirim == $("#username").html()) {
						color = "text-bg-success";
						colorWaktu = "";
					} else {
						color = "";
						colorWaktu = "text-muted";
					}
					view +=
						'<div class="card mb-3 ' +
						color +
						'">' +
						'<div class="card-body">' +
						'<h5 class="card-title">' +
						data.pengirim +
						"</h5>" +
						data.pesan +
						'<div class="text-end ' +
						colorWaktu +
						'">' +
						data.waktu +
						"</div>" +
						"</div>" +
						"</div>";
				});
				$("#list-chats").html(view);
			},
			error: function (err) {
				console.log(err);
				$("#list-chats").html(
					'<div class="card">' +
						'<div class="card-body">Fetch Error...' +
						'<div class="text-end text-muted">' +
						currentDate() +
						"</div>" +
						"</div>" +
						"</div>"
				);
			},
		});
	}
	//oad_chat();
	$("#list-users").on("click", ".user", function () {
		var username = $(this).html();
		$("#list-users .user").removeClass("active");
		$(this).addClass("active");

		//alert username
		load_chat()
		setInterval(load_chat(), 5000);
		
		//$('#form-send').show();
		$("#form-send").removeClass("d-none");
	});
	//$('#form-send').hide();
	$("#form-send").submit(function () {
		$.ajax({
			url: "https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-eohht/endpoint/postChat",
			type: "POST",
			data: {
				pengirim: $("#username").html(),
				penerima: $("#list-users .active").html(),
				pesan: $("#chat").val(),
				waktu: currentDate(),
			},
			success: function (res) {
				load_chat();
			},
			error: function (err) {
				console.log(err);
			},
		});
		$("#chat").val("");
		return false;
	});


});
