function addItem() {
    let liNode = document.createElement("li");
    let divNode = document.createElement("div");
    divNode.className = "listElement";

    let pNode = document.createElement("p");
	let text = document.getElementById("inputText").value;
	let pText = document.createTextNode(text);
    pNode.appendChild(pText);

    let buttonNode = document.createElement("button");
    buttonNode.innerHTML = "DELETE";
    buttonNode.className = "delete";
    buttonNode.onclick = deleteItem;

    divNode.appendChild(pNode);
    divNode.appendChild(buttonNode);
    liNode.appendChild(divNode);

	let list = document.getElementById("list");
    list.appendChild(liNode);
    document.getElementById("inputText").value = "";

}

function deleteItem(event) {
    let list = document.getElementById("list");
    let liNode = event.target.parentNode.parentNode;
    list.removeChild(liNode);
}