const fileInput = document.getElementById('file');
const extractedTextTextarea = document.getElementById('extracted-text');

fileInput.addEventListener('change', (e) => {
    const file = fileInput.files[0];
    if (file.type === 'application/pdf') {
        const reader = new PdfReader(file);
        const numberOfPages = reader.pages.length;
        const page = reader.pages[0];
        const text = page.extractText();
        extractedTextTextarea.value = text;
    }
});