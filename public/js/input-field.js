{
    const inputs = document.getElementsByClassName('field');

    Array.from(inputs).forEach((input) => {
        if(input.value !== "") {
            input.classList.add('active');
        }

        input.addEventListener('focus', function() {
            if(!this.classList.contains('active'))
                this.classList.add('active');
        })
        input.addEventListener('blur', function() {
            if(this.value !== "")   return;
            this.classList.remove('active');
        })
    })
}