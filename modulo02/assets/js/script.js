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
        subject : [document.getElementById('subject').value, 'subject']
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
}

const setBorderColor = (el, color) => {
    document.getElementById(el).className = color;
}