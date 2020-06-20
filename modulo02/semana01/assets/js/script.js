document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('formContact').addEventListener('submit', e => {
       let obj = getFormData();
       if(!validateData(obj)){
            e.preventDefault();
       }
    });
});

const getFormData = () => {
    return {
        name : [document.getElementById('name').value, 'name'],
        email : [document.getElementById('email').value, 'email'],
        phone : [document.getElementById('phone').value, 'phone'],
        subject : [document.getElementById('subject').value, 'subject'],
        message : [document.getElementById('message').value, 'message']
    };
}

const validateData = obj => {
    let errors = [];

    if(obj.name[0].length < 3 || obj.name[0].length > 50){
        errors.push('O nome deve conter no minimo 3 e maximo 50 caracteres!');
        setBorderColor(obj.name[1], 'invalid');
    } else {
        setBorderColor(obj.name[1], 'valid');
    }

    if((obj.email[0].length < 5 || obj.email[0].length > 100) || !/.+?\@.+?\..+/.test(obj.email[0])){
        errors.push('Informe um email válido.');
        setBorderColor(obj.email[1], 'invalid');
    } else {
        setBorderColor(obj.email[1], 'valid');
    }


    if(!/^\(?\d{2}\)?[\s-]?[\s9]?\d{4}-?\d{4}$/.test(obj.phone[0])){
        errors.push('Informe um telefone válido.');
        setBorderColor(obj.phone[1], 'invalid');
    } else {
        setBorderColor(obj.phone[1], 'valid');
    }


    if (errors.length > 0) {
        setMessageError(errors);
        return false;
    }

    return true;
}

const setBorderColor = (el, color) => {
    document.getElementById(el).className = color;
}

const setMessageError = data => {
    let errorMessage = document.getElementById('errorMessage');
    errorMessage.innerHTML = '';

    let ul = document.createElement('ul');

    for (let i = 0; i < data.length; i++) {
        let li = document.createElement('li');
        li.innerHTML = '<div class="alert">' + data[i] + '</div>';

        ul.appendChild(li);
    }

    errorMessage.appendChild(ul);
}