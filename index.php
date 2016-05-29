<!doctype html>
<html>
    <head>
        <title>Form Generator</title>
        <link rel="stylesheet" href="style.css"/>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css"/>
        <link media="all" href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
        <div id="elPicker">
            <h2>Elements</h2>
            <ul id="draggablePicker">
                <li data-type="input-field">
                    <img src="http://placehold.it/100x75/ffffff/?text=+"><br />
                    <span>Input Field</span>
                </li>
                <li data-type="select">
                    <img src="http://placehold.it/100x75/ffffff/?text=+"><br />
                    <span>Select Dropdown</span>
                </li>
                <li data-type="textarea">
                    <img src="http://placehold.it/100x75/ffffff/?text=+"><br />
                    <span>Rich Text Box</span>
                </li>
                <li data-type="other-element">
                    <img src="http://placehold.it/100x75/ffffff/?text=+"><br />
                    <span>Select Dropdown</span>
                </li>
                <li data-type="camera">
                    <img src="http://placehold.it/100x75/ffffff/?text=+"><br />
                    <span>Input Field</span>
                </li>
                <li data-type="etc">
                    <img src="http://placehold.it/100x75/ffffff/?text=+"><br />
                    <span>Select Dropdown</span>
                </li>
            </ul>
        </div>
        <div id="elDropper"></div>
		<div id="dialog-confirm" title="Delete this form Component?">
		  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>This component will be permanently deleted and cannot be recovered. Are you sure?</p>
		</div>
		<!--SCRIPTS INCLUDED-->
		
		<script data-main="js/main" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.2.0/require.min.js"></script>
		<script>
			require(['main'], function () {
				require(['interface', 'components'], function () {
					console.log("Loading: Succesful");
				});
			});
		</script>
		
		<!--PLUGINS USED BY COMPONENTS-->
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		
		<!--UTILITY JS FUNCTIONS-->
		<script src="js/utility.js" type="text/javascript"></script>
		
		<!--COMPONENTS-->
		<!--END SCRIPTS INCLUDED-->
    </body> 
</html>