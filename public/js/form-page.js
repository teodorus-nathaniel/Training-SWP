const postBtn = document.getElementById('post-btn');
const insertModal = document.getElementById('insert-modal');
const cancelBtn = document.getElementById('cancel-btn');

postBtn.addEventListener('click', () => {
  insertModal.classList.add('active');
});

cancelBtn.addEventListener('click', () => {
  insertModal.classList.remove('active');
});
