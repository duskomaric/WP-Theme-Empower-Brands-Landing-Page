// alert('test')

function updateResolution() {
    let resolutionDiv = document.getElementById('resolution');

    if (!resolutionDiv) {
        resolutionDiv = document.createElement('div');
        resolutionDiv.id = 'resolution';
        document.body.appendChild(resolutionDiv);
    }

    resolutionDiv.style.position = 'fixed';
    resolutionDiv.style.bottom = '0';
    resolutionDiv.style.left = '0';
    resolutionDiv.style.backgroundColor = '#333';
    resolutionDiv.style.color = '#fff';
    resolutionDiv.style.padding = '10px';
    resolutionDiv.style.fontFamily = 'Arial, sans-serif';
    resolutionDiv.style.fontSize = '14px';
    resolutionDiv.style.zIndex = '9999';

    // Update the content of the div with the current window dimensions
    resolutionDiv.innerHTML = `
        Inner Width: ${window.innerWidth}px<br>
        Inner Height: ${window.innerHeight}px<br>
    `;
}

// Initial call to display resolution
updateResolution();

// Update resolution on window resize
window.addEventListener('resize', updateResolution);
