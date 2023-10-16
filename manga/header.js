function setActive(link) {
    var links = document.querySelectorAll('.list_header li a');
    
    // Remove 'active' class from all links
    links.forEach(function(item) {
        item.parentElement.classList.remove('active');
    });
    
    // Add 'active' class to the clicked link's parent
    link.parentElement.classList.add('active');
}
