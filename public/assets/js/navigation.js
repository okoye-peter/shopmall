function toggle_Vlaue(link) {
    if (link.parentNode.parentNode.previousElementSibling.firstChild == link.parentNode.parentNode.previousElementSibling.firstElementChild) {
        link.parentNode.parentNode.previousElementSibling.firstChild.src = link.firstChild.src;
    }
    link.parentNode.parentNode.previousElementSibling.querySelector('span').innerHTML = link.textContent;
}

let langLink = document.querySelector('.drop-toggle').querySelectorAll('a');
let currencyLink = document.querySelector('.drop-currency-toggle').querySelectorAll('a');

langLink.forEach(link => {
    link.addEventListener('click', function() {
        toggle_Vlaue(link);
    });
});

currencyLink.forEach(link => {
    link.addEventListener('click', function() {
        toggle_Vlaue(link);
    });
});
let category = document.querySelector('.category');
let categoryDropDown = document.querySelector('.category_list');
let category_list = categoryDropDown.querySelectorAll('a');

category.addEventListener('click', function() {
    categoryDropDown.style.height = categoryDropDown.offsetHeight == 0 ? categoryDropDown.scrollHeight + "px" : 0;
});

category_list.forEach(link => {
    link.addEventListener('click', function() {
        category.firstElementChild.innerHTML = link.innerHTML;
        category.nextElementSibling.value = link.innerHTML;
        categoryDropDown.style.height = categoryDropDown.offsetHeight == 0 ? categoryDropDown.scrollHeight + "px" : 0;
    });
});