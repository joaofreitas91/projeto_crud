// const inputCpf = document.getElementById('cpf');

// if (inputCpf !== null) {
//     inputCpf.addEventListener('input', (event) => {
//         event.target.value = mascaraCpf(event.target.value);
//     });
// }

// function mascaraCpf(value) {
//     return value
//         .replace(/\D/g, '')
//         .replace(/(\d{3})(\d)/, '$1.$2')
//         .replace(/(\d{3})(\d)/, '$1.$2')
//         .replace(/(\d{3})(\d{1,2})/, '$1-$2')
//         .replace(/(-\d{2})\d+?$/, '$1');

// }

function cadClient() {
    window.location.href = "../cliente/formCreateClient.html"
}
function backHome() {
    window.location.href = "../index.html"
}

function backClient() {
    window.location.href = "../cliente/readClient.php"
}