<?php include "/header.php";?>

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
              <ol class="sorting generated">
                <?php include "terms-generator.php";?>
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
          
<?php include "scripts.php";?>	

<?php include "/footer.php";?>