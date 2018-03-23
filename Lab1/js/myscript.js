function insRow(id) {
    var x = document.getElementById(id).insertRow(0);
    var y = x.insertCell(0);
    var z = x.insertCell(1);
    y.innerHTML = z.innerHTML = "New";
}