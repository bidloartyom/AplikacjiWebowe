let lp = 0; 

function addMovie() {
    lp++;
    const title = document.getElementById("title").value;
    const director = document.getElementById("director").value;
    const year = document.getElementById("year").value;

    const newRow = document.createElement("tr");
    newRow.innerHTML = `
        <td>${lp}</td>
        <td>${title}</td>
        <td>${director}</td>
        <td>${year}</td>
    `;
    

    const tableBody = document.getElementById("moviesTableBody");
    tableBody.appendChild(newRow);

    document.getElementById("title").value = "";
    document.getElementById("director").value = "";
    document.getElementById("year").value = "";
}
