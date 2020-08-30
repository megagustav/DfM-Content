$(function  () {
  var adjustment;

  $("ol.simple_with_animation").sortable({
    group: 'simple_with_animation',
    pullPlaceholder: false,
    // animation on drop
    onDrop: function  ($item, container, _super) {
      var $clonedItem = $('<li/>').css({height: 0});
      $item.before($clonedItem);
      $clonedItem.animate({'height': $item.height()});

      $item.animate($clonedItem.position(), function  () {
        $clonedItem.detach();
        _super($item, container);
      });
    },

    // set $item relative to cursor position
    onDragStart: function ($item, container, _super) {
      var offset = $item.offset(),
          pointer = container.rootGroup.pointer;

      adjustment = {
        left: pointer.left - offset.left,
        top: pointer.top - offset.top
      };

      _super($item, container);
    },
    onDrag: function ($item, position) {
      $item.css({
        left: position.left - adjustment.left,
        top: position.top - adjustment.top
      });
    }
  });
});

$(document).ready(function(){
  $(".definition").addClass("toggledef");
  $(".word").removeClass("highlight");
  $("#def").click(function(){
    $(".definition").toggleClass("toggledef");
    $(".word").toggleClass("highlight");
  });
});

function submit() {
	var functionElements = $("ol.function li.definition").toArray();
	var ritualisticElements = $("ol.ritual li.definition").toArray();
	var mysticElements = $("ol.myth li.definition").toArray();
	var submitBody = {};
	
	for (const element of functionElements) {
		submitBody[element.id] = 1
	}
	
	for (const element of ritualisticElements) {
		submitBody[element.id] = 2
	}
	
	for (const element of mysticElements) {
		submitBody[element.id] = 3
	}
	
	var xhr = new XMLHttpRequest();
	var url = "/func/vote2";
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-Type", "application/json");
	var data = JSON.stringify(submitBody);
	xhr.send(data);

	//debugger;
}