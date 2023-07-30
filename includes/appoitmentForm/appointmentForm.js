const phone = document.querySelector("#a-form-phone")
const phoneMaskOptions = {
  mask: '+{7}(000)000-00-00'
};
const phoneMask = IMask(phone, phoneMaskOptions);

const userName = document.querySelector("#a-form-name")
const userPhone = document.querySelector("#a-form-phone")
const userMail = document.querySelector("#a-form-email")

const followObj = document.querySelector("#appointment-modal")
let prevState = followObj.classList.contains("hidden")
const formObserver = new MutationObserver((mutations) => { 
    mutations.forEach(function(mutationRecord) {
        if (mutationRecord.target.classList.contains("hidden")) {
            userName.value = ""
            userPhone.value = ""
            userMail.value = ""
        }
    })
})

formObserver.observe(followObj, {
    attributes : true,
    attributeFilter : ['style', 'class']
})