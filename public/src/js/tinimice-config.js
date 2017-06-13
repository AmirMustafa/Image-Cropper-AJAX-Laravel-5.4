tinymce.init({
  selector: "#textarea",
  height: 200,
  toolbar: ' bold, italic, undo, redo, | cut copy  paste formats, | bullist numlist outdent indent |  alignleft aligncenter alignright alignjustify | preview',
  plugins: "preview",
	preview_styles: false,
  menubar: "tools",
  /*setup: function(editor) {
    editor.addMenuItem('myitem', {
      text: 'My menu item',
      context: 'tools',
      onclick: function() {
        editor.insertContent('&nbsp;Here\'s some content!&nbsp;');
      }
    });
  },*/
  
});


/*
tinymce.init({
  selector: "#textarea",
  height: 200,
  theme: 'modern',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  
});
*/