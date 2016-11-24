<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Product To Shopfy</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>This is rough Idea on how to post new produt to Shopy Own Page</h2>
  <form id="upload" action="shopfy.php" method="POST" enctype="multipart/form-data">
     <div class="form-group">
      <label for="ProductTitle">Product Title:</label>
      <input type="text" class="form-control" id="ProductTitle" placeholder="Product Title">
    </div>
    <div class="form-group">
      <label for="ProductDescription">Product Description:</label>
      <input type="text" class="form-control" id="ProductDescription" placeholder="Product Description">
    </div>
    <div class="form-group">
      <label for="ProductSize">Product Size | Lenght:</label>
      <input type="text" class="form-control" id="ProductSize" placeholder="Product Size">
    </div>
    <div class="form-group">
      <label for="ProductSKU">Product SKU:</label>
      <input type="text" class="form-control" id="ProductSKU" placeholder="Product SKU">
    </div>

 <div class="form-group">
<fieldset>
<legend>You can upload normaly or drag and drop from you computer</legend>

<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

<div>
	<label for="fileselect">Files to upload:</label>
	<input type="file" id="fileselect" name="fileselect[]" multiple />
	<div id="filedrag">or drop files here</div>
</div>

<div id="submitbutton">
	<button type="submit">Upload Files</button>
</div>

</fieldset>
</div>
<button type="submit" id="SubProduct">Post Product</button>
</form>

<div id="progress"></div>

<div id="messages">
<p>Status Messages</p>
</div>
</div>

<script src="filedrag.js"></script>
</body>
</html>
