const abasBTN = document.querySelectorAll(".abas");
const abas = document.querySelector(".header");
const consultar = document.getElementById("consultar");
const cadfornecedor = document.getElementById("cadFornecedor");
const produto = document.getElementById("cadProduto");

abasBTN[0].addEventListener("click", e => {
    window.location.href = "../index.php";
    btnConsultar.style.display = "flex"
    divCadastrar.style.display = "none";
    main.style.display = "none";
    fornecedor.style.display = "none";
});

abasBTN[1].addEventListener("click", e => {
    window.location.href = "../index.php";
    fornecedor.style.display = "block";
    mainFor.style.display = "flex";
    main.style.display = "none";
    divCadastrar.style.display = "none";
    btnConsultar.style.display = "none"
});

abasBTN[2].addEventListener("click", e => {
    window.location.href = "../index.php";
    divCadastrar.style.display = "block";
    main.style.display = "none";
    fornecedor.style.display = "none";
    btnConsultar.style.display = "none"
});

abas.addEventListener("mouseenter", e => {
    abas.style.width = "20vw";
    consultar.textContent = "Consultar";
    cadfornecedor.textContent = "Fornecedor";
    produto.textContent = "Produto";
});

abas.addEventListener("mouseleave", e => {
    abas.style.width = "8vw";
    consultar.textContent = "";
    cadfornecedor.textContent = "";
    produto.textContent = "";
});