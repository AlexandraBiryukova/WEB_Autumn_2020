window.addEventListener('load', () => {
    loadJSDocument();
});

function loadJSDocument() { 
    $.ajax({
        type: "GET",
        url: "../offices.xml",
        dataType: "xml",
        success: function (responseXML) {
            var cities = responseXML.getElementsByTagName("city");
            var titles = ["Город", "Адрес", "Телефон"];
            var tags = ["address", "tel"];
            var tableInnerHtml = "<thead class=thead-light><tr>" + titles.map(function(title) { return `<th>${title}</th>`}).join('') + "</tr></thead><tbody>" ;  
            for(var i = 0; i < cities.length; i++){
                var offices = cities[i].getElementsByTagName("office");
                for(var j = 0; j < offices.length; j++){
                    tableInnerHtml += `<tr`;
                    if(j % 2 !=0) {
                        tableInnerHtml+=' class= "bg-blue-light"';
                        tableInnerHtml+= ' style = "color:white;"';
                    } else {
                        tableInnerHtml+=' class= "bg-light"';
                    }
                    tableInnerHtml +=">";
                    if (j == 0) {
                        tableInnerHtml += `<td rowspan=${offices.length}> ${cities[i].getElementsByTagName("title")[0].childNodes[0].nodeValue}</td>`;
                    }
                    var values = tags.map (function(tag) { return [tag, offices[j].getElementsByTagName(tag)[0].childNodes[0].nodeValue] });
                    tableInnerHtml += values.map(function(value) { return `<td>${value[1]}</td>`}).join(''); 
                    tableInnerHtml +="</tr>" 
                } 
                
            }
            tableInnerHtml += '</tbody>';
            var table = document.createElement('table');
            table.className = "table table-primary table-hover";
            table.innerHTML = tableInnerHtml;
            document.body.appendChild(table);
        }
    });
}