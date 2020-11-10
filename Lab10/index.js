let body = document.getElementsByTagName("body")[0];
for(var i = 0; i < 10; i++) {
    let divNode = document.createElement("div");
    divNode.style.height = "100px";
    bgChange(divNode);
    if (i % 2 == 0) {
        divNode.onclick = function(event) {
            bgChange(event.target);
        };
    } else {
        divNode.addEventListener("click", function(event) {
            bgChange(event.target);
        });
    }
    body.appendChild(divNode);
}

function random(number) { 
    return Math.floor(Math.random() * (number+1)); 
} 

function bgChange(element) { 
    const rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
    element.style.backgroundColor = rndCol; 
} 