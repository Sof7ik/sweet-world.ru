function fillRangeValues()
{
    const rangeWrappers = document.querySelectorAll('.ranges-list .range-item');

    rangeWrappers.forEach(rangeWrapper => {
        const rangeValue = rangeWrapper.querySelector('.range-value');

        const scoreNumber = rangeWrapper.querySelector('.range-item__score-value');

        const rangeValueWidth = (100 / 5) * parseFloat(scoreNumber.textContent);

        rangeValue.style.width = `${rangeValueWidth}%`;
    })
}

document.addEventListener("DOMContentLoaded", e => {
    setTimeout(fillRangeValues, 1000);
})