document.getElementById('myScroll').addEventListener('click', scrollToElement);

function scrollToElement(e) {
    element = document.getElementById("footer")
    element.scrollIntoView(true);
}