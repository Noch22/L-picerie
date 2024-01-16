function showcard(eventIndex) {
    var descriptionClass = 'description-' + eventIndex;
    var card = document.querySelector('.' + descriptionClass);
    //card.classList.toggle('active');
    card.classList.toggle('open');
}

document.querySelectorAll('button.show_btn').forEach((buttonElement) => {
    const id = buttonElement.dataset.id;
    buttonElement.addEventListener('click', () => {
        showcard(id);
        buttonElement.classList.toggle('rotate');
    })
    
}) 

console.log(document.querySelectorAll('button.show_btn'))