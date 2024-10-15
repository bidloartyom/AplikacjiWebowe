let techs = document.getElementById("tech-list")

document.getElementById("add").onclick = function(){
    const tech = document.createElement("li")
    tech.innerHTML = document.getElementById("name").value
    techs.appendChild(tech)
}

document.getElementById("delete").onclick = function(){
    const ost = techs.lastChild;
    techs.removeChild(ost)
}

document.getElementById("delete-all").onclick = function(){
    Array.from(techs.children).forEach(li => techs.removeChild(li))
}