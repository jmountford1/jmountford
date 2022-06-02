function submitForm() {
    var btn = document.getElementById('form');
        event.preventDefault();
        let input = document.querySelectorAll('#fname, #lname, #email, #message');
        input.forEach(input => {
            input.value = '';
        });
});