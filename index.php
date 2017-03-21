<!DOCTYPE html>
<html lang="en">
<head>
<title>IDE</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        top: 65px;
        right: 0;
        bottom: 0;
        left: 0px;
    }
</style>
</head>
<body>
<?php include "includes/Navigation.php"; ?>
<div id="tabs" class="clearfix">
    <div class="editor intab clearfix"><div class="tabtext clearfix">New</div> <div class="close clearfix"><img src="style/images/close.png"></div></div>
    <div class="editor intab clearfix newtab"><img src="style/images/plus.png"></div>
</div>
<div id="editor">
</div>
    
<script src="ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/php");

editor.commands.addCommand({
        name: "showKeyboardShortcuts",
        bindKey: {win: "Ctrl-Alt-h", mac: "Command-Alt-h"},
        exec: function(editor) {
            ace.config.loadModule("ace/ext/keybinding_menu", function(module) {
                module.init(editor);
                editor.showKeyboardShortcuts()
            })
        }
    })
    
    editor.insert("<php echo 'this is php code'; ?>");
</script>
</body>
</html>