var preprocess = (str, pattern, replace_str) => {
    while(str.includes(pattern)){
        str = str.replace(pattern, replace_str);
    }
    return str;
};

$(document).ready(() => {
	$.ajax({
        type: "get",
        url: "http://localhost:8777/db/brands",
        success: function (response) {
            var parent = document.querySelector("#brands_aside");
            for(brand of response){
                var brand_link = document.createElement('a');
                brand_link.setAttribute("class", "list-group-item list-group-item-action cursor-pointer");
                brand_link.innerText = brand;
                parent.appendChild(brand_link);
            }
            var view_all = document.createElement('a');
            view_all.setAttribute('class', 'list-group-item list-group-item-action cursor-pointer bg-secondary text-light');
            view_all.innerText = 'View All';
            parent.appendChild(view_all);
            // console.log(response);
        }
    });
});

$("#search_device_form").submit((event)  => {
    event.preventDefault();
    var device_name = preprocess($("#search_box").val(), ' ', '_');
    window.location = `http://localhost:8777/db/devices/${device_name}`;
});