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

function backHome() {
    window.location.href = "../index.html"
}
function cadClient() {
    window.location.href = "../cliente/formCreateClient.html"
}
function backClient() {
    window.location.href = "../cliente/readClient.php"
}
function cadProduto() {
    window.location.href = "../produtos/formCreateProducts.html"
}
function backProduct() {
    window.location.href = "../produtos/readProducts.php"
}
function cadOrder() {
    window.location.href = "../order/formCreateOrder.html"
}
function backOrder() {
    window.location.href = "../order/readOrder.php"
}