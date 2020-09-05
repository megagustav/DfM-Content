<?php include "../header.php";?>

	<section class="container pb-5 mb-5 intro">

        <div class="tables">
          <h3 class="instructions">According to the definitions of <i>function</i>, <i>ritual</i> and <i>myth</i>, please put these cards into their representative columns <!--span onClick="window.location.reload();" class="badge badge-primary float-right new_words">Get New Words</span--></h3>

          <label class="switch">
            <input id="def" type="checkbox">
            <span class="slider round"></span>
            <span class="label">Show Context</span>
          </label>

          <div class="row">

            <div class="col-md-4">
              <ol class="sorting function">
                <p class="set_definition">Function: situations in which a physical or informatic use is acting as the focus of attention, with less attention being paid to the psychological or sociological considerations.</p>
              </ol>
            </div>
            <div class="col-md-4">
              <ol class="sorting ritual">
                <p class="set_definition">Ritual: when the meaning of the artefact is closely related to action of a symbolic nature.</p>
              </ol>
            </div>
            <div class="col-md-4">
              <ol class="sorting myth">
                 <p class="set_definition">Myth: mainly symbolic meaning, thus not necessarily requiring dedicated externally visible activity on the part of the user.</p>
              </ol>
            </div>

            <div class="col-md-12">
              <ol class="sorting">
                <?php include "terms-generator.php";?>
              </ol>
            </div>

            <div class="col-md-4">
            	Function
              <ol class="sorting function" id="submit">
                <p class="background text-muted">Drop Cards Here</p>
              </ol>
            </div>
            <div class="col-md-4">
            	Ritual
              <ol class="sorting ritual" id="submit">
                <p class="background text-muted">Drop Cards Here</p>
              </ol>
            </div>
            <div class="col-md-4">
            	Myth
              <ol class="sorting myth" id="submit">
                <p class="background text-muted">Drop Cards Here</p>
              </ol>
            </div>
          </div><!-- /row -->
        </div><!-- /tables -->
          
        <button onclick="submit()" name="save" value="Submit" type="button" class="btn btn-primary">Done</button>
          
</section>
<section class="container pb-5 mb-5 sources">
  <p>1: Mekler and Hornbaek, 2019</p>
  <p>2: Wallendorf and Arnould (1988)</p>
  <p>3: Watson (2002)</p>
  <p>4: Giacomin</p>
</section>

<?php include "../footer.php";?>