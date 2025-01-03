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


function show_message(type, text){


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
