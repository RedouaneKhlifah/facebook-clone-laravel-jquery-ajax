"use strict";

const imageinput = document.querySelector(".imageclick");
const inputimagefire = document.querySelector(".imageinput");
const imagediv = document.querySelector("#image-div");

const textaria_add_post = document.querySelector("#textaria");
console.log(textaria_add_post);
const post_btn = document.querySelector("#post_btn");
console.log(post_btn);
post_btn.disabled = true;

imageinput.addEventListener("click", () => {
  inputimagefire.click();
});

inputimagefire.addEventListener("change", () => {
  if (inputimagefire.files.length != 0) {
    imagediv.innerHTML = "";
    // Input is not filled, do nothing
    // Input is filled, create image element and add it to the div
    const img = document.createElement("img");
    img.src = URL.createObjectURL(inputimagefire.files[0]);
    img.classList.add("img-thumbnail");
    img.style.maxWidth = "90%";
    img.style.maxHeight = "300px";

    imagediv.appendChild(img);
    change_btn();
  }
});

let change_btn = function () {
  let value = textaria_add_post.value;
  console.log(value);
  let image = inputimagefire.files.length;
  if (image !== 0 || value != "") {
    console.log(image);
    post_btn.disabled = false;
    console.log("!working");
    post_btn.style.cursor = "pointer";
  } else {
    post_btn.disabled = true;
    post_btn.style.cursor = "not-allowed";
  }
};
textaria_add_post.addEventListener("keyup", change_btn);

//////////////////  comments ///////////////////////////////

let commentsIcon = document.querySelectorAll("#container_fire_Commants_modal");

commentsIcon.forEach((element) => {
  element.addEventListener("click", (e) => {
    let postContainer = element.parentElement.parentElement;
    console.log(postContainer);
  });
});
