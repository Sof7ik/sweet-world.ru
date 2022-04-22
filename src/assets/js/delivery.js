function toggleDelivery() {
    const delivery = document.querySelector(".main__delivery");
    const pickup = document.querySelector(".main__pickup");
    const toggleDel = document.querySelector(".toggleDel");
    const togglePick = document.querySelector(".togglePick");
    if(pickup.classList.contains("pickup")) {
        pickup.classList.add("pickup--hidden");
        pickup.classList.remove("pickup");
        delivery.classList.remove("delivery--hidden");
        delivery.classList.add("delivery");
        toggleDel.classList.add("main__button--active");
        togglePick.classList.remove("main__button--active");
    }
    
}

function togglePickup() {
    const delivery = document.querySelector(".main__delivery");
    const pickup = document.querySelector(".main__pickup");
    const toggleDel = document.querySelector(".toggleDel");
    const togglePick = document.querySelector(".togglePick");
    if(delivery.classList.contains("delivery")) {
        pickup.classList.remove("pickup--hidden");
        pickup.classList.add("pickup");
        delivery.classList.add("delivery--hidden");
        delivery.classList.remove("delivery");
        toggleDel.classList.remove("main__button--active");
        togglePick.classList.add("main__button--active");
    }
}
