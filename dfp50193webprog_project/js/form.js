	function submit(){ //function submit() used for submit the form
		document.getElementById("myForm").innerHTML = document.getElementById("name").value + " is " + document.getElementById("age").value + " years old " + document.getElementById("gender").value + ".<br>" +  document.getElementById("name").value + " likes " + document.querySelector('input[name = img]:checked').value + " because " + document.getElementById("comment").value + ".";	
		alert('Thank you for your time!'); //Display pop-up alert message after user clicked button submit
	}
	
 	function reset(){ //function reset() used for clear all the input data 
		document.getElementById("myForm").reset();
	}
	
	function changeBackgroundColor(element, color) { //function changeBackgroundColor() used for changing background color
		element.style.backgroundColor = color;
	}
	
	function validityCheck() { //function validityCheck() used for validation check
		if (document.getElementById('name').value == "") { //This is for id="name"
			alert('Please enter your name'); //Display pop-up alert message for input name
			document.getElementById('name').style.borderColor = "red";
			return false;
		}
		else if (document.getElementById('age').value == "") { //This is for id="age"
			alert('Please select your age'); //Display pop-up alert message for select their age
			document.getElementById('age').style.borderColor = "red";
			return false;
		}
		else if (document.getElementById('comment').value == "") { //This is for id="comment"
			alert('Please enter your comment'); //Display pop-up alert message for input their feedback
			document.getElementById('comment').style.borderColor = "red";
			return false;
		}
	}
	
	const myBox = document.getElementById("myBox"); //constant is a type of variable
	//const: value cannot be changed after it has been initialized.
	
	try { //testing error
		changeBackgroundColor(myBox, "blue");
	}
	catch(e) { //generate an error message, 'e' is an event handling function/event object
		alert('This is our feedback page, please take a moment to leave your feedback HERE');
	}
	finally { //Executing the code after try and catch
		console.log(20);
	}