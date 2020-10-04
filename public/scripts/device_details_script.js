var preprocess = (str, pattern, replace_str) => {
    while(str.includes(pattern)){
        str = str.replace(pattern, replace_str);
    }
    return str;
};

var load_specs = () => {
	var device_name = document.getElementById("device_name").innerHTML.trim();
	$.ajax({
        type: "post",
        url: `http://localhost:8777/db/device_specs/${device_name}`,
        success: function (response) {
            var dataObj = JSON.parse(response)[0];
            
            var parent = document.getElementById("inner_container");
            var table = document.createElement('table');
            table.setAttribute('class', 'table table-borderless');

            parent.innerHTML = "";

            for(spec in dataObj["specifications"]){

                table.innerHTML += `<tr><th colspan="2" class="display-4">${spec}</th></tr>`;

                for(key in dataObj["specifications"][spec]){
                	try{
                    	table.innerHTML += `<tr><td>${key}</td> <td>${dataObj["specifications"][spec][key].replaceAll('<--dot-->', '.')}</td> </tr>`;
                    }catch(err){
                    	table.innerHTML += `<tr><td>${key}</td> <td>${preprocess(dataObj["specifications"][spec][key], '<--dot-->', '.')}</td> </tr>`;
                    }
                }

                table.innerHTML += '<tr><td colspan="2"><hr></td></tr>'
                // break;
            }
            parent.appendChild(table);
            // console.log(dataObj["specifications"]);
        }
    });
};

var load_gallery = () => {
	var device_name = document.getElementById("device_name").innerHTML.trim();
	// $.ajax({
	// 	type: "post",
	// 	url: `http://localhost:8777/db/device_images/${device_name}`,
	// 	success: () => {}
	// });
	var parent = document.getElementById("inner_container");
	parent.innerHTML = '<div class="jumbotron m-5"> <h1 class="display-4"> No image Available </h1></div>'
}

$(document).ready(() => {
	load_specs();
});

$("#gallery_tab").click((event) => {
	$(".page-item").attr("class", "page-item page-link text-secondary");
	$(event.target).attr("class", "page-item page-link bg-dark text-light");
	load_gallery();
});

$("#specs_tab").click((event) => {
	$(".page-item").attr("class", "page-item page-link text-secondary");
	$(event.target).attr("class", "page-item page-link bg-dark text-light");
	load_specs();
});