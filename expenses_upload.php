<?php include("file-upload3.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>upload</title>
  <style>
    html{
	height: 120%;
	width: 25%;
	}
    body {
	
	margin-top: 300px;
	margin-right:-100px;
	margin-left:600px;
	padding: 0;
	font-family: 'Arial', sans-serif;
	background: linear-gradient(#141e30, #243b55);	
	}
    .container {
	postion:absolute;
	margin: 10px auto;
	top: 50%;
	left: 50%;
	  width:400px;
	  height:50%;
	  padding:40px;
      max-width: 450px;
	  color:#fff;
	transform: translate(-50%, -50%);
	background: rgba(0,0,0,.5);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.6);
	border-radius: 10px;
	}
	
	.container .user-box {
	position: relative;
	}
    
	.container .user-box input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #F1EEE6;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #F1EEE6;
	outline: none;
	background: transparent;
	}
	.container .user-box label {
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #F1EEE6;
	pointer-events: none;
	transition: .5s;
	}
	.container .user-box input:focus ~ label, .container .user-box input:valid ~ label {
	top: -20px; 
	left: 0px; 
	color: #03E9F4;
	font-size: 12px;
}
	
	
	
	
    .imgGallery img {
      padding: 8px;
      max-width: 100px;
    }    
  </style>
</head>

<body>

  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-5">EXPENSES</h3>
	  <div class="user-box">
			<input type="text" name="title" required>
			<label>TITLE</label>
		</div>
	  <div class="user-box">
			<input type="text" name="description">
			<label>Description</label>
		</div>
      <div class="user-image mb-3 text-center">
        <div class="imgGallery"> 
          <!-- Image preview -->
        </div>
      </div>

      <div class="custom-file">
        <input type="file" name="fileUpload[]" class="custom-file-input" id="chooseFile" multiple>
        <label class="custom-file-label" for="chooseFile">Select file</label>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Upload Files
      </button>
    </form>

    <!-- Display response messages -->
    <?php if(!empty($response)) {?>
        <div class="alert <?php echo $response["status"]; ?>">
           <?php echo $response["message"]; ?>
        </div>
    <?php }?>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(this, 'div.imgGallery');
      });
    });    
  </script>

  
</body>

</html>