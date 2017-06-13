
<html lang="en">
<head>
<meta name="_token" content="{{ csrf_token() }}" /> 
  <title>PHP - jquery ajax crop image before upload using croppie plugins</title>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
  	.uploadimg
  	{
  		position: absolute;
  		top:0;
  	}
  	#upload-demo
  	{
  		position: relative;
  	}

  .image-upload > input {
  	visibility:hidden;
  	width:0;
  	height:0;
  	background:transparent;
}

#upload-demo-i
{
	position: absolute;
	top:0;
}
  </style>


</head>
<body>

<div class="image-upload">
		<label for="upload">
		    				<img src="resources/views/img/campaign.png" style="cursor: pointer"/>
		  				</label>
		<input type="file" id="upload" data-target="#myModal" data-toggle="modal" >
		

		<div id="upload-demo-i" style="cursor: pointer" onclick="editImage()"></div>
</div>


  <div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      	<div class="modal-header">
        	<button type="button"   style=" "class="close" data-dismiss="modal">&times;</button>
      
      	</div>
      	<div class="modal-body">
          
      		<div id="upload-demo" style="width:350px"></div>

      		<button class="btn btn-success upload-result" data-dismiss="modal">Upload Image</button>
     
    	</div>
    </div>

  </div>
</div>

<script type="text/javascript">
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 300,
        height: 225,
        type: 'rectangle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    	
    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {

	$.ajax({
			url: "postImage",
			type: "POST",
			data: {
				"_token": "{{ csrf_token() }}",
				"image":resp
			},
			success: function (data) {//alert(data);
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
				console.log(data);
			}
		});
	});
});
/*This function is added for Image Reupload Facility: Start*/
function editImage() {
  //alert("hiiiiiii");
  
  location.reload(true);
  editImage2();
  

}

function editImage() {
  $("#upload").click();
}

/*This function is added for Image Reupload Facility: End*/


</script>




</body>
</html>


