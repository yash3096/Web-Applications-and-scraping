<!DOCTYPE html>
<html>
<head>
<title>Javascript Webcam Demo - <MyCodingTricks/></title>
</head>
<body>
 
<h3>Demonstrates simple 320x240 capture &amp; display</h3>
 <div id="my_camera"></div>
 
    <!-- A button for taking snaps -->
 
<form>
        <input type=button class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()">
    </form>
 

       <div id="results" class="well">Your captured image will appear here...</div>
 
    <!-- First, include the Webcam.js JavaScript Library -->
    <script type="text/javascript" src="js/webcam.js"></script>
     
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );
       
         var path="";
        function take_snapshot() {
            // take snapshot and get image data
         	 Webcam.snap( function(data_uri) {
                   // alert(""+data_uri);
                // display results in page
                document.getElementById('results').innerHTML = 
                    '<h2>Here is your image:</h2>' + 
                    '<img src="'+data_uri+'"/>';
                                Webcam.upload( data_uri, 'upload.php', function(code, text) {
                                            // Upload complete!
                                            // 'code' will be the HTTP response code from the server, e.g. 200
                                            // 'text' will be the raw response content

                                           alert(""+text+"\n"+code);
                                           path = ""+text;
                                            emotion(path);
                                });
            } );
        }

        $(function emotion(imgpath) {
        var params = {
            // Request parameters
             "url": imgpath 
        };

      
        $.ajax({

            url: "https://api.projectoxford.ai/emotion/v1.0/recognize?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers

                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","802ff96641e5405b86ffd26b42694742");
            },
            type: "POST",
            // Request body
            data: '{"url": "imgpath"}',
        })
        .done(function(data) {
			alert("success");
			alert(data[0].scores.disgust);
			alert(data);
			alert(data[0].faceRectangle.left);
			//alert(data[0].scores.);
            console.log(data);
        })
        .fail(function() {
            alert("error");
        });
    });
     </script>
    

</body>
</html>						