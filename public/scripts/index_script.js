var preprocess = (str, pattern, replace_str) => {
    while(str.includes(pattern)){
        str = str.replace(pattern, replace_str);
    }
    return str;
};

$(document).ready(function () {
    $.ajax({
        type: "post",
        url: "http://localhost:8777/db/top-rated",
        success: function (response) {
            var parent = document.querySelector("#top-rated-phones>div");
            for(phone of response){
                var container_link = document.createElement('a');
                container_link.setAttribute('class', 'phone-card');
                try{
                    container_link.setAttribute('href', '/db/devices/' + phone.name.replaceAll(' ', '_'));
                }catch(err){
                    container_link.setAttribute('href', '/db/devices/' + preprocess(phone.name));
                }

                var phone_card = document.createElement("div");
                phone_card.setAttribute('class', 'card');

                var card_body = document.createElement('div');
                card_body.setAttribute('class', 'card-body p-1');

                var phone_image = document.createElement('img');
                phone_image.setAttribute('class', 'img-thumbnail m-0');
                phone_image.setAttribute('src', phone["thumbnail_img"]);
                phone_image.setAttribute('alt', 'Ajay not done yet!');

                card_body.appendChild(phone_image);

                var card_footer = document.createElement('div');
                card_footer.setAttribute('class', 'card-footer p-1 text-center');

                var phone_name = document.createElement('h6');
                phone_name.setAttribute('class', 'text-dark');
                phone_name.innerText = phone.name;
                var phone_price = document.createElement('h6');
                phone_price.setAttribute('class', 'text-success');
                phone_price.innerText = phone.specifications.MISC.Price.split('/')[0].replace('<--dot-->', '.');
                
                card_footer.appendChild(phone_name);
                card_footer.appendChild(phone_price);

                phone_card.appendChild(card_body);
                phone_card.appendChild(card_footer);
                container_link.appendChild(phone_card);
                parent.appendChild(container_link);
            }
            // console.log(response);
        }
    }); 
});