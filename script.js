function validateForm() {
    let code = document.forms["addClient"]["code"].value;
    let name = document.forms["addClient"]["name"].value;
    let lastName = document.forms["addClient"]["lastName"].value;
    let age = document.forms["addClient"]["age"].value;

    var codeRequired = false;
    document.getElementById('code').innerHTML = '';
    if (code == "") {
        codeRequired = true;
        document.getElementById('code').innerHTML = 'Campo obrigatório';
    }

    var nameRequired = false;
    document.getElementById('name').innerHTML = '';
    if (name == "") {
        nameRequired = true;
        document.getElementById('name').innerHTML = 'Campo obrigatório';
    }

    var lastNameRequired = false;
    document.getElementById('lastName').innerHTML = '';
    if (lastName == "") {
        lastNameRequired = true;
        document.getElementById('lastName').innerHTML = 'Campo obrigatório';
    }

    var ageRequired = false;
    document.getElementById('age').innerHTML = '';
    if (age == "") {
        ageRequired = true;
        document.getElementById('age').innerHTML = 'Campo obrigatório';
    }

    if (codeRequired || nameRequired || lastNameRequired || ageRequired) {
        return false;
    }
}