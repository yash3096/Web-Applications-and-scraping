

					$.ajax({
				//we dont send any data attribute here as for get request no data is sent to the server
				url: " http://b1edfae5.ngrok.io/npl?market=NSE&company=HDFC",
				type: "get",
				success: function(data) {
					console.log(data);
					alert(data);
				},
				error: function(xhr, textStatus, errorThrown){
					alert("Something went wrong . Try again later");
				}
			});		



