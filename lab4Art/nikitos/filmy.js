let lp = 1;

document.getElementById("add").onclick = function(){
    const wiersz = document.createElement("tr")
    const td1 = document.createElement("td")
    td1.innerHTML = lp;
    lp++
    const td2 = document.createElement("td")
    td2.innerHTML = document.getElementById("name").value
    const td3 = document.createElement("td")
    td3.innerHTML = document.getElementById("director").value
    const td4 = document.createElement("td")
    td4.innerHTML = document.getElementById("year").value
    wiersz.appendChild(td1)
    wiersz.appendChild(td2)
    wiersz.appendChild(td3)
    wiersz.appendChild(td4)
    document.getElementById("tabla").appendChild(wiersz)
    document.getElementById("name").value = "";
    document.getElementById("director").value = "";
    document.getElementById("year").value = "";
}