// チェックボックスの取得
const switchTrigger = document.querySelector("#switch__trigger");
 


function lightMode() {
  document.documentElement.setAttribute('data-theme', 'light');
  switchTrigger.nextElementSibling.textContent = "NIGHT";
}

function darkMode(){
  document.documentElement.setAttribute('data-theme', 'dark');
  switchTrigger.nextElementSibling.textContent = "LIGHT";
}

// チェックした時の挙動
switchTrigger.addEventListener("change", () => {
  if (switchTrigger.checked == true) {
    // ダークモード
    darkMode();
  } else {
    // ライトモード
    lightMode();
  }
});