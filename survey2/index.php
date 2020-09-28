<?php   ob_start();
        include "../header.php";
        $buffer=ob_get_contents();
        ob_end_clean();
        
        $title = "Designing User Experience in Autonomous Vehicles — Survey";
        $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
        
        echo $buffer;
?>

	<section class="container pb-5 mb-5 intro">
                
                <div class="d-md-none alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Help</strong> For a better experience with this survey, please use a larger screen than your phone.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

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

            <div class="col-10 col-md-6 pr-md-0">
              <ol class="sorting generator">
                <p class="background text-muted">Nice job! You can click on <kbd>Done</kbd> now.</p>  
                <?php include "terms-generator.php";?>
              </ol>
            </div>

            <div class="col-10 col-md-6">
              <ol class="sorting function" id="submit">
                <span class="text-muted label-container">Function</span>
                <p class="background text-muted">Drop Function Cards Here</p>
              </ol>

              <ol class="sorting ritual" id="submit">      
                <span class="text-muted label-container">Ritual</span>
                <p class="background text-muted">Drop Ritual Cards Here</p>
              </ol>
            
              <ol class="sorting myth" id="submit">
                <span class="text-muted label-container">Myth</span>
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
              <li id="1">1. Elisa D. Mekler and Kasper Hornbæk. 2019. A Framework for the Experience of Meaning in Human-Computer Interaction. In CHI Conference on Human Factors in Computing Systems Proceedings (CHI 2019), May 4–9, 2019, Glasgow, Scotland UK. ACM, New York, NY, USA, 15 pages. https://doi.org/10.1145/3290605.3300455</li>
              <li id="2">2. Wallendorf, M., & Arnould, E. J. (1988). "My favorite things": A cross-cultural inquiry into object attachment, possessiveness, and social linkage. Journal of Consumer Research, 14(4), 531–547. https://doi.org/10.1086/209134 </li>
              <li id="3">3. Watson (2002)</li>
              <li id="4">4. Giacomin, J. What is Design for Meaning? (2017)</li>
              <li id="5">5. Making Meaning, Diller, Shedroff, Rhea, 2008</li>
              <li id="6">6. The B2B Elements of Value
                      by Eric Almquist , Jamie Cleghorn and Lori Sherer
                      From the March–April 2018 Issue</li>
              <li id="7">7. Sheldon, Kennon & Elliot, Andrew & Kim, Youngmee & Kasser, Tim. (2001). What Is Satisfying About Satisfying Events? Testing 10 Candidate Psychological Needs. Journal of personality and social psychology. 80. 325-39. 10.1037/0022-3514.80.2.325. </li>
              <li id="8">8. Richins, Marsha. (1994). Valuing Things: The Public and Private Meanings of Possessions. Journal of Consumer Research. 21. 504-21. 10.1086/209414. </li>
              <li id="9">9. Rook, D. (1985). The Ritual Dimension of Consumer Behavior. Journal of Consumer Research, 12(3), 251-264. Retrieved September 27, 2020, from http://www.jstor.org/stable/254372</li>
              <li id="10">10. Boztepe, S. (2007). User Value: Competing theories and models. International Journal of Design, 1(2), 55-63 <br>
              Definitions from: OED Online. Oxford University Press, September 2020. Web. 27 September 2020.</li>
              <li id="11">11. Mekler, E. D., Hornbaek K. (2016). Momentary Pleasure or Lasting Meaning? Distinguishing Eudaimonic and Hedonic User Experience. CHI 2016, San Jose, CA, USA</li>
              <li id="12">12. de Souza, Clarisse. (2005). Semiotic engineering: Bringing designers and users together at interaction time. Interacting with Computers. 17. 317-341. 10.1016/j.intcom.2005.01.007. </li>
            </ol>
          </section>

        </div><!-- /tables -->
        <div class="tables disclaimer mt-5">         
          <p class="text-muted small mb-4">Disclaimer: This survey is for the Interaction Design 2020 course at <a href="https://www.polimi.it" target="_blank">Politecnico di Milano</a>. We don't record personally identifiable information about the participant and the collected data will be deleted once it's aggregated into the report. All we care about is the sum of responses, not individual answers.</p>
        </div>
          
</section>

<?php include "../footer.php";?>