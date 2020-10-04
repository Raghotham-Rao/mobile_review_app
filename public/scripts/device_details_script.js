$(document).ready(() => {
	var device_name = document.getElementById("device_name").innerHTML.trim();
	$.ajax({
        type: "post",
        url: `http://localhost:8777/db/device_specs/${device_name}`,
        success: function (response) {
            var dataObj = JSON.parse(response)[0];
            
            var parent = document.getElementById("inner_container");
            var table = document.createElement('table');
            table.setAttribute('class', 'table table-borderless');

            for(spec in dataObj["specifications"]){

                table.innerHTML += `<tr><th colspan="2" class="display-4">${spec}</th></tr>`;

                for(key in dataObj["specifications"][spec]){
                    table.innerHTML += `<tr><td>${key}</td> <td>${dataObj["specifications"][spec][key].replaceAll('<--dot-->', '.')}</td> </tr>`;
                }

                table.innerHTML += '<tr><td colspan="2"><hr></td></tr>'
                // break;
            }
            parent.appendChild(table);
            // console.log(dataObj["specifications"]);
        }
    });
});