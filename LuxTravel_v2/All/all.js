
var countries;
window.addEventListener('load', () => {
    loadJSDocument();
});

function loadJSDocument() { 
    $.ajax({
        type: "GET",
        url: "../countries.json",
        dataType: "json",
        success: function (response) {
            countries = response.countries;
            countries.forEach(country => {
                createCountryCard(country);
            });
        }
    });
}

var searchButton = document.getElementById("searchButton");
var searchInput = document.getElementById("searchInput");
searchButton.onclick = function() {
    console.log(countries);
    var filteredCountries = countries.filter(country => (country.title.includes(searchInput.value) || country.description.includes(searchInput.value)));
    let countriesElement = document.getElementById("countries");
    countriesElement.innerHTML = "";
    filteredCountries.forEach(country => {
        createCountryCard(country);
    });
};

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
    cardTitle.innerHTML = `${country["title"]}`;
    if (country.isTop) {
        cardTitle.innerHTML += '   <span class="badge badge-success">TOP</span>';
    }
    
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
    
    let countries = document.getElementById("countries");
    countries.appendChild(mainDiv);
}