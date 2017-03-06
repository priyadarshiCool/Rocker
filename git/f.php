<?php
$mus_file="bb.mp3";
?>

<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="wavesurfer.js"></script>
<script src="id3-minimized.js"></script>
</head>
<body>

<input id='a' type='file'>

<script>
$("#a").change(function(){
	var file=$(this).get(0).files[0];
	var data=new FormData();		
	data.append('video_file',file);
	$.ajax({
							type:'POST',
							url:'http://localhost/fp.php',
							data:data,
							contentType:false,
							processData: false,
							cache:false,
							//dataType:'json',
							success:function(da){
										console.log(da);
							 			if(da['status'])
										{
											var data=da[0];
											ajax_call.fnc(data);
										}
										
											
									},
							
       		 				error:function(e){
        								console.log('Error happend try again later'+e);
        							}

						});

	
});

</script>

</body>
</html>
<?php

?>
