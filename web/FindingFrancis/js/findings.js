

//when the entire page has loaded completely ready function (which is called on jquery object with a function passed as argument) and this function gets executed 
$(document).ready(function(){ 
	//get all the findings from the server

//	alert("hi");
	
	
	function FindingsViewModel()  {
		var self = this;
		
		function Findings(age, height, address)  {
			this.age = age;
			this.height = height;
			this.address = address;
		}
		
		self.age=ko.observable("");
		self.height=ko.observable("");
		self.address=ko.observable("");
		self.findings= ko.observableArray([]);
		
		//ideally everything should be inside model
		self.getFindings = function()  {
					$.ajax({
				//we dont send any data attribute here as for get request no data is sent to the server
				url: "get_findings.php",
				type: "get",
				success: function(data) {
					for(var i=0;i<data.length;i++){
						self.findings.push(new Findings(data[i].age,data[i].height,data[i].address));
					}
				},
				error: function(xhr, textStatus, errorThrown){
					alert("Something went wrong . Try again later");
				}
			});		
		};
		//$ gives access jquery object present in jquery.min.js
		//on that object we calling ajax function
		//success function is called by jquery after getting response
		self.onSave=function() {
			$.ajax({
				url: "save_findings.php",
				type: "post",
				data: "age="+self.age()+"&height="+self.height()+"&address="+self.address(),
				//error is called when there is error connecting
				//data=1 specifies that data has been inserted correctly
				success: function(data){
					alert(typeof(data)+"    data");
					if(data==='1')
					{
						self.findings.unshift(new Findings(self.age(), self.height(),self.address()));
						self.age("");
						self.height("");
						self.address("");
					}
				},
				error: function(xhr,textStatus,errorThrown){
					alert(textStatus);
				}
			});
			
		};
	}
	var temp=new FindingsViewModel();
	ko.applyBindings(temp);
	temp.getFindings();
	});// on the end of ready