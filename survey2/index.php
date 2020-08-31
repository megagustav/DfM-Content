<?php include "../header.php";?>

	<section class="container intro">

        <div class="tables">
          <h3>Put these cards into their representative columns <span onClick="window.location.reload();" class="badge badge-primary float-right new_words">Get New Words</span></h3>

          <label class="switch">
            <input id="def" type="checkbox">
            <span class="slider round"></span>
            <span class="label">Show Definitions</span>
          </label>

      <div class="row">
            <div class="col-md-12">
              <ol class="sorting">
                <?php include "terms-generator.php";?>
              </ol>
            </div>
            <div class="col-md-4">
            	Function
              <ol class="sorting function" id="submit">
                <p class="set_definition">Function: situations in which a physical or informatic use is acting as the focus of attention, with less attention being paid to the psychological or sociological considerations.</p>
                <p class="background text-muted">Drop Definitions Here</p>
              </ol>
            </div>
            <div class="col-md-4">
            	Ritual
              <ol class="sorting ritual" id="submit">
                <p class="set_definition">Ritual: when the meaning of the artefact is closely related to action of a symbolic nature.</p>
                <p class="background text-muted">Drop Definitions Here</p>
              </ol>
            </div>
            <div class="col-md-4">
            	Myth
              <ol class="sorting myth" id="submit">
                 <p class="set_definition">Myth: mainly symbolic meaning, thus not necessarily requiring dedicated externally visible activity on the part of the user.</p>
                <p class="background text-muted">Drop Definitions Here</p>
              </ol>
            </div>
          </div>
</div>
          
          <button onclick="submit()" name="save" value="Submit" type="button" class="btn btn-primary">Done</button>
          
          <button onClick="window.location.reload();" name="reload" value="Reload" type="button" class="btn btn-secondary">Reload</button>
</section>
<section class='sources'>
  <p>1: Mekler and Hornbaek, 2019</p>
  <p>2: Wallendorf and Arnould (1988)</p>
  <p>3: Watson (2002)</p>
  <p>4: Giacomin</p>
</section>

<?php include "../footer.php";?>