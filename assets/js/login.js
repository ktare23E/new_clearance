const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");


    
    // code to show/hide password and change icon

    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener('click', () => {
            if(eyeIcon.parentElement.firstElementChild.type === "password"){
                eyeIcon.parentElement.firstElementChild.type = "text";
                eyeIcon.classList.replace("uil-eye-slash", "uil-eye")
            }else {
                eyeIcon.parentElement.firstElementChild.type = "password";
                eyeIcon.classList.replace("uil-eye", "uil-eye-slash")
            }
        })
    })



    // code to appear the 2 forms, login and signup

    signUp.addEventListener("click", () => {
        container.classList.add("active")
    });
    login.addEventListener("click", () => {
        container.classList.remove("active")
    })