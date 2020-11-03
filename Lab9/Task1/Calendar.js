let container = document.getElementById("container");
let days = container.getElementsByClassName("day");
for (let day of days) {
    day.onclick = function(event) {
        let borderColor = event.target.style.borderColor;
        let fontSize = event.target.style.fontSize;
        let color = event.target.style.color;
        event.target.style.color = color === "white" ? "rgb(56, 4, 104)" : "white";
        event.target.style.fontSize = fontSize === "48px" ? "32px" : "48px";
        event.target.style.borderColor = borderColor === "white" ? "rgb(56, 4, 104)" : "white";
      }
}
let weekdays = container.getElementsByClassName("weekend");
for (let day of weekdays) {
    day.onclick = function(event) {
        let borderColor = event.target.style.borderColor;
        let fontSize = event.target.style.fontSize;
        let color = event.target.style.color;
        event.target.style.color = color === "red" ? "rgb(56, 4, 104)" : "red";
        event.target.style.fontSize = fontSize === "64px" ? "32px" : "64px";
        event.target.style.borderColor = borderColor === "red" ? "rgb(56, 4, 104)" : "red";
      }
}