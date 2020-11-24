createInitialElements()
function createInitialElements() {
    var title = document.createElement('h1');
    title.innerHTML = "Food Menu";

    var showButton = document.createElement('button');
    showButton.innerHTML = "Show the Menu";
    showButton.onclick = function(event) {
            loadXMLDocument();
            event.target.disabled = true;
    };

    document.body.appendChild(title);
    document.body.appendChild(showButton);
}

function loadXMLDocument() { 
    $.ajax({
        type: "GET",
        url: "./data.json",
        dataType: "json",
        success: function (response) {
            console.log(response);
            var foods = response;
            var tags = ["name", "price", "description", "calories"];
            var tableInnerHtml = "<tr>" + tags.map(function(tag) { return `<th>${tag}</th>`}).join('') + "</tr>" ;  
            for(var i = 0; i < foods.length; i++){
                var values = tags.map (function(tag) { return [tag, foods[i][tag]] });
                tableInnerHtml += "<tr>" + values.map(function(value) { return `<td class = ${value[0]}>${value[1]}</td>`}).join('') + "</tr>" ;  
            }
            var table = document.createElement('table');
            table.innerHTML = tableInnerHtml;
            document.body.appendChild(table);
            createOrderButton(tableInnerHtml);
        }
    });
}

function createOrderButton(tableInnerHtml) {
    var orderButton = document.createElement('button');
    orderButton.innerHTML = "Make an order";
    orderButton.onclick = (event) => {
        event.target.disabled = true;
        createOrderTable(tableInnerHtml);
    };
    document.body.appendChild(orderButton);
}

function createOrderTable(tableInnerHtml) {
    var orderTable = document.createElement('table');
    orderTable.innerHTML = tableInnerHtml;
    ["Count", "Summary"].forEach(element => {
        for (i = 0; i < orderTable.rows.length; i++) {
            switch (i) {
                case 0:
                    let header = document.createElement("th");
                    header.innerHTML = element;
                    orderTable.rows[i].appendChild(header);
                    break;
                default:
                    let cell = document.createElement("td");
                    switch (element) {
                        case "Count":
                            let input = document.createElement("input");
                            input.type = "search";
                            input.value = 0;
                            input.oninput = function(event) { calculateSummary(event.target); };
                            cell.appendChild(input);
                            break;
                        default:
                            cell.className = "summary";
                            cell.innerHTML = "0";
                            break;
                    }
                    orderTable.rows[i].appendChild(cell);
                    break;
            }
        }
    });
    let newRow = orderTable.insertRow()
    newRow.innerHTML = "<td colspan = 4></td><td>Total</td><td id = totalPrice>0</td>" 
    document.body.appendChild(orderTable);
}

function calculateSummary(input) {
    input.value = isNaN(parseInt(input.value)) ? 0 : parseInt(input.value)
    let row = input.parentNode.parentNode;
    let price = row.getElementsByClassName("price")[0];
    let summary = row.getElementsByClassName("summary")[0];
    let priceValue = parseFloat(price.innerHTML.replace("$", ""));
    let count = parseInt(input.value)
    summary.innerHTML = (count * priceValue);
    calculateTotalPrice()
}

function calculateTotalPrice() {
    let totalPrice = document.getElementById("totalPrice");
    let summaries = document.getElementsByClassName("summary");
    let totalPriceValue = 0;
    for (let summary of summaries){
        totalPriceValue += parseFloat(summary.innerHTML);
    }
    totalPrice.innerHTML = totalPriceValue;  
}