$(function(){var n=document.createElement("div");n.classList.add("black-mask"),document.body.appendChild(n),document.getElementById("btn-menu").addEventListener("click",function(e){n.classList.add("show"),document.body.classList.add("nav-main-open"),e.stopPropagation(),document.addEventListener("click",function(e){e.target.closest(".nav-main")||(document.body.classList.remove("nav-main-open"),n.classList.remove("show"))})})});