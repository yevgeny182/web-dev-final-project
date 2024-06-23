var selectedRow = null

function onFormSubmit() {
        var inputform = readFormData();
        if (selectedRow == null)
            insertNewRecord(inputform);
        else
            updateRecord(inputform);
        resetForm();
}

function readFormData() {
    var inputform = {};
    inputform["lname"] = document.getElementById("lname").value;
    inputform["fname"] = document.getElementById("fname").value;
    inputform["email"] = document.getElementById("email").value;
    inputform["cntct"] = document.getElementById("cntct").value;
    return inputform;
}

function insertNewRecord(data) {
    var table = document.getElementById("insertedList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.lname;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.fname;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.email;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.cntct;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = `<button style='background-color: green; color: white; width: 100%'
    onClick="onEdit(this)">Edit </button>
                       <button style='background-color: red; color: white; width: 100%' 
    onClick="onDelete(this)">Delete</button>`;

}

function resetForm() {
    document.getElementById("lname").value = "";
    document.getElementById("fname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("cntct").value = "";
    selectedRow = null;
}

function onEdit(td) {
    alert("editing");
    selectedRow = td.parentElement.parentElement;
    document.getElementById("lname").value = selectedRow.cells[0].innerHTML;
    document.getElementById("fname").value = selectedRow.cells[1].innerHTML;
    document.getElementById("email").value = selectedRow.cells[2].innerHTML;
    document.getElementById("cntct").value = selectedRow.cells[3].innerHTML;
}
function updateRecord(inputform) {
    selectedRow.cells[0].innerHTML = inputform.lname;
    selectedRow.cells[1].innerHTML = inputform.fname;
    selectedRow.cells[2].innerHTML = inputform.email;
    selectedRow.cells[3].innerHTML = inputform.cntct;
}

function onDelete(td) {
        if(confirm("Deleting inserted data, continue?")){
        row = td.parentElement.parentElement;
        document.getElementById("insertedList").deleteRow(row.rowIndex);
        resetForm();
        }

}
