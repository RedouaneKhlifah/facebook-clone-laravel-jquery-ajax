"use strict";

const imageinput = document.querySelector(".imageclick");
const inputimagefire = document.querySelector(".imageinput");
const imagediv = document.querySelector("#image-div");

const textaria_add_post = document.querySelector("#textaria");
console.log(textaria_add_post);
const post_btn = document.querySelector("#post_btn");
console.log(post_btn);
post_btn.disabled = true;

// imageinput.addEventListener("click", () => {
//     inputimagefire.click();
// });

inputimagefire.addEventListener("change", () => {
    if (inputimagefire.files.length != 0) {
        imagediv.innerHTML = "";
        console.log(inputimagefire.files);
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

////////////////////// comments get post id /////////////////

// let html  = ` <div class="profile">
// <img src="{{asset('img/avatar/hero.png')}}" alt="" />
// </div>
// <div class="people_comment_container">
// <h4 class="user_form_name userrr"></h4>
// <p class="user_comment_name">
//   <p>{{$comment->description}}</p>
// </p>
// </div>`
// let get_comments =  function() {

// }

// ///// modal ///////
// let desc_comments_modal = document.querySelector(".desc_comments_modal");
// let desc_image_modal = document.querySelector(".desc_image_modal");
// let post_id = document.querySelector("#post_id");
// let modal_commentscontainer = document.querySelector(
//     ".modal_commentscontainer"
// );

// let comments_section = document.querySelector(".comments_section");

// let document_icon = document.querySelectorAll(".comment_icon");
// let current_id;

// document_icon.forEach((element) => {
//     element.addEventListener("click", (e) => {
//         let parent = element.parentElement.parentElement;
//         console.log(parent);

//         //////// get element //////
//         let desc = parent.querySelector(".post_description");
//         let img = parent.querySelector(".post_image");
//         let org_post_id = parent.querySelector(".org_post_id");
//         let commantscoantiner = parent.querySelector(".commentscontainer");

//         ////////// change modal elemrnt ////////
//         desc_comments_modal.innerHTML = desc.innerHTML;
//         post_id.value = org_post_id.value;
//         desc_image_modal.src = img.src;
//         current_id = org_post_id.value;
//         modal_commentscontainer.innerHTML = commantscoantiner.innerHTML;
//         // modal_commentscontainer.classList.remove("d-none");
//         // append comments_section elements to modal_commentscontainer
//         // commantscoantiner
//         //     .querySelectorAll(".comments_section")
//         //     .forEach((comment) => {
//         //         modal_commentscontainer.appendChild(comment);
//         //     });

//         // console.log(commantscoantiner);
//         console.log(commantscoantiner.innerHTML);
//         // console.log(modal_commentscontainer);
//     });
// });

// let setcomments = function (comments) {
//     console.log(comments);
//     comments.forEach((element) => {
//         console.log(comments);
//         if ((element.id = current_id)) {
//             console.log(comments);
//         }
//     });
// };
