(() => {
  const container = document.querySelector(".container__access");
  const btns = document.querySelectorAll(".toggle-btn");

  btns.forEach((el, arr) => {
    el.addEventListener("click", () => {
      container.classList.toggle("signup-show");
    });
  });
})();
