 const searchBtn = document.getElementById('searchBtn');
  const searchInput = document.getElementById('searchInput');
  const tocItems = document.querySelectorAll('#tocList li');

  function filterTOC() {
    const query = searchInput.value.toLowerCase().trim();
    tocItems.forEach(item => {
      const text = item.textContent.toLowerCase();
      item.style.display = text.includes(query) ? 'block' : 'none';
    });
  }

  searchInput.addEventListener('input', filterTOC);
  searchBtn.addEventListener('click', filterTOC);
