function loadTable() {

	fetch('php/load-table.php')
		.then((response) => response.json())
		.then((data) => {
			var tbody = document.getElementById("tbody");

			if (data["empty"]) {

				tbody.innerHTML = `<tr><td colspan='6' align="center">No data found</td></tr>`;

			} else {
				var tr = '';

				for (var i in data) {

					tr += `<tr>
		            <td align="center">${data[i].id}</td>
		            <td>${data[i].first_name} ${data[i].last_name}</td>
		            <td>${data[i].course_name}</td>
		            <td>${data[i].city}</td>
		            <td align="center"><button class="edit-btn" onclick="editRecord(${data[i].id})">Edit</button></td>
		            <td align="center"><button class="delete-btn" onclick="deleteRecord(${data[i].id})">Delete</button></td>
		          </tr>`;

				}

				tbody.innerHTML = tr;

			}
		})
		.catch((error) => {
			show_message("error", `can't fetch data'`);
		})

}


loadTable();


function addNewModal() {

	let addModal = document.getElementById("addModal");
	addModal.style.display = "block";


	fetch('php/fetch-class-field.php')
		.then((response) => response.json())
		.then((data) => {
			
			let classlist = document.getElementById("classlist");

			let option = "<option value='0' disabled selected>select class</option>";

			for (var i in data) {
				
				option += `<option value=${data[i].id}>${data[i].course_name}</option>`;
				

			}

			classlist.innerHTML = option;


		})
		.catch((error) => {
			show_message("error", `can't fetch data'`);
		})


}




function hide_modal() {

	let addModal = document.getElementById("addModal");
	addModal.style.display = "none";

}


// Add Student Record
function submit_data(){
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var sClass = document.getElementById('classlist').value;
	var city = document.getElementById('city').value;

	if(fname === '' || lname === '' || sClass === '0' || city === ''){
		alert('Please Fill All The Fields');
		return false;
	}else{
		var formdata = {
			'fname' : fname,
			'lname' : lname,
			'class' : sClass,
			'city' : city
		}

		 let jsonData = JSON.stringify(formdata);


		

		 fetch('php/fetch-insert.php', {
			method: 'POST',
			body: jsonData,
			headers: {
				'Content-Type': 'application/json',
			},
		})
			.then((response) => {
				if (!response.ok) {
					throw new Error(`HTTP error! Status: ${response.status}`);
				}
				return response.json(); // Parse JSON response
			})
			.then((data) => {
				console.log("Response from server:", data);
			})
			.catch((error) => {
				console.error("Fetch error:", error);
			});
		
		
	}
}


function show_message(type, text) {


	if (type == 'error') {
		var message_box = document.getElementById("error-message");
	} else {
		var message_box = document.getElementById("success-message");
	}


	message_box.innerHTML = text;

	message_box.style.display = "block";

	setTimeout(() => {
		message_box.style.display = "none";
	}, 3000);

}
