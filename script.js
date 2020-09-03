formNewInput = () =>
{
	let allInputFields = document.querySelectorAll('input[type="file"]');
	
	if(allInputFields.length > 0)
	{
		let lastInputField = allInputFields[allInputFields.length - 1];
		var totalInputsAvailable = lastInputField.id;
		
		totalInputsAvailable++;
	}
	else
	{
		var totalInputsAvailable = 1;
	}
    
	
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
	if(p.className += ' animate__animated animate__backOutDown')
	{
		setTimeout( () =>
		{
			p.parentNode.removeChild(p);
		}, 500);
	}
}
