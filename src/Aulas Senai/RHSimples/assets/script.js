const btn = document.querySelectorAll(".options");
const cadastro = document.querySelector(".cadastrar");
const consulta = document.querySelector(".consulta");

btn[0].addEventListener("click", e => {
    cadastro.style.display = "flex";
    consulta.style.display = "none";
})

btn[1].addEventListener("click", e => {
    consulta.style.display = "flex";
    cadastro.style.display = "none";
});