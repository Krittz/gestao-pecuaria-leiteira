function showImage(src) {
    const fullScreenImage = document.getElementById('fullScreenImage');
    const displayImage = document.getElementById('displayImage');
    displayImage.src = src;
    fullScreenImage.style.display = 'block';
}

function closeImage() {
    const fullScreenImage = document.getElementById('fullScreenImage');
    fullScreenImage.style.display = 'none';
}