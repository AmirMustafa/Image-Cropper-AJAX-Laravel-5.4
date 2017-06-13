    /**
     * Custom `color picker` extension
     */
    var ColorPickerExtension;

    function ColorPickerDerived() {
      this.parent = true;
      this.options = {
        name: "colorPicker",
        action: "applyForeColor",
        aria: "color picker",
        tagname: ["p", "h3", "h4"],
        contentDefault: "<span class='editor-color-picker'>Text Color<span>"
      };
      this.name = "colorPicker";
    }

    ColorPickerDerived.prototype = {
      handleClick: function(e) {
        e.preventDefault();
        e.stopPropagation();

        var self = this.base;
        self.saveSelection();

        // If no text selected, stop here.
        if( self.selectionState && (self.selectionState.end - self.selectionState.start === 0) ) {
          return;
        }

        // colors for picker
        var pickerColors = [ 
          "#1abc9c",
          "#2ecc71",
          "#3498db",
          "#9b59b6",
          "#34495e",
          "#16a085",
          "#27ae60",
          "#2980b9",
          "#8e44ad",
          "#2c3e50",
          "#f1c40f",
          "#e67e22",
          "#e74c3c",
          "#bdc3c7",
          "#95a5a6",
          "#f39c12"
        ];

        var picker = vanillaColorPicker(document.querySelector(".medium-editor-toolbar-active .editor-color-picker"));
        picker.set("customColors", pickerColors);
        picker.set("positionOnTop");
        picker.openPicker();
        picker.on("colorChosen", function(color) {
          self.restoreSelection();
          self.options.ownerDocument.execCommand("styleWithCSS", false, true);
          self.options.ownerDocument.execCommand("foreColor", false, color);
        });
      }
    };

    ColorPickerExtension = MediumEditor.util.derives(MediumEditor.statics.DefaultButton, ColorPickerDerived);