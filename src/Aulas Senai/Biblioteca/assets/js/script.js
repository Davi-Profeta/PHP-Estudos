const viem = document.querySelector(".aba");
const conteudo = document.querySelector(".conteudo");
const text = document.querySelectorAll(".text");

viem.addEventListener("mouseover", e => {

    viem.style.width = "22%";
    conteudo.style.width = "78%";
    text.forEach(el => el.style.marginLeft = "1rem");
    text[0].textContent = "Cadastrar e Atualizar Cliente";
    text[1].textContent = "Cadastrar e Atualizar Gênero";
    text[2].textContent = "Cadastrar e Atualizar Livro";

});

viem.addEventListener("mouseout", e => {

    viem.style.width = "10%";
    conteudo.style.width = "90%";
    text.forEach(el => el.style.marginLeft = "0rem");
    text[0].textContent = "";
    text[1].textContent = "";
    text[2].textContent = "";

});