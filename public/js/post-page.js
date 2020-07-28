const postBtn = document.getElementById('post-btn');
const insertModal = document.getElementById('insert-modal');
const cancelBtn = document.getElementById('cancel-btn');
const submitBtn = document.getElementById('submit-btn');
const postField = document.getElementById('post-field');
const postsContainer = document.getElementById('post-container')

const getCookie = name => 
  document.cookie.split('; ')
    .filter(e => e.startsWith(name))[0]
    .split(`${name}=`)[1]

postBtn.addEventListener('click', () => {
    insertModal.classList.add('active');
})

cancelBtn.addEventListener('click', () => {
    insertModal.classList.remove('active');
})

const getPostsData = async () => {
    const res = await fetch('/posts');
    const data = await res.json();

    let html = '';
    data.forEach((el) => html += formatData(el));
    postsContainer.innerHTML = html;
}

submitBtn.addEventListener('click', async () => {
    const res = await fetch('/posts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ post: postField.value, userId: getCookie('id') })
    })
    const data = await res.json();

    getPostsData();
})

const formatData = ({username, content, timestamp}) => `
    <div class="card">
        <div class="profile">
            <img src="/public/img/profile.svg" alt="profile">
            <span class="bold">${username}</span>
        </div>
        <p>${content}</p>
        <span class="time">
            ${timestamp}
        </span>
    </div>
`

getPostsData();