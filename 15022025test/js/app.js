
const button = document.getElementById('toggleButton');
const image = document.getElementById('portfolioImage');


button.addEventListener('click', () => {

    if (image.style.display === 'none') {
        image.style.display = 'block';
        button.value = 'paslēpt'; // Hide
    } else {
        image.style.display = 'none';
        button.value = 'parādīt'; // Show
    }
});
