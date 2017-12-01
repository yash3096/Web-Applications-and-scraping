$(document).ready(kuch_karna_hain);

//ready is to ensure that js runs after UI(front end) is ready
function kuch_karna_hain() {
	console.log("doc is ready");

	$("#input_pl").keydown(function(e){
			console.log(e);
			//e is the ascii value of the letter pressed on input tag in html
			if(e.keyCode == 13){

				console.log("enter is pressed");
				e.preventDefault();
			}
			
	});
	// body...

	$("#dropdownmenu a").click(function(e){
		console.log(e.currentTarget.name);
		handle_db_entry(e.currentTarget.name);

	});

	$(document).on('click','#check_button',handle_check_button);
	init_list();
}

function handle_check_button(e){

	//e.currentTarget.name gives id of the object to be deleted
	var primary_id=e.currentTarget.name;
	console.log("primary _id is "+primary_id);
	var datanew={id:String(primary_id)};
	$.ajax({
		type:"POST",
		data:datanew,
		url:'../php_utils/removeitem.php',
		dataType:'text',
		success:handle_put_success,
		error:handle_error,
	})
}

function handle_db_entry(plevel){

	var input_pl_text=$("#input_pl").val();
	if(input_pl_text.length == 0){
		alert("dude... put something");
	}
	else{
			console.log("Valid data");
			var form_Data= {
				task: input_pl_text,
				plevel: plevel,
			};
			//this is for storing tasks to database
			$.ajax({
				type:"POST",
				url:"../php_utils/putData.php",
				data: form_Data,
				dataType: 'text',
				success:handle_put_success,
				error:handle_error
			});
	}
}
function handle_put_success(data){
	console.log(data);
	console.log("func called");
	$("#table_body").empty();
	init_list();
}

function handle_error(){
	alert("error");
}

function init_list(){
	$.ajax({
		type:'GET',
		url:"../php_utils/getData.php",
		dataType:'json',
		//json is used in unstructured databases 
		success:handle_success_data,
		error:handle_error,
	});
}

 function handle_success_data(data){
 	console.log(data);
 	for (var i = 0; i < data.length; i++) {
 		var temp=data[i];
 		updateUI(temp.id,temp.plevel,temp.task);
 	}
 }

 function updateUI(id,plevel,task){
 	console.log("Id is "+id+"\tP level is "+plevel+"\ttask name is "+task);
 	var tr_start="<tr id="+id+">";
 	var tr_end="</tr>";
 	var btn_class;
 	/*var th_start="<th>";*/
 	switch(plevel)
 	{
 		case '1':
 			var th_start="<th class='bg-success'>";
 			btn_class='bg-success';
 			break;

 		case '2':
 			var th_start="<th class='bg-danger'>";
 			btn_class='bg-danger';
 			break;

 		case '3':
 			var th_start="<th class='bg-info'>";
 			btn_class='bg-info'
 			break;
 	}
 	var th_end="</th>";
 	var row=tr_start;
 	row+= th_start+task+th_end+th_start+"<button class=\'"+btn_class+"\' name=\'"+id+"\'id=check_button><i class='fa fa-check-circle-o'></i></button>"+th_end+tr_end;
 	console.log(row);
 	$("#table_body").append(row);
 }