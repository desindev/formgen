define(['jquery', 'jquery_ui', 'touch_punch'], function () {
	$(function() {
		$("#elPicker ul li").draggable({
		// cancel: "a.ui-icon", // clicking an icon won't initiate dragging
			revert: "invalid", // when not dropped, the item will revert back to its initial position
		// containment: "document",
			helper: "clone",
			cursor: "move"
		});

		$("#elDropper").droppable({
			accept: "#elPicker ul li",
			activeClass: "ui-state-highlight",
			drop: function( event, ui ) {
			deleteImage( ui.draggable );

		}
		});
		var accordionDouble = 0;
		function deleteImage( $item ) {
			$item.fadeOut(300, function() {
					$item.fadeIn(300);
					$( "#elDropper" ).append( "<div class=\"formComponent\"><h3>"+$item.data("type")+"<img class=\"btnCloseComponent\" src=\"images/btn_x.png\" /></h3>\n\
						<div>\n\
						\n\
						</div>\n\
					</div>" );
				});
		}

		$('#elDropper').on('DOMNodeInserted', '.formComponent', function (e) {
			currentComponent = $(e.target).accordion({
				collapsible: true,
				active: false,
				heightStyle: "content",
				autoHeight: true,
				event: 'dblclick',
	//			beforeActivate: function(event, ui) {
	//			accordions.not(this).accordion('option', 'active', false);
	//			}
			});
		});


		$('#elDropper').on("dblclick", '.formComponent', function () {
			currentComponent = $(this);
			$('.formComponent').not(currentComponent).accordion('option', 'active', false);
		});


		$("#elDropper").sortable({placeholder: "ui-state-highlight"});
		$("#elDropper").on("click", ".btnCloseComponent", function () {
			console.log("test");
			currentComponent = $(this);
			currentComponentParent = currentComponent.parent().parent();
			$("#dialog-confirm").dialog({
				resizable: false,
				height:140,
				modal: true,
				buttons: {
				  "Delete it": function() {
					$( this ).dialog( "close" );
					currentComponentParent.remove();
				  },
				  Cancel: function() {
					$( this ).dialog( "close" );
				  }
				}
			});
		});
	});
});
