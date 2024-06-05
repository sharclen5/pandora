document.addEventListener('DOMContentLoaded', function() {
    const dropdownButtons = ['dropdownbutton1', 'dropdownbutton2', 'dropdownbutton3', 'dropdownbutton4', 'dropdownbutton5'];
    const dropdownTexts = ['dropdownText1', 'dropdownText2', 'dropdownText3', 'dropdownText4', 'dropdownText5'];
    const arrows = ['arrow1', 'arrow2', 'arrow3', 'arrow4', 'arrow5'];

    dropdownButtons.forEach((buttonId, index) => {
        document.querySelector(`#${buttonId}`).addEventListener('click', function() {
            const text = document.querySelector(`#${dropdownTexts[index]}`);
            const arrow = document.querySelector(`#${arrows[index]}`);
            text.classList.toggle('opacity-100');
            arrow.classList.toggle('rotate-180');
            if (text.classList.contains('invisible')) {
                text.classList.remove('invisible');
            } else {
                setTimeout(() => text.classList.add('invisible'), 500);
            }

            if (text.style.maxHeight){
                text.style.maxHeight = null;
            } else {
                text.style.maxHeight = text.scrollHeight + "px";
            }
        });
    });
});