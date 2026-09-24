const abasBTN = document.querySelector(".abas");
const abas = document.querySelector(".header");

abasBTN.addEventListener("click", e => {
    window.location.href = "../index.php";
});

abas.addEventListener("mouseenter", e => {
    abas.style.width = "20vw";
    consultar.textContent = "Voltar";
});

abas.addEventListener("mouseleave", e => {
    abas.style.width = "8vw";
    consultar.textContent = "";
});