// loader section start here
window.addEventListener('load', () => {
    setTimeout(() => {
    document.querySelector('.loading-screen').style.display = 'none'; // Hide loader
    document.getElementById('main-content').style.display = 'block'; // Show main content
    }, 2000); // Adjust time as needed
});
// loader section end here