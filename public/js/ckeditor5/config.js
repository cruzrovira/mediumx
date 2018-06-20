ClassicEditor.create(document.querySelector("#editor"), {
    toolbar: [
        "heading",
        "|",
        "bold",
        "italic",
        "link",
        "bulletedList",
        "numberedList",
        //"imageTextAlternative",
        'imageUpload',
        "blockQuote",
        "undo",
        "redo",
    ],

    language: "es"
});