document.addEventListener('DOMContentLoaded', function() {
  function initializeQuillEditor(editorId, areaId) {
      var editor = new Quill(editorId, {
          theme: 'snow'
      });
      var quillEditor = document.querySelector(areaId);

      editor.on('text-change', function() {
          quillEditor.value = editor.root.innerHTML;
      });

      quillEditor.addEventListener('input', function() {
          editor.root.innerHTML = quillEditor.value;
      });
  }

  // Inicializuj prvý editor
  initializeQuillEditor('#quill-editor-1', '#quill-editor-area-1');

  // Inicializuj druhý editor
  initializeQuillEditor('#quill-editor-2', '#quill-editor-area-2');
});
