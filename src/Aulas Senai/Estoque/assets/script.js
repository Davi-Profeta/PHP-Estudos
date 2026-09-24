const abas = document.querySelector(".header");
const abasBTN = document.querySelectorAll(".abas");
const consultar = document.getElementById("consultar");
const cadfornecedor = document.getElementById("cadFornecedor");
const produto = document.getElementById("cadProduto");
const main = document.querySelector(".main");
const mainFor = document.querySelector(".mainFor");
const fornecedor = document.querySelector(".fornecedor");
const divCadastrar = document.querySelector(".cadastrar");
const btnConsultar = document.querySelector(".consultar")

abas.addEventListener("mouseenter", e => {
    abas.style.width = "20vw";
    consultar.textContent = "Consultar";
    cadfornecedor.textContent = "Fornecedor";
    produto.textContent = "Produto"
});

abas.addEventListener("mouseleave", e => {
    abas.style.width = "8vw";
    consultar.textContent = "";
    cadfornecedor.textContent = "";
    produto.textContent = "";
}) 

abasBTN[0].addEventListener("click", e => {
    btnConsultar.style.display = "flex"
    divCadastrar.style.display = "none";
    main.style.display = "none";
    fornecedor.style.display = "none";
});

abasBTN[1].addEventListener("click", e => {
    fornecedor.style.display = "block";
    mainFor.style.display = "flex";
    main.style.display = "none";
    divCadastrar.style.display = "none";
     btnConsultar.style.display = "none"
});

abasBTN[2].addEventListener("click", e => {
    divCadastrar.style.display = "block";
    main.style.display = "none";
    fornecedor.style.display = "none";
    btnConsultar.style.display = "none"
});