createCarousel();
loadJSDocument();
function loadJSDocument() { 
    $.ajax({
        type: "GET",
        url: "./top_countries.json",
        dataType: "json",
        success: function (response) {
            response["countries"].forEach(topCountry => {
                createCountryCard(topCountry);
            });
        }
    });
}

function createCarousel() {
    let inner = document.getElementById("carousel");
  [["https://images4.alphacoders.com/987/987008.jpg", " active"], 
    ["https://img1.akspic.ru/image/85659-orientir-metropoliya-stolica-gorodskoj_rajon-gorizont-3840x2160.jpg", ""]].forEach(image => {
      let item = document.createElement("div");
      item.className = `carousel-item${image[1]}`;

      let img = document.createElement("img");
      img.src = image[0];
      img.className = "d-block w-100";

      item.appendChild(img);
      inner.appendChild(item);
    });
}

function createCountryCard(country) {
    let mainDiv = document.createElement("div");
    mainDiv.className = "col mb-4"

    let card = document.createElement("div");
    card.className = "card text-center bg-light mb-3 h-100";

    let cardImageTop = document.createElement("img");
    cardImageTop.className = "card-img-top card-im-height";
    cardImageTop.alt = "Флаг страны";
    cardImageTop.src = country["flag"];

    let cardBody = document.createElement("div");
    cardBody.className = "card-body";

    let cardTitle = document.createElement("h4");
    cardTitle.className = "card-title";
    cardTitle.innerHTML = `${country["title"]}  <span class="badge badge-success">TOP</span>`;
    
    let cardText = document.createElement("p");
    cardText.innerHTML = country["description"];
    
    let cardLink = document.createElement("a");
    cardLink.className = "btn btn-outline-primary btn-lg btn-block";
    cardLink.href = "#";
    cardLink.innerHTML = "Подробнее";

    let cardFooter = document.createElement("div");
    cardFooter.className = "card-footer"

    cardBody.appendChild(cardTitle);
    cardBody.appendChild(cardText);
    cardFooter.appendChild(cardLink);

    card.appendChild(cardImageTop);
    card.appendChild(cardBody);
    card.appendChild(cardFooter);

    mainDiv.appendChild(card);
    
    let topCountries = document.getElementById("topCountries");
    topCountries.appendChild(mainDiv);
}