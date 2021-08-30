const inputCpf = document.getElementById('cpf');

if (inputCpf !== null) {
    inputCpf.addEventListener('input', (event) => {
        event.target.value = mascaraCpf(event.target.value);
    });
}
function mascaraCpf(value) {
    return value
        .replace(/\D/g, '')
        .replace(/(\d{3})(\d)/, '$1.$2')
        .replace(/(\d{3})(\d)/, '$1.$2')
        .replace(/(\d{3})(\d{1,2})/, '$1-$2')
        .replace(/(-\d{2})\d+?$/, '$1');
}
function upperCase(event) {
    event.target.value = event.target.value.toUpperCase()
}
function valida(e) {
    e.preventDefault();

    let inpCPF = document.querySelector("#cpf")

    if (inpCPF) {
        if (inpCPF.value.length < 14) {
            alert('Preencha o cpf completo');
            return false;
        } else {
            e.target.submit();
        }
    }

    if (document.getElementById('cod_barras').value.length !== 13) {
        alert('preencha 13 numeros')
        return false
    } else {
        e.target.submit()
    }
}

const inpValue = document.getElementById('valor_unitario');

if (inpValue) {
    inpValue.addEventListener('input', (event) => {
        event.target.value = formatMoneyValue(event.target.value)
    });
}

function formatMoneyValue(valueMoney) {
    valueMoney = parseInt(valueMoney.replace(/\D/g, '')).toString();
    let formatedValue = '';
    if (valueMoney === '0' || valueMoney === 'NaN') {
        formatedValue = '';
    } else if (valueMoney.length === 1) {
        formatedValue += '00' + valueMoney;
    } else if (valueMoney.length === 2) {
        formatedValue += '0' + valueMoney;
    } else {
        formatedValue = valueMoney;
    }
    if (formatedValue.length > 0) {
        const lastTwo = formatedValue.substr(-2);
        const resto = formatedValue.substr(0, formatedValue.length - 2);
        formatedValue = resto + ',' + lastTwo;
        if (formatedValue.length >= 7) {
            const lastSix = formatedValue.substr(-6);
            const resto = formatedValue.substr(0, formatedValue.length - 6);
            formatedValue = resto + '.' + lastSix;
        }
        // formatedValue = 'R$ ' + formatedValue;
    }
    return formatedValue;
}

function somar() {

    let iptUn = document.getElementById("valor_unitario");
    let inpQt = document.getElementById("quantidade");
    let inpTl = document.getElementById("total");

    if (inpQt.value != "" && iptUn.value != "") {
        let total = inpQt.value * iptUn.value
        inpTl.value = total
    }
}

function backHome() {
    window.location.href = "../index.php"
}
function createClient() {
    window.location.href = "../client/formCreateClient.html"
}
function backClient() {
    window.location.href = "../client/readClient.php"
}
function createProduto() {
    window.location.href = "../products/formCreateProducts.html"
}
function backProduct() {
    window.location.href = "../products/readProducts.php"
}
function createOrder() {
    window.location.href = "../order/formCreateOrder.php"
}
function backOrder() {
    window.location.href = "../order/readOrder.php"
}