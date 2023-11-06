// Add your JavaScript code here
document.addEventListener('DOMContentLoaded', function () {
    // Your code here
    const button = document.getElementById('myButton');
    const output = document.getElementById('output');

    button.addEventListener('click', function () {
        output.innerHTML = 'Button Clicked!';
    });
});
