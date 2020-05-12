function openModal(element_id){
    var shadow = document.createElement('div')
    shadow.classList = 'modalShadow';
    document.body.appendChild(shadow);
    var modal = document.querySelector(element_id.startsWith('#') ? element_id : '#' + element_id);
    modal.style.visibility = 'inherit';
}

function closeModal(element_id){
    var shadow = document.querySelector('.modalShadow');
    shadow.parentElement.removeChild(shadow);
    var modal = document.querySelector(element_id.startsWith('#') ? element_id : '#' + element_id);
    modal.style.visibility = 'hidden';
}