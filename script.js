function loginPasswordReduceOpacity(event){
  let articles = document.getElementsByClassName('other-method__block');
  for (var i = 0; 0 < 7; i++) {
    articles[i].style.opacity = "0.5";
  }
}

function loginPasswordAddOpacity(event){
  let articles = document.getElementsByClassName('other-method__block');
  for (var i = 0; 0 < 7; i++) {
    articles[i].style.opacity = "0.8";
  }
}

function otherMethodReduceOpacity(event){
  let background__color = document.getElementById('email');
  let background__color__password = document.getElementById('password');
  let color = window.getComputedStyle(background__color).backgroundColor;
  let color__password = window.getComputedStyle(background__color__password).backgroundColor;
  if (color == "rgba(0, 0, 0, 0)" && color__password == "rgba(0, 0, 0, 0)") {
    let articles__two = document.getElementsByClassName("opacityChange");
    for (var i = 0; 0 < 7; i++) {
      articles__two[i].style.opacity = "0.5";
    }
  }
}

function otherMethodAddOpacity(event){
  let background__color = document.getElementById('email');
  let background__color__password = document.getElementById('password');
  let color = window.getComputedStyle(background__color).backgroundColor;
  let color__password = window.getComputedStyle(background__color__password).backgroundColor;
  if (color == "rgba(0, 0, 0, 0)" || color__password == "rgba(0, 0, 0, 0)") {
    let articles__two = document.getElementsByClassName("opacityChange");
    for (var i = 0; 0 < 7; i++) {
      articles__two[i].style.opacity = " 1";
    }
  }
}

