document.addEventListener('DOMContentLoaded', (event) => {
    const addModal = document.getElementById('addModal');
    const updateModal = document.getElementById('updateModal');
    const deleteModal = document.getElementById('deleteModal');
    
    const addPlanetButton = document.getElementById('addPlanetButton');
    const updatePlanetButton = document.getElementById('updatePlanetButton');
    const deletePlanetButton = document.getElementById('deletePlanetButton');
    
    const closeAddModal = document.getElementById('closeAddModal');
    const closeUpdateModal = document.getElementById('closeUpdateModal');
    const closeDeleteModal = document.getElementById('closeDeleteModal');
    
    addPlanetButton.onclick = () => { addModal.style.display = 'block'; };
    updatePlanetButton.onclick = () => { updateModal.style.display = 'block'; };
    deletePlanetButton.onclick = () => { deleteModal.style.display = 'block'; };
    
    closeAddModal.onclick = () => { addModal.style.display = 'none'; };
    closeUpdateModal.onclick = () => { updateModal.style.display = 'none'; };
    closeDeleteModal.onclick = () => { deleteModal.style.display = 'none'; };
    
    // window.onclick = (event) => {
    //     if (event.target == addModal) {
    //         addModal.style.display = 'none';
    //     } else if (event.target == updateModal) {
    //         updateModal.style.display = 'none';
    //     } else if (event.target == deleteModal) {
    //         deleteModal.style.display = 'none';
    //     }
    // };



    
});


document.addEventListener("DOMContentLoaded", () => {
    fetchImages();
});

function fetchImages() {
    fetch('image_fetch.php')
        .then(response => response.json())
        .then(data => {
            const gallery = document.getElementById('image-gallery');
            data.forEach(image => {
                const imgElement = document.createElement('img');
                imgElement.src = 'data:image/jpeg;base64,' + image.image_data;
                gallery.appendChild(imgElement);
            });
        });
}
