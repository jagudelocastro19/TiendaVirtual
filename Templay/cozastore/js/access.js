(() => {
  const container = document.querySelector(".container__access");
  const btns = document.querySelectorAll(".toggle-btn");

  // events forms
  const signin = document.querySelector("#signin");
  const signup = document.querySelector("#signup");

  btns.forEach((el, arr) => {
    el.addEventListener("click", () => {
      container.classList.toggle("signup-show");
    });
  });

  signin.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("signin");
  });

  signup.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("signup");
  });
})();
