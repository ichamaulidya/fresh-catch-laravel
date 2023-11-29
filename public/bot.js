const modalContainer = document.getElementById('modal-container');
const openModalBtn = document.getElementById('open-modal-btn');
const modalClose = document.getElementById('modal-close');

openModalBtn.addEventListener('click', () => {
    modalContainer.style.display = 'block';
    openModalBtn.style.display = 'none'; // Hide the open modal button
});

modalClose.addEventListener('click', () => {
    modalContainer.style.display = 'none';
    openModalBtn.style.display = 'block'; // Show the open modal button again
});

// Close modal if clicked outside the modal content
window.addEventListener('click', (event) => {
    if (event.target === modalContainer) {
        modalContainer.style.display = 'none';
        openModalBtn.style.display = 'block'; // Show the open modal button again
    }
});


function addToChat(message, sentBy) {
    var recycler_view = document.getElementById("recycler_view");
    var div = document.createElement("div");
    div.innerHTML = '<strong>' + sentBy + ':</strong> ' + message;
    recycler_view.appendChild(div);
    recycler_view.scrollTop = recycler_view.scrollHeight;
}

function sendMessage() {
    var question = document.getElementById('message_edit_text').value.trim();
    addToChat(question, 'SENT_BY_ME');

    // Make an AJAX request to the same PHP file
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            addToChat(response.response, 'SENT_BY_BOT');
        }
    };
    xhr.send('question=' + encodeURIComponent(question));

    document.getElementById('message_edit_text').value = '';
    return false; // Prevent form submission
}