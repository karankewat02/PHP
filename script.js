var popUpBtnFeedback = document.querySelector("#pop-up-feedback");
var popUpBtnAdd = document.querySelector("#pop-up-add");
var popUpFromFeedback = document.querySelector("#pop-up-feedback-form");
var popUpFormAdd= document.querySelector("#pop-up-add-form");

popUpBtnFeedback.addEventListener("click",()=>{

 popUpFromFeedback.classList.toggle("show");

})
popUpBtnAdd.addEventListener("click",()=>{

    popUpFormAdd.classList.toggle("show");

})

function call(){
    alert("Done ✔");
}