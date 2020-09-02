<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multiple File Upload Using Vanilla JavaScript</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 100px;">
  <h2 class="mb-4" align="center">Multiple File Upload Using Vanilla JavaScript</h2>

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

<script>
formNewInput = () =>
{
	let allInputFields = document.querySelectorAll('input[type="file"]');
    let lastInputField = allInputFields[allInputFields.length - 1];
	var totalInputsAvailable = lastInputField.id;
	
    totalInputsAvailable++;
	
	// Create tr
	let tr = document.createElement('tr');
	
	// Create td For Serial Number In Span
	let tdForSpan = document.createElement('td');
	
	// Create td Span For Serial Number
	let tdSpan = document.createElement('span');
    tdSpan.innerHTML = totalInputsAvailable;
	
	// Create td For Input Field
	let tdForInput = document.createElement('td');
	
	// Create Input Field
	let input = document.createElement('input');
    input.type = "file";
    input.setAttribute('id', totalInputsAvailable);
    input.setAttribute('class', 'form-control');
    input.setAttribute('name', 'upload[]');
	
	// Create td For Delete Button
	let tdForDeleteButton = document.createElement('td');
	
	// Create Remove Button
	let tdDeleteButton = document.createElement('button');
	tdDeleteButton.type = 'button';
	tdDeleteButton.setAttribute('id', 'file'+totalInputsAvailable);
	tdDeleteButton.setAttribute('class', 'form-control deleteButton');
	tdDeleteButton.setAttribute('onclick', 'deleteField(this)');
	
	// Create Delete text
	let deleteText = document.createTextNode(" Delete");
	
	// Create Remove Button Fa Fa Icon
	let deleteButtonIcon = document.createElement('i');
	deleteButtonIcon.setAttribute('class', 'fa fa-trash');

	
	let newElementContainer = document.getElementById("tbodyContainer");
	
    // Add Created Items/Fields/Elements To Table
	
	newElementContainer.appendChild(tr); // Add newly created tr to tbody tag inside table
	
	tr.appendChild(tdForSpan); // Add td for span into tr
	
	tdForSpan.appendChild(tdSpan); // Add span into td for span
	
	tr.appendChild(tdForInput); // Add td for input field into tr
	tdForInput.appendChild(input); // Add input field into td for input fields
	
	tr.appendChild(tdForDeleteButton); // Add td for delete button into tr
	tdForDeleteButton.appendChild(tdDeleteButton); // Add delete button into td for delete
	tdDeleteButton.appendChild(deleteButtonIcon); // Add delete button fa fa icon into delete button
	tdDeleteButton.appendChild(deleteText); // Add delete text beside delete button icon
}



deleteField = (e) =>
{
	var p = e.parentNode.parentNode;
    p.parentNode.removeChild(p);
}
</script>
