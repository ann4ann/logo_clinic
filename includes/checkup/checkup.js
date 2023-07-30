const checkUps = JSON.parse(data)
let page = 0
// console.log(checkUps[page])

fillCheckup(0, checkUps)

const pagination = document.querySelector("#checkup-pagination")
pagination.addEventListener("click", (e) => { 
    const {target} = e 
    const prev = target.closest("#checkup-prev")
    const next = target.closest("#checkup-next")
    if (prev && page > 0) {
        page -= 1
        fillCheckup(page, checkUps)
    }
    if (next && page < checkUps.length - 1) {
        page += 1
        fillCheckup(page, checkUps)
    }
})


function fillTag(tagStr, content) {
    const tag = document.querySelector(`#${tagStr}`)
    tag.innerHTML = content
}

function fillCheckup(page, dataArr) {
    if (!dataArr) { return }
    const currentCheckUp = dataArr[page]
    
    fillTag("checkup-type", currentCheckUp.type)
    fillTag("checkup-name", currentCheckUp.name)
    const priceInnerHtml = `Всего ${currentCheckUp.price}₽
        <span id="checkup-discount" class="strikethrough-text">
            ${currentCheckUp.discountPrice}₽
        </span>`
    fillTag("checkup-price", priceInnerHtml)
    fillTag("checkup-page", page + 1)

    const img = document.querySelector("#checkup-img")
    img.src = currentCheckUp.imgSrc

    const testsInnerHtml = currentCheckUp.tests.split(";").map(item => `<li>${item.trim()}</li>`).join("")
    fillTag("checkup-tests", testsInnerHtml)

}

