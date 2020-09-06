<?php include "../header.php";?>

	<section class="container pb-5 mb-5 intro">

        <div class="tables">
          <h3 class="px-3 instructions">According to the definitions of <i>function</i>, <i>ritual</i> and <i>myth</i>, please put the 20 cards into their representative columns. <!--span onClick="window.location.reload();" class="badge badge-primary float-right new_words">Get New Words</span--></h3>

          <hr>

          <div class="row mb-3 mt-4">
            <div class="col-md-4">
              <h4 class="column_title">Function</h4>
              <p class="set_definition">The main features of a product.</p>
            </div>
            <div class="col-md-4">
              <h4 class="column_title">Ritual</h4>
              <p class="set_definition">Actions performed ceremonially in a prescribed order, with a product and/or other people, motivated by routine or spirituality.</p>
            </div>
            <div class="col-md-4">
              <h4 class="column_title">Myth</h4>
              <p class="set_definition">A complex network of stories that acts as a personal interpretation for an action, event or product.</p>
            </div>
          </div>      

          <div class="row">

          <div class="col-md-12 context_bar">
              <label class="switch">
                <input id="def" type="checkbox">
                <span class="slider round"></span>
                <span class="label">Show Context and Sources</span>
              </label>
            </div>   

            <div class="col-md-6">
              <ol class="sorting generator">
                <p class="background text-muted">Nice job! You can click on <kbd>Done</kbd> now.</p>  
                <?php include "terms-generator.php";?>
              </ol>
            </div>

            <div class="col-md-6">
              <ol class="sorting function" id="submit">
                <p class="background text-muted">Drop Function Cards Here</p>
              </ol>

              <ol class="sorting ritual" id="submit">
                <p class="background text-muted">Drop Ritual Cards Here</p>
              </ol>
            
              <ol class="sorting myth" id="submit">
                <p class="background text-muted">Drop Myth Cards Here</p>
              </ol>
            </div>

          </div><!-- /row -->

          <hr>

          <button onclick="submit()" name="save" value="Submit" type="button" class="btn btn-primary">Done</button>

          <section class="sources">
            <hr>

            <ol>
              Sources:
              <li id="1">Mekler and Hornbaek, 2019</li>
              <li id="2">Wallendorf and Arnould (1988)</li>
              <li id="3">Watson (2002)</li>
              <li id="4">Giacomin</li>
            </ol>
          </section>

        </div><!-- /tables -->
          
</section>

<?php include "../footer.php";?>