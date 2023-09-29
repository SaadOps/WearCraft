<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Roboto:wght@100&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <title>Customization</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	
	<script type="text/javascript" src="js/fabric.js"></script>
	
	<link rel="icon" href="../img/wearcraftlogo.svg">

    <!-- styles -->
    <link type="text/css" rel="stylesheet" href="css/jquery.miniColors.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	 <script type="text/javascript">
	 </script>
	 <style type="text/css">
        /* Reset some default styles */


/* Style for the navigation bar */
.navbar {
    background-color: #191919;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.logo{
    color:white;
    font-size: 50px;
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    padding:25px;
    padding-left: 40px;
}


/* Style for the text on the right side */
.navbar .navbar-text {
    color: white; 
    font-size: 20px; 
    text-align: right;
    padding-bottom: 10px;
}

/* Make the navigation bar responsive */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }
    .navbar .navbar-text {
        text-align: center;
        margin-top: 10px;
		line-height: 25px;
    }
}
body{
	padding:0px;	
}
@media (max-width: 767px) {
  .container {
    padding-right: 20px;
    padding-left: 20px;
  }
  #shirtDiv img{
	max-width: 60%;
  }
}
		 
	      /* body {
	        padding-top: 60px;	        
	      } */
	      .color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	      }
	      .rotate {  
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
		    -ms-transform:rotate(90deg);		   
		}		
		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}
        

	 </style>
  </head>

  
  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
  <!-- Navbar
    ================================================== -->
    <nav class="navbar" style="padding-left: 20px">
        <div class="logo">
		WearCraft
        </div>
        <div class="navbar-text" >
            Email us at WearCraft@gmail.com with the screenshot of your customized product for order.
        </div>
    </nav>

    <div class="container">
		<section id="typography">
		  <div class="page-header">
		    <h1 style="color:#830303">Customize T-Shirt</h1>
		  </div>
		
		  <!-- Headings & Paragraph Copy -->
		  <div class="row">			
		    <div class="span3">
		    	
		    	<div class="tabbable"> <!-- Only required for left/right tabs -->
				  <ul class="nav nav-tabs">
				  	<li class="active"><a href="#tab1" data-toggle="tab" style="color:#830303">T-Shirt Options</a></li>				    
				    <li ><a href="#tab2" data-toggle="tab" style="color:#830303">Gravatar</a></li>
				  </ul>
				  <div class="tab-content">
				     <div class="tab-pane active" id="tab1">
				     	<div class="well">
<!--					      	<h3>Tee Styles</h3>-->
<!--						      <p>-->
						      	<select id="tshirttype">                        
				                    <option value="img/crew_front.png" selected="selected">Short Sleeve Shirts</option>
				                    <option value="img/mens_longsleeve_front.png">Long Sleeve Shirts</option>                                        
				                    <option value="img/mens_hoodie_front.png">Hoodies</option>                    
				                    <option value="img/mens_tank_front.png">Tank tops</option>
								</select>	
<!--						      </p>-->								
					      </div>
					      <div class="well">
							<ul class="nav">
								<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
								<li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
								<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
								<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
								<li class="color-preview" title="Black" style="background-color:#222222;"></li>
								<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
								<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
								<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
								<li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
								<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
								<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
								<li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
								<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
								<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
								<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
								<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
								<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
								<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
								<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
								<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>							
								<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
							</ul>
						</div>			      
				     </div>				   
				    <div class="tab-pane" id="tab2">
				    	<div class="well">
				    		<div class="input-append">
							  <input class="span2" id="text-string" type="text" placeholder="add text here..."><button id="add-text" class="btn" title="Add text"><i class="icon-share-alt"></i></button>
							  <hr>
							</div>
							<div id="avatarlist">
								<img style="cursor:pointer;" class="img-polaroid" src="img/invisibleman.jpg">
								<img style="cursor:pointer; width:100px" class="img-polaroid" src="uploads/sun.png">

							</div>	
							
                            <div>
                                <hr>
							     <form action="" method="post" enctype="multipart/form-data">
                                     <input type="file" name="fileToUpload" id="fileToUpload">
                                     <input class="btn btn-danger" type="submit" value="Upload Custom Image" name="submit">
                                </form>  
							</div>
                            
				    	</div>				      
				    </div>
                      
				  </div>
				</div>				
		    </div>		
		    <div class="span6">		    
		    		<div align="center" style="min-height: 32px;">
		    			<div class="clearfix">
							<div class="btn-group inline pull-left" id="texteditor" style="display:none">						  
								<button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>		                      
							    <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
								    <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
				                </ul>
							    <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png" height="" width=""></button>
							    <button id="text-italic" class="btn" data-original-title="Italic"><img src="img/font_italic.png" height="" width=""></button>
							    <button id="text-strike" class="btn" title="Strike" style=""><img src="img/font_strikethrough.png" height="" width=""></button>
							 	<button id="text-underline" class="btn" title="Underline" style=""><img src="img/font_underline.png"></button>
							 	<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
						 		<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
								  <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
							</div>							  
							<div class="pull-right" align="" id="imageeditor" style="display:none">
							  <div class="btn-group">										      
							      <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" style="height:19px;"></i></button>
							      <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" style="height:19px;"></i></button>
							      <button id="flip" type="button" class="btn" title="Show Back View"><i class="icon-retweet" style="height:19px;"></i></button>
							      <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" style="height:19px;"></i></button>
							  </div>
							</div>			  
						</div>												
					</div>					  		
				<!--	EDITOR      -->	
                <button id="flipback" type="button" class="btn" title="Rotate View"><i class="icon-retweet" style="height:19px;"></i></button>
					<div id="shirtDiv" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
						<img name="tshirtview" id="tshirtFacing" src="img/crew_front.png">
						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					
							<canvas id="tcanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>
						</div>
					</div>
		    </div>
		
		    <div class="span3">
		      
    
    <script>
        $(document).ready(function(){
   $("#tshirttype").change(function(){
     $("img[name=tshirtview]").attr("src",$(this).val());

   });

});
    </script>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
    <script>
        var valueSelect = $("#tshirttype").val();
        $("#tshirttype").change(function(){
            valueSelect = $(this).val();
        });
        $('#flipback').click(
		   function() {	
               if (valueSelect === "img/crew_front.png") {
                   if ($(this).attr("data-original-title") == "Show Back View") {
			   		$(this).attr('data-original-title', 'Show Front View');			        		       
			        $("#tshirtFacing").attr("src","img/crew_back.png");			        
			        a = JSON.stringify(canvas);
			        canvas.clear();
			        try
			        {
			           var json = JSON.parse(b);
			           canvas.loadFromJSON(b);
			        }
			        catch(e)
			        {}
			        
			    } else {
			    	$(this).attr('data-original-title', 'Show Back View');			    				    	
			    	$("#tshirtFacing").attr("src","img/crew_front.png");			    	
			    	b = JSON.stringify(canvas);
			    	canvas.clear();
			    	try
			        {
			           var json = JSON.parse(a);
			           canvas.loadFromJSON(a);			           
			        }
			        catch(e)
			        {}
			    }		
               }
               
               else if (valueSelect === "img/mens_longsleeve_front.png") {
                  if ($(this).attr("data-original-title") == "Show Back View") {
			   		$(this).attr('data-original-title', 'Show Front View');			        		       
			        $("#tshirtFacing").attr("src","img/mens_longsleeve_back.png");			        
			        a = JSON.stringify(canvas);
			        canvas.clear();
			        try
			        {
			           var json = JSON.parse(b);
			           canvas.loadFromJSON(b);
			        }
			        catch(e)
			        {}
			        
			    } else {
			    	$(this).attr('data-original-title', 'Show Back View');			    				    	
			    	$("#tshirtFacing").attr("src","img/mens_longsleeve_front.png");			    	
			    	b = JSON.stringify(canvas);
			    	canvas.clear();
			    	try
			        {
			           var json = JSON.parse(a);
			           canvas.loadFromJSON(a);			           
			        }
			        catch(e)
			        {}
			    }	
               }
               else if (valueSelect === "img/mens_tank_front.png") {
                  if ($(this).attr("data-original-title") == "Show Back View") {
			   		$(this).attr('data-original-title', 'Show Front View');			        		       
			        $("#tshirtFacing").attr("src","img/mens_tank_back.png");			        
			        a = JSON.stringify(canvas);
			        canvas.clear();
			        try
			        {
			           var json = JSON.parse(b);
			           canvas.loadFromJSON(b);
			        }
			        catch(e)
			        {}
			        
			    } else {
			    	$(this).attr('data-original-title', 'Show Back View');			    				    	
			    	$("#tshirtFacing").attr("src","img/mens_tank_front.png");			    	
			    	b = JSON.stringify(canvas);
			    	canvas.clear();
			    	try
			        {
			           var json = JSON.parse(a);
			           canvas.loadFromJSON(a);			           
			        }
			        catch(e)
			        {}
			    }	
               }
               else if (valueSelect === "img/mens_hoodie_front.png") {
                  if ($(this).attr("data-original-title") == "Show Back View") {
			   		$(this).attr('data-original-title', 'Show Front View');			        		       
			        $("#tshirtFacing").attr("src","img/mens_hoodie_back.png");			        
			        a = JSON.stringify(canvas);
			        canvas.clear();
			        try
			        {
			           var json = JSON.parse(b);
			           canvas.loadFromJSON(b);
			        }
			        catch(e)
			        {}
			        
			    } else {
			    	$(this).attr('data-original-title', 'Show Back View');			    				    	
			    	$("#tshirtFacing").attr("src","img/mens_hoodie_front.png");			    	
			    	b = JSON.stringify(canvas);
			    	canvas.clear();
			    	try
			        {
			           var json = JSON.parse(a);
			           canvas.loadFromJSON(a);			           
			        }
			        catch(e)
			        {}
			    }	
               }
			   
			   	canvas.renderAll();
			   	setTimeout(function() {
			   		canvas.calcOffset();
			    },200);	   	
        });	
    </script>
    <script src="js/bootstrap.min.js"></script>  
<script type="text/javascript" src="js/tshirtEditor.js"></script>
	<script type="text/javascript" src="js/jquery.miniColors.min.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35639689-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


  </body>
</html>
<?php
$uploadDirectory = 'uploads/';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['fileToUpload'])) {
    if ($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $tempFile = $_FILES['fileToUpload']['tmp_name'];
        $targetFile = $uploadDirectory . $_FILES['fileToUpload']['name'];

        // Resize the image to 100px width with a transparent background (PNG format)
        list($width, $height) = getimagesize($tempFile);
        $newWidth = 100;
        $newHeight = ($height / $width) * $newWidth;

        $srcImage = imagecreatefromstring(file_get_contents($tempFile));
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        imagesavealpha($newImage, true); // Enable transparency
        $transparent = imagecolorallocatealpha($newImage, 0, 0, 0, 127); // Transparent background
        imagefill($newImage, 0, 0, $transparent);
        imagecopyresampled($newImage, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // Save the resized image as PNG with a transparent background
        imagepng($newImage, $targetFile);
        imagedestroy($srcImage);
        imagedestroy($newImage);

        // Image resized and saved successfully
        echo '<script>
                const avatarlist = window.parent.document.getElementById("avatarlist");
                const img = document.createElement("img");
                img.src = "' . $targetFile . '";
                img.style.cursor = "pointer";
                img.classList.add("img-polaroid");
                avatarlist.appendChild(img);
              </script>';
    } else {
        echo '<script>alert("File upload failed with error code ' . $_FILES['fileToUpload']['error'] . '");</script>';
    }
}
?>