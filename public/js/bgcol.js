/*************Changing Background Color Of Header/Footer**************/
const header=document.querySelector("header")
const footer=document.querySelector("footer")
const changeColorButton=document.querySelector(".header__nav-color")
let prevColor="rgba(227, 227, 227, 0.219)"
changeColorButton.addEventListener('click',()=>{
    header.style.backgroundColor=prevColor
    footer.style.backgroundColor=prevColor
    if (prevColor === "rgba(227, 227, 227, 0.219)") {
        prevColor = "rgba(0, 0, 0, 0.219)"; // Update to the next color
    } else {
        prevColor = "rgba(227, 227, 227, 0.219)"; // Revert back to the original color
    }
})