function add() {
    const newTechnology = prompt("Podaj nazwę nowej technologii:");
    if (newTechnology) {
        const technologyList = document.getElementById("technologyList");
        const li = document.createElement("li");
        li.textContent = newTechnology;
        technologyList.appendChild(li);
    }
}

function remove() {
    const technologyList = document.getElementById("technologyList");
    if (technologyList.children.length > 0) {
        technologyList.removeChild(technologyList.lastElementChild);
    } else {
        alert("Nie ma żadnych technologii do usunięcia!");
    }
}

function removeAll() {
    const technologyList = document.getElementById("technologyList");
    if (technologyList.children.length > 0) {
        Array.from(technologyList.children).forEach(li => technologyList.removeChild(li));
    } else {
        alert("Lista technologii jest już pusta!");
    }
}
