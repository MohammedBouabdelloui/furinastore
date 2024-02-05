const registerModal = document.getElementById('registerModal');
const openModalButton = document.getElementById('openModal');
const closeModalButton = document.getElementById('closeModal');
const closeModalSecondButton = document.getElementById('closeModalButton');

const openModal = () => {
    registerModal.classList.remove('hidden');
};

const closeModal = () => {
    registerModal.classList.add('hidden');
};

openModalButton.addEventListener('click', openModal);
closeModalButton.addEventListener('click', closeModal);
closeModalSecondButton.addEventListener('click', closeModal);

registerModal.addEventListener('click', (event) => {
    if (event.target === registerModal) {
        closeModal();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeModal();
    }
});