<?php include "../header.php";?>

	<section class="container pb-5 mb-5 intro">

        <div class="tables">
                
          <h1 class="col-12">Designing User Experience in Autonomous Vehicles</h1>
                
          <img class="col-12 mb-5 mt-5 rounded" src="car.jpg" />
                
          <h3 class="px-3 instructions">According to the definitions of <i>function</i>, <i>ritual</i> and <i>myth</i>, please put the cards below into their representative columns — as you see fit. <!--span onClick="window.location.reload();" class="badge badge-primary float-right new_words">Get New Words</span--></h3>

          <hr>

          <div class="row mb-3 mt-4">
            <div class="col-md-4">
              <h4 class="column_title">Function</h4>
              <p class="set_definition">The purpose of something or the way it operates.</p>
            </div>
            <div class="col-md-4">
              <h4 class="column_title">Ritual</h4>
              <p class="set_definition">Expressive, symbolic actions or human interactions, performed regularly or ceremonially in a prescribed order.</p>
            </div>
            <div class="col-md-4">
              <h4 class="column_title">Myth</h4>
              <p class="set_definition">A traditional, sometimes idealised, story used to explain the idea around a thing, person or social phenomenon.</p>
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

            <div class="col-md-6 pr-md-0">
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

            <ol class="sources">
              Sources:
              <li id="1">1. Mekler and Hornbaek, 2019</li>
              <li id="2">2. Wallendorf and Arnould (1988)</li>
              <li id="3">3. Watson (2002)</li>
              <li id="4">4. Giacomin</li>
              <li id="5">5. Making Meaning</li>
              <li id="6">6. The Elements of Value</li>
              <li id="7">7. Sheldon et al.</li>
              <li id="8">8. Richins, Public and Private Meanings</li>
              <li id="9">9. Rook, Ritual Dimension of Consumer Behavior</li>
              <li id="10">10. Boztepe, S. (2007). User Value: Competing theories and models. International Journal of Design, 1(2), 55-63</li>
              <li id="11">11. Mekler, E. D., Hornbaek K. (2016). Momentary Pleasure or Lasting Meaning? Distinguishing Eudaimonic and Hedonic User Experience. CHI 2016, San Jose, CA, USA</li>
            </ol>
          </section>

        </div><!-- /tables -->
          
</section>

<?php include "../footer.php";?>