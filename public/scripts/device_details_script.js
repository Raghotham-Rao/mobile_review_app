$(document).ready(() => {
	var device_name = document.getElementById("device_name").innerHTML.trim();
	$.ajax({
        type: "post",
        url: `http://localhost:8777/db/device_specs/${device_name}`,
        success: function (response) {
            console.log(response);
        }
    });
});