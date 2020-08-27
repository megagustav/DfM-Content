<?php include "header.php";?>

	<body class="container-fluid">

        <div class="tables">
          <h3>Put these cards into their representative columns <span onClick="window.location.reload();" class="badge badge-primary float-right new_words">Get New Words</span></h3>

          <label class="switch">
            <input id="def" type="checkbox">
            <span class="slider round"></span>
            <span class="label">Show Definitions</span>
          </label>

      <div class="row">
            <div class="col-12">
              <ol class="sorting">
                <li class="definition" id="1">Meaning as a quality of <span class="word">interaction</span> remains elusive</li>
                <li class="definition" id="2">Item <span class="word">2</span></li>
                <li class="definition" id="3">Item <span class="word">3</span></li>
                <li class="definition" id="4">Item <span class="word">4</span></li>
                <li class="definition" id="5">Item <span class="word">5</span></li>
                <li class="definition" id="6">Item <span class="word">6</span></li>
              </ol>
            </div>
            <div class="col-4">
            	Function
              <ol class="sorting function" id="submit">
                <p class="set_definition">Item</p>
                <p class="background text-muted">Drop Definitions Here</p>
              </ol>
            </div>
            <div class="col-4">
            	Ritual
              <ol class="sorting ritual" id="submit">
                <p class="set_definition">Item 2</p>
                <p class="background text-muted">Drop Definitions Here</p>
              </ol>
            </div>
            <div class="col-4">
            	Myth
              <ol class="sorting myth" id="submit">
                <p class="set_definition">Item</p>
                <p class="background text-muted">Drop Definitions Here</p>
              </ol>
            </div>
          </div>
</div>
          
          <button onclick="submit()" name="save" value="Submit" type="button" class="btn btn-primary">Done</button>
          
          <button onClick="window.location.reload();" name="reload" value="Reload" type="button" class="btn btn-secondary">Reload</button>
          
	<footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://johnny.github.io/jquery-sortable/js/application.js"></script>
    <script src="js/jquery-sortable-min.js"></script>
		<script>
		$(function(){
    $("#save").click(function () {
        var mysave = $("#submit").html();
        $("#hiddeninput").val(mysave);
    });
});
		</script>
		<script>
$(document).ready(function(){
  $(".definition").addClass("toggledef");
  $(".word").removeClass("highlight");
  $("#def").click(function(){
    $(".definition").toggleClass("toggledef");
    $(".word").toggleClass("highlight");
  });
});
</script>


<script>
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

	debugger;
}
</script>
	<script>
	var adjustment;

$("ol.sorting").sortable({
  group: "sorting",
  pullPlaceholder: false,
  // animation on drop
  onDrop: function  ($item, container, _super) {
    var $clonedItem = $("<li/>").css({height: 0});
    $item.before($clonedItem);
    $clonedItem.animate({"height": $item.height()});

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
	</script>
	
	</footer>
<?php include "footer.php";?>