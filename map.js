function init(){
	//map options are defined in the following block
	var mapOptions = {
		center : new google.maps.LatLng(46.0000, 2.0000),
		zoom : 5,
		mapTypeId : google.maps.MapTypeId.ROADMAP,
		disableDefaultUI : true
	};
	var mapArea = document.getElementById("gMap"); //selecting a dom object to place the map
	var map = new google.maps.Map(mapArea,mapOptions); //creating a map object at the specified dom with the options defined above
	var bounds = new google.maps.LatLngBounds();
	


var marker = new Array();
	function exec(){
			var dataString = $('#input option:selected').val();
			var dataString2 = $('#input2 option:selected').val();
			//alert(dataString2);
			
			//alert(dataString);
			$.ajax({  	//This is an ajax call that is triggered for selectbox onchange event
			async : false,             //very important.. if this isnt given, variables wont be available elsewhere in the code
			url : "getlatlng.php",
			type : "POST",
			//data: 'month='+dataString,
			data : {'month' : dataString, 'continent' : dataString2},
			dataType : "json",
			success : function marky(data){
						
						
						for (var j = 0; j < marker.length; j++) {
							 if(marker && marker.length!== 0 ){marker[j].setMap(null);}
						};
						
						for (var i = 0; i < (data.length); i++) {
							
								marker[i] = new google.maps.Marker({
									position : new google.maps.LatLng(data[i].lat,data[i].lng), //create markers with obtained json data
									map : map,
									title : "lol" });
									bounds.extend(marker[i].position);

							};	map.fitBounds(bounds);
								
						}

				}); 
			}
	
	var btn = document.getElementById("btn");
	google.maps.event.addDomListener(btn,'click',exec);
	

}

google.maps.event.addDomListener(window,'load',init);
