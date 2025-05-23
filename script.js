
const menuLateral = document.getElementById("menuLateral");
const marca = document.getElementById("marcaCentro");

menuLateral.addEventListener("show.bs.offcanvas", () => {
  marca.classList.add("menu-abierto");
});

menuLateral.addEventListener("hide.bs.offcanvas", () => {
  marca.classList.remove("menu-abierto");
});

const contenido = document.getElementById("contenido");

menuLateral.addEventListener("show.bs.offcanvas", () => {
  marca.classList.add("menu-abierto");
  contenido.classList.add("movido");
});

menuLateral.addEventListener("hide.bs.offcanvas", () => {
  marca.classList.remove("menu-abierto");
  setTimeout(() => {
  contenido.classList.remove("movido");
  }, 380);
});
