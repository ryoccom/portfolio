//about toggle
const toggles = document.querySelectorAll(".about dt");
const togglecontents = document.querySelectorAll(".about dd");
const togglebg = document.querySelector(".about");



toggles.forEach((toggle) => {
  const target = toggle.nextElementSibling;
  var toggleNum = [].slice.call( toggles ).indexOf( toggle );
  toggleNum = toggleNum + 1;
  toggle.addEventListener("click", () => {
    toggles.forEach((toggle) => {
      toggle.classList.remove("js-open");
    });
    togglecontents.forEach((togglecontent) => {
      togglecontent.style.height = "0";
    });
    toggle.classList.add("js-open");
    target.style.height = target.scrollHeight + "px";
    togglebg.className = "about js-bg0" + toggleNum;
  });
  toggle.addEventListener("mouseover", () => {
    togglebg.className = "about js-bg0" + toggleNum;
  });
});