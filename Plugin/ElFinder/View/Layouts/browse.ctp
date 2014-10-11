<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>elFinder 2.0</title>
    <?php
    echo $this->Html->css(
        array(
            '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css',
            '/ElFinder/elfinder/css/elfinder.min',
            '/ElFinder/elfinder/css/theme'
        )
    );
    echo $this->Html->script(
        array(
            '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
            '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js',
            '/ElFinder/elfinder/js/elfinder.min',
        )
    );

    ?>
    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">
        function getUrlParam(paramName) {
            var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
            var match = window.location.search.match(reParam) ;

            return (match && match.length > 1) ? match[1] : '' ;
        }

        $().ready(function () {
            var funcNum = getUrlParam('CKEditorFuncNum');
            var elf = $('#elfinder').elfinder({
                url: 'connector',  // connector URL (REQUIRED)
                getFileCallback: function (file) {
                    window.opener.CKEDITOR.tools.callFunction(funcNum, file);
                    window.close();
                },
                resizable: false
            }).elfinder('instance');
        });
    </script>
</head>
<body>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>

</body>
</html>
