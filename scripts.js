document.getElementById('emailForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var formData = new FormData(this);
    
    fetch(this.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('statusMessage').textContent = data.message;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
