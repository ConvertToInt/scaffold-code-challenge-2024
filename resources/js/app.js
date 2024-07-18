import './bootstrap';

document.querySelectorAll('.toggle-subcategories').forEach(function(button) {
    button.addEventListener('click', function() {
        // Fetch the ID of the clicked element
        var elementId = this.id;
        
        // Select and toggle the specific subcategory lists
        const subcategoryList = document.querySelector('.subcategory-list.category-' + elementId);
        if (subcategoryList) {
            subcategoryList.classList.toggle('d-none');
        }
    });
});