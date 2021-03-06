<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Comment Anything -- Facebook Style</title>


    <!-- ################## SCRIPTS AND STYLES ##################### -->
    <!-- #                                                         # -->

	<link rel="stylesheet" href="commentanything/css/main.css" type="text/css" media="screen" />
	<script type="text/javascript" src="commentanything/js/prototype.js"></script>
	<script type="text/javascript" src="commentanything/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="commentanything/js/comment.js"></script>

    <!-- #                                                         # -->
    <!-- ########################################################### -->


</head>
<style>
    body{
        padding: 10px 20px;
        margin: 0;
        text-align: center;
        font-size: 12px;
        color: #333;
        font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
        background: #fff;
        border-top: 30px solid #3B5998;
    }

    #wrap{
        width: 600px;
        text-align: left;
        margin: 0 auto;
    }

    #wrap h2{
        border-bottom: 1px solid #ccc;
    }

    #wrap p{
        line-height: 17px;
    }

    #wrap #footer{
        border-top: 1px solid #ccc;
        margin-top: 10px;
        text-align: center;
        font-size: 10px;
        padding: 10px;
        color: #aaa;
    }

    #wrap #footer a{
        color: #888;
    }

    #wrap #options{
        float: right;
        border: 1px solid #E5EAF1;
        padding: 5px;
        margin: 0;
        background: #eee;
    }

    #wrap #options li{
        list-style: none;
    }
</style>
<script language="JavaScript">
    function disableName(obj){
        if(obj.checked){
            $('emNameSpan').show();
        }else{
            $('emNameSpan').hide();
        }
    }

    function disableMail(obj){
        if(obj.checked){
            $('emMailSpan').show();
        }else{
            $('emMailSpan').hide();
        }
    }

    function disablePict(obj){
        var pics = $$('div.emCommentImage');
        var text = $$('div.emCommentText');

        if(obj.checked){
            for(var i=0; i<pics.length; i++){
                pics[i].show();
            }

            for(var i=0; i<text.length; i++){
                text[i].style.marginLeft = '40px';
            }
        }else{
            for(var i=0; i<pics.length; i++){
                pics[i].hide();
            }

            for(var i=0; i<text.length; i++){
                text[i].style.marginLeft = '0px';
            }
        }


    }
</script>
<body>
    <div id="wrap">
        <h2>Comment Anything &mdash; Facebook Style</h2>
        <p>This small but very powerful script allows any novice webmaster to add a facebook-like commenting feature to pretty much anything on the website. Apart from technical excellence and blistering speed it features almost complete customization. Blend it easily into any existing website in minutes.</p>

        <h3>Key Features</h3>

        <ul id="options">
            <li style="margin-bottom: 5px;"><strong>Options:</strong></li>
            <li><input type="checkbox" value="1" id="enableName" onclick="disableName(this);"  /> &mdash; Enable Name  </li>
            <li><input type="checkbox" value="1" id="enableMail" onclick="disableMail(this);"  /> &mdash; Enable eMail  </li>
            <li><input type="checkbox" value="1" id="enablePict" onclick="disablePict(this);" checked /> &mdash; Enable Gravatars  </li>
        </ul>

        <ul>
            <li>Ajax Based Comment Anything, no page reloads whatsoever</li>
            <li>Dead easy implementation &mdash; just add javascript and a &lt;div&gt; to load data into</li>
            <li>Total Spam protection</li>
            <li>Obfuscated commentor's eMail addresses &mdash; avoid all spam</li>
            <li>100% Customizable view and layout (including all language data)</li>
            <li><a href="http://gravatar.com" target="_blank">Gravatar</a> support</li>
            <li>Automatically resizing textarea for improved usability</li>
            <li>Input elements text placeholders for better usability</li>
            <li>Go minimal by disabling name and email inputs</li>
            <li>A choice between JavaScript and PHP loaders</li>
        </ul>



        <p>Please use the comments field below to get an impression of what the script is truly capable of.</p>


        <!-- ############## COMMENTS PLACEHOLDER DIV ################ -->
        <!-- #                                                      # -->
        <!-- # the object attribute is a unique reference to a list # -->
        <!-- # of comments for THIS entity                          # -->
        <!-- #                                                      # -->

<?
    $object_id = 'article_12'; //identify the object which is being commented
    include_once('commentanything/php/loadComments.php'); //load the comments and display
?>

        <!-- #                                                      # -->
        <!-- ######################################################## -->



        <div id="footer">
            copyright 2010 clops.at, all rights reserved
        </div>
    </div>
</body>