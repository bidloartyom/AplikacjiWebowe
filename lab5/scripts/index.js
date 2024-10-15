let contactCounter = 0;

document.getElementById('add-contact-btn').addEventListener('click', function() {
    const name = document.getElementById('name').value;
    const surname = document.getElementById('surname').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const birthdate = document.getElementById('birthdate').value;
    const gender = document.getElementById('gender').value;
    const group = document.getElementById('group').value;

    const tableBody = document.querySelector('#contacts-table tbody');
    const newRow = tableBody.insertRow();
    
    newRow.className = group;

    const cellIndex = newRow.insertCell(0);
    cellIndex.textContent = ++contactCounter;

    newRow.innerHTML += `
        <td>${name}</td>
        <td>${surname}</td>
        <td>${email}</td>
        <td>${age}</td>
        <td>${birthdate}</td>
        <td>${gender}</td>
        <td>${group}</td>
    `;
});
document.getElementById('add-contact-btn').addEventListener('click', function() {

    const petAnimation = document.createElement('div');
    petAnimation.id = 'pet-animation';
    document.body.appendChild(petAnimation);

    setTimeout(function() {
        petAnimation.remove();
    }, 2000);
});