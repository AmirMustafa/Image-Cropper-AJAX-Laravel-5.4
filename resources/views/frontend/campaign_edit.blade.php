<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = $reward_mail = Session::get('email');
?>

@if(isset($uemail))
    
@include('includes.profile_header2')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif



<!DOCTYPE html>
<html>
<head>


 <!-- ============== Medium Editor CSS FILES: START ==============  --> 

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="{{URL::to('public/medium/css/medium-editor.css')}}">
<link rel="stylesheet" href="{{URL::to('public/medium/css/themes/mani.css')}}">
<link rel="stylesheet" href="{{URL::to('public/medium/css/medium-editor-tables.css')}}">
<link rel="stylesheet" href="{{URL::to('public/medium/plugins/medium-editor-insert-plugin/dist/css/medium-editor-insert-plugin.css')}}">
<link rel="stylesheet" href="{{URL::to('public/medium/plugins/medium-editor-insert-plugin/dist/css/medium-editor-insert-plugin-frontend.min.css')}}">
<link rel="stylesheet" href="{{URL::to('public/medium/plugins/spectrum/spectrum.css')}}">
<link rel="stylesheet" href="{{URL::to('public/medium/plugins/medium-editor-embed-button/dist/css/medium-editor-embed-button.css')}}">

<link rel="stylesheet" href="{{URL::to('public/src/css/mob.css')}}">

 <!-- ============== Medium Editor CSS FILES: END ==============  --> 




<!-- ============== Medium Editor JS FILES: START ==============  --> 

<script src="{{URL::to('public/medium/js/medium-editor.js')}}"></script>
<script src="{{URL::to('public/medium/js/util.js')}}"></script>
<script src="{{URL::to('public/medium/js/medium-editor-tables.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/medium-editor-mobile-plugin-master/dist/medium-editor-mobile-plugin.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/handlebars/handlebars.runtime.min.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/jquery-sortable/source/js/jquery-sortable-min.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/blueimp-file-upload/js/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/blueimp-file-upload/js/jquery.fileupload.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/medium-editor-insert-plugin/dist/js/medium-editor-insert-plugin.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/jquery-cycle2/build/jquery.cycle2.min.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/jquery-cycle2/build/plugin/jquery.cycle2.center.min.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/spectrum/spectrum.js')}}"></script>
<script src="{{URL::to('public/medium/js/medium-editor-color-picker.js')}}"></script>
<script src="{{URL::to('public/medium/plugins/medium-editor-embed-button/dist/js/medium-editor-embed-button.js')}}"></script>
<script src="{{URL::to('public/medium/js/custom-html.js')}}"></script>


<!-- ============== Medium Editor JS FILES: END ==============  --> 


</head>
<body style="background: #f5f5f5;">

<div class="container" >
    <div class="row">
       <form action="{{ route('post_campaign_edit') }}" method="post">
            <div class="row">
                     <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 ">
                    <br><br><br>
                    <textarea class="editable txt-style" style="margin-top:5
                    .65%; max-width: 853.5px; min-height: 1225px; padding:25px; box-shadow: -5px 5px 20px #ccc;background: #fff;"  name="medium_editor" id="" cols="80%" rows="100%"  onKeyUp='characterCount(this)'>
                    @foreach($q1 as $q1)
                      @if($q1->count2  == '1')
                        @foreach($q as $q)
<!-- ============== Shows Updated Campaign: Start ==============  -->

                            {!! $q->info !!}

<!-- ============== Shows Updated Campaign: End ==============  -->
                        @endforeach
                      @else
<!-- ============== Shows Default Instruction: Start ==============  -->
                          <div><br />

                      <img src="resources/views/
img/fundlr_guidelines.png" alt="Logo of Fundlr" >
                          <p class="">__________________________________________________________________________________________________________________</p>
                          <p>&nbsp;</p>
                          <p style="font-size: 20px; font-family: 'arial'; text-align: center;"><span style="color: #808080;">"DESCRIBE YOUR CAMPAIGN HERE"</span></p>
                          <p style="font-size: 16px; font-family: 'arial'; text-align: center;"><span style="color: #808080;">Provide the important specifics - the Proof of Concepts, Risks and Challenges, FAQ etc. Oh and yes, do not forget to mention the Rewards, Delivery and other necessary details yours backers and supporters may need.</span></p>
                          <p style="font-size: 16px; font-family: 'arial'; text-align: center;"><span style="color: #808080;">Copy-Paste, Embed Media (Images, Audio, Video, etc), or whatever you need to make your campaign appear as per your requirement.</span></p>
                          </div>
<!-- ============== Shows Default Instruction: End ==============  -->
                      @endif
                    @endforeach
                      
                      
                          
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12 mt-20">
                    <button type="submit" class="btn btn-primary pull-right ">Publish</button>&emsp;
                   
                </div>
                
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>
<br>
<br>
<br>
  <!-- <div class="editable" style="width: 80%; height:80%;"></div> -->
<!--
   <form action="campaign-dbm.php" method="post"> 
  <br><br><br><br><br><br>
-->
  
  
    
<!--
          <textarea style="height:750px; overflow-y:auto; box-shadow:0px 0px 5px #595959; margin-left:15%; margin-right:15%; padding-left: 5%; padding-right: 5%; padding-top: 2.5%; padding-bottom: 2.5%;" class="editable"  name="medium_editor" id="" cols="80%" rows="100%"></textarea>
    
     <button type="submit" class="btn btn-primary pull pull-right" style="margin-right:18%; margin-top:2%;">Publish</button>
-->
  
  <!-- <script>var editor = new MediumEditor('.editable');</script> -->

  <!-- <script>
    var editor = new MediumEditor('.editable', {
      /* These are the default options for the editor,
          if nothing is passed this is what is used */
      activeButtonClass: 'medium-editor-button-active',
      allowMultiParagraphSelection: true,
      buttonLabels: true,
      contentWindow: window,
      delay: 0,
      disableReturn: false,
      disableDoubleReturn: false,
      disableExtraSpaces: false,
      disableEditing: false,
      elementsContainer: false,
      extensions: {},
      ownerDocument: document,
      spellcheck: true,
      targetBlank: false
  });
  </script> -->
  
  <script>


  /* ========================== Color Picker for medium editor: Start ========================== */
var currentTextSelection;

/**
* Gets the color of the current text selection
*/
function getCurrentTextColor(){
    return $(editor.getSelectedParentElement()).css('color');
}

/**
 * Custom `color picker` extension
 */
var ColorPickerExtension = MediumEditor.extensions.button.extend({
    name: "colorPicker",
    action: "applyForeColor",
    aria: "color picker",
    contentDefault: "<span class='editor-color-picker'>Text Color<span>",

    init: function() {
        this.button = this.document.createElement('button');
        this.button.classList.add('medium-editor-action');
        this.button.innerHTML = '<img src="resources/views/img/18px.svg">';
    
        //init spectrum color picker for this button
        initPicker(this.button);
        
        //use our own handleClick instead of the default one
        this.on(this.button, 'click', this.handleClick.bind(this));
    },
     handleClick: function (event) {
       //keeping record of the current text selection
         currentTextSelection = editor.exportSelection();
         
         //sets the color of the current selection on the color picker
         $(this.button).spectrum("set", getCurrentTextColor());

     //from here on, it was taken form the default handleClick
         event.preventDefault();
         event.stopPropagation();

         var action = this.getAction();

         if (action) {
             this.execAction(action);
         }
     }
});

var pickerExtension = new ColorPickerExtension();

function setColor(color) {
    var finalColor = color ? color.toRgbString() : 'rgba(0,0,0,0)';

    pickerExtension.base.importSelection(currentTextSelection);
    pickerExtension.document.execCommand("styleWithCSS", false, true);
    pickerExtension.document.execCommand("foreColor", false, finalColor);
}

function initPicker(element) {
    $(element).spectrum({
        allowEmpty: true,
        color: "#f00",
        showInput: true,
        showAlpha: true,
        showPalette: true,
        showInitial: true,
        hideAfterPaletteSelect: true,
        preferredFormat: "hex3",
        change: function(color) {
            setColor(color);
        },
        hide: function(color) {
            setColor(color);
        },
        palette: [
            ["#000", "#444", "#666", "#999", "#ccc", "#eee", "#f3f3f3", "#fff"],
            ["#f00", "#f90", "#ff0", "#0f0", "#0ff", "#00f", "#90f", "#f0f"],
            ["#f4cccc", "#fce5cd", "#fff2cc", "#d9ead3", "#d0e0e3", "#cfe2f3", "#d9d2e9", "#ead1dc"],
            ["#ea9999", "#f9cb9c", "#ffe599", "#b6d7a8", "#a2c4c9", "#9fc5e8", "#b4a7d6", "#d5a6bd"],
            ["#e06666", "#f6b26b", "#ffd966", "#93c47d", "#76a5af", "#6fa8dc", "#8e7cc3", "#c27ba0"],
            ["#c00", "#e69138", "#f1c232", "#6aa84f", "#45818e", "#3d85c6", "#674ea7", "#a64d79"],
            ["#900", "#b45f06", "#bf9000", "#38761d", "#134f5c", "#0b5394", "#351c75", "#741b47"],
            ["#600", "#783f04", "#7f6000", "#274e13", "#0c343d", "#073763", "#20124d", "#4c1130"]
        ]
    });
}

 /* ========================== Color Picker for medium editor: End ========================== */






/* ==================== Main Editor Script: Start ==================== */

        var editor = new MediumEditor('.editable', {
      /* These are the default options for the editor,
          if nothing is passed this is what is used */
      activeButtonClass: 'medium-editor-button-active',
      allowMultiParagraphSelection: true,
      buttonLabels: true,
      toolbar: {
      buttons: [
            //'undo',
           // 'redo',
           'fontsize',
           'colorPicker',
            'bold',
            'italic',
            'underline',
            //'embedButton',
            'anchor', 
            //'orderedlist',  
            //'quote',
           // 'table',
           //'fontname',
            'orderedlist',
            'unorderedlist',
            'justifyLeft',
            'justifyCenter',
            'justifyRight',
            'justifyFull',
            'indent',
            'outdent'
            //'h1',
    //         {
    //   name: 'fontname',
    //   action: 'fontName',
    //   aria: 'change font name',
    //   contentDefault: '&#xB1;', // ±
    //   contentFA: '<i class="fa fa-font"></i>',

    //   fonts: ['', 'Georgia', 'Verdana', 'Times New Roman', 'Georgia'],
    // }
            //'print',
            //'download',
           // 'toolbar_states',
           /* {
                name: 'image',
                action: 'append-img',
                aria: '',
                tagNames: ['img'],
                contentDefault: '<b>Justify</b>',
                classList: ['custom-class-h1'],
                attrs: {
                    'data-custom-attr': 'attr-value-h1'
                }
            },*/
            
        ],
        diffLeft: 25,
        diffTop: 10,
            sticky:true,
            align:'center',
            static:true
      },
       
      contentWindow: window,
      delay: 0,
      disableReturn: false,
      disableDoubleReturn: false,
      disableExtraSpaces: true,
      disableEditing: false,
      disableImageResize: false,
      imageMaxWidth: 24000,
imageMaxHeight: 24000,
      elementsContainer: false,
      extensions: {},
      ownerDocument: document,
      spellcheck: true,
      targetBlank: false,

      paste: {
          forcePlainText: false,
          cleanPastedHTML: true,
          cleanReplacements: [],
          cleanAttrs: ['class', 'style', 'dir'],
          cleanTags: ['meta']
        },
    extensions: {               //Custom Extentions
      table: new MediumEditorTable(),
      embedButton: new EmbedButtonExtension({
                    embedOpts: {    //Added extention Embed
                        oembedProxy: "https://iframe.ly/api/oembed?api_key=3bef8c4238179ff9306315&url="
                    }     /*Added medium editor's library on line 17 and 41*/
                }),
      'colorPicker': pickerExtension,
       "customHtml": new CustomHtml({
                buttonText: "Divider"
              , htmlToInsert: "<hr class='someclass'>"
            })

    },
    placeholder:
            {
                text:'Create your campaign here', 
                hideOnClick:true
            }
  });

 /* ==================== Main Editor Script: End ==================== */




/* ========= JavaScritpt for showing value in editor's slider: Start ========= */

        document.querySelector('input[type=range]').addEventListener('input', function rangeChange() {
  // trigger the CSS to update
  this.setAttribute('value', this.value);
});
/* ========= JavaScritpt for showing value in editor's slider: Start ========= */


        
/* ====================== For Image Grid Play functionality: Start ====================== */
        $(function () {
            $('.editable').mediumInsert({
                editor: editor,
                addons: {
                    images: {
                        uploadScript: null,
                        deleteScript: null,
                        //captionPlaceholder: 'Type caption for image',
                        styles: {
                            slideshow: {
                                label: '<span class="fa fa-play"></span>',
                                added: function ($el) {
                                    $el
                                        .data('cycle-center-vert', true)
                                        .cycle({
                                            slides: 'figure'
                                        });
                                },
                                removed: function ($el) {
                                    $el.cycle('destroy');
                                }
                            }
                        },
                        actions: null
                    }
                }
            });
        });

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44692164-1', 'auto');
        ga('send', 'pageview');

       
    </script>
<!-- ================== Slider Indicator: Start ==================  -->
    <script>
     
var el, newPoint, newPlace, offset;
 
// Select all range inputs, watch for change
$("input[type='range']").change(function() {

 // Cache this for efficiency
 el = $(this);
 
 // Measure width of range input
 width = el.width();
 
 // Figure out placement percentage between left and right of input
 newPoint = (el.val() - el.attr("min")) / (el.attr("max") - el.attr("min"));
  
  offset = -1;

 // Prevent bubble from going beyond left or right (unsupported browsers)
 if (newPoint < 0) { newPlace = 0; }
 else if (newPoint > 1) { newPlace = width; }
 else { newPlace = width * newPoint + offset; offset -= newPoint; }
 
 // Move bubble
 el
   .next("output")
   .css({
     left: newPlace,
     marginLeft: offset + "%"
   })
     .text(el.val());
 })
 // Fake a change to position bubble at page load
 .trigger('change');
</script>

<!-- ASCII CODE SCRIPT: START -->
<script type="text/javascript">
var maxLength=160;
var Ascii=true;


 function isAscii(el) {
     var i=0;
 while ( i < = el.value.length ){
 if(el.value[i].charCodeAt(0) >= 0 && el.value[i]charCodeAt(0) <= 127 ){
 i=i+1;
 } 
 else 
 {
 return false
} 
}
return true;
  }



  function characterCount(el) {

if ( isAscii(el)){
Ascii=true;
maxLength=160;
}
else {
Ascii=false
maxLength=70;
}




var charCount = document.getElementById('charCount');
if (el.value.length > maxLength) el.value = el.value.substring(0,maxLength);
if (charCount) charCount.innerHTML = maxLength - el.value.length;
return true;
 }


</script>
<!-- ASCII CODE SCRIPT: END -->




    <!-- ================== Slider Indicator: End ==================  -->

  <!-- <script>
    var editor = new MediumEditor('.editable', {
      toolbar: {
          /* These are the default options for the toolbar,
             if nothing is passed this is what is used */
          allowMultiParagraphSelection: true,
          buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', 'quote'],
          diffLeft: 0,
          diffTop: -10,     
          firstButtonClass: 'medium-editor-button-first',
          lastButtonClass: 'medium-editor-button-last',
          relativeContainer: null,
          standardizeSelectionStart: false,
          static: false,
  
          /* options which only apply when static is true */
          align: 'right',
          sticky: false,
          updateOnEmptySelection: false,
           placeholder: {
          /* This example includes the default options for placeholder,
             if nothing is passed this is what it used */
          text: 'Type your text',
          hideOnClick: true
      }
      }
  });
  </script> -->

    <script type="text/javascript">
  // setting's nav-button on capaign page js

    jQuery(document).ready(function ($) {
    //THIS MAKES THE SLIDEY THINGS SLIDE
    //textone
    if (window.matchMedia("(max-width: 1600px)").matches) {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 75) {
                $(".medium-editor-toolbar").css('top','0px'); //class where you want apply
            } else {
                $(".medium-editor-toolbar").css('top','69px'); //class where you want apply
            }
        });
    } 
});
</script>
</body>
</html>


@include('includes.footer')