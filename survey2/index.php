<?php include "../header.php";?>

	<section class="container pb-5 mb-5 intro">

        <div class="tables">
          <h3 class="instructions">According to the definitions of <i>function</i>, <i>ritual</i> and <i>myth</i>, please put these cards into their representative columns <!--span onClick="window.location.reload();" class="badge badge-primary float-right new_words">Get New Words</span--></h3>

          <div class="row mb-5">
            <div class="col-md-4">
              <p class="set_definition">Function: The main features of a product.</p>
            </div>
            <div class="col-md-4">
              <p class="set_definition">Ritual: Actions performed ceremonially in a prescribed order, with a product and/or other people, motivated by routine or spirituality.</p>
            </div>
            <div class="col-md-4">
              <p class="set_definition">Myth: A complex network of stories that acts as a personal interpretation for an action, event or product.</p>
            </div>
          </div>

          <label class="switch mb-5">
            <input id="def" type="checkbox">
            <span class="slider round"></span>
            <span class="label">Show Context</span>
          </label>

          <div class="row">

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

            <div class="col-md-12">
              <ol class="sorting generator">
                <?php include "terms-generator.php";?>
                <p class="background text-muted">No more words. You can click <kbd>Done</kbd> now.</p>
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