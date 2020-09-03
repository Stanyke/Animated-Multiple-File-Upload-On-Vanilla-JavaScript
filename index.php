<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multiple File Upload Using Vanilla JavaScript</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="paint.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</head>
<body>

<div class="container" style="margin-top: 100px;">
  <h2 class="mb-4 animate__animated animate__bounce" align="center">Multiple File Upload Using Vanilla JavaScript</h2>

  <center class="mb-2"><button class="btn btn-success" onclick="formNewInput()">Add New File</button></center>
  
  <table class="table table-dark">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Field</th>
        <th>Manage</th>
      </tr>
    </thead>
	<form enctype="multipart/form-data" method="post">
		<tbody id="tbodyContainer">
		  <tr>
			<td><span>1</span></td>
			<td><input id='1' name="upload[]" type="file" class="form-control"/></td>
			<td><button type="button" id="file1" onclick="deleteField(this)" class="form-control deleteButton"><i class="fa fa-trash"></i> Delete</button></td>
		  </tr>
		</tbody>
	</form>
  </table>
</div>

</body>
</html>
