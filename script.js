function sortBooks() {
    const sortBy = document.getElementById('sort-by').value;
    const bookList = document.getElementById('book-list');
    const books = Array.from(bookList.children);

    books.sort((a, b) => {
        if (sortBy === 'title') {
            return a.getAttribute('data-title').localeCompare(b.getAttribute('data-title'));
        } else if (sortBy === 'price') {
            return parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price'));
        }
    });

    while (bookList.firstChild) {
        bookList.removeChild(bookList.firstChild);
    }

    books.forEach(book => bookList.appendChild(book));
}

window.sortBooks = sortBooks;
    