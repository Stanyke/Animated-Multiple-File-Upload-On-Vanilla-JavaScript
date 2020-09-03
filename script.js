formNewInput = () =>
{
	let allInputFields = document.querySelectorAll('input[type="file"]'); // Get all input fields with attribute type: file
	
	if(allInputFields.length > 0) // Check if input fields gotten is greather than zero
	{
		let lastInputField = allInputFields[allInputFields.length - 1]; // Get the last input field available
		var totalInputsAvailable = lastInputField.id; // Get the id value of the last input field available
		
		totalInputsAvailable++; // Add an extra number to the id value of the last input field available
	}
	else // Check if input fields gotten is less than zero
	{
		var totalInputsAvailable = 1; // Give the total number of inputs available equals 1, since all has been cleared/deleted by user
	}
    
	
	// Create tr
	let tr = document.createElement('tr');
	tr.setAttribute('class', 'animate__animated animate__zoomInDown'); // Add animation to this newly added tr
	
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
    input.setAttribute('class', 'form-control-file border');
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
	
	setTimeout( () =>
	{
		tr.setAttribute('class', ''); // Remove animation from this newly added tr after 1second of animation taking it's time to display, so to avoid deleting animation not working
	}, 1000);
}



deleteField = (e) =>
{
	var p = e.parentNode.parentNode;
	if(p.className += ' animate__animated animate__backOutDown')
	{
		setTimeout( () =>
		{
			p.parentNode.removeChild(p);
		}, 500);
	}
}
