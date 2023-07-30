const appointmentBtns = document.querySelectorAll(".makeAnAppoitment")
const appointmentModal = document.querySelector("#appointment-modal")
const aForm = document.querySelector("#a-form")
const exitBtn = document.querySelector("#modal-exit")

appointmentBtns.forEach(btn => {
    btn.addEventListener("click", (e) => { 
        const {target} = e
        e.preventDefault()

        if (target) {
            appointmentModal.classList.remove("hidden")

            const closeModal = appointmentModal.addEventListener("click", (e) => {
                const {target} = e

                if (target && (target === exitBtn || target === appointmentModal)) {
                    appointmentModal.classList.add("hidden")
                    appointmentModal.removeEventListener("click", closeModal)
                }
            })
        }
    })
})

