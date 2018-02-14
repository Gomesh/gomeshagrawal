<?php

/* themes/custom/personal/templates/page--front.html.twig */
class __TwigTemplate_035faa9b173f7229bdc282bf3d9897ca1d528e559b798ac0083dbbe5171fff27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 104);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 80
        echo "<div id=\"sitewrapper\" class=\"wrapper\">
    <header id=\"header\" class=\"topRow navbar-fixed-top\">
            <div class=\"header-inner\">
                <div id=\"logoWrapper\" class=\"row headerTopBlock logo\">
                  <h1 id=\"logoImage\">
                    <a id=\"yui_3_17_2_1_1492429029436_1359\" href=\"/\">
                        <img src=\"/themes/custom/personal/images/ga_logo.png?format=1500w\" class=\"desktop\" alt=\"GomeshAgrawal.com\">
                        <img src=\"/themes/custom/personal/images/ga_logo.png?format=1500w\" class=\"mobile\" alt=\"GomeshAgrawal.com\">
                    </a>
                  </h1>
                </div><!--row end-->
                <label class=\"mobile-nav-toggle-label\" for=\"mobileNavToggle\">
                   <div class=\"top-bar\"></div>
                   <div class=\"middle-bar\"></div>
                   <div class=\"bottom-bar\"></div>
                </label>
                <label class=\"mobile-nav-toggle-label fixed-nav-toggle-label\" for=\"mobileNavToggle\">
                   <div class=\"top-bar\"></div>
                   <div class=\"middle-bar\"></div>
                   <div class=\"bottom-bar\"></div>
                </label>
                <div id=\"headerNav\">
                  <div id=\"mainNavWrapper\" class=\"nav-wrapper\" data-content-field=\"navigation-mainNav\">
                     <nav id=\"mainNavigation\" data-content-field=\"navigation-mainNav\">
                          ";
        // line 104
        if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()))) {
            // line 105
            echo "                         \t ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
            echo "
                          ";
        }
        // line 107
        echo "                     </nav>
                  </div>
                  <style></style>
                </div>
            </div><!--container end-->
    </header>
    <main id=\"page\" role=\"main\">
            <div id=\"content\" class=\"main-content\">
              <section id=\"home-header\" class=\"index-section empty\" data-url-id=\"home-header\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"banner-thumbnail-wrapper has-description\" data-content-field=\"main-image\">
                   <div class=\"color-overlay\">
                    <div class=\"firstsquarepluginsvideo\" style=\"background:none !important; width:100% !important; height:100% !important; overflow:hidden !important; pointer-events: none;\">
                    </div>
                    <div class=\"firstvideooverlay\" style=\"height:100% !important; width:100% !important; top:0 !important; left:0 !important; position:absolute !important; background:#000 !important; opacity:0.0 !important;\"></div>
                   </div>
                   <figure id=\"thumbnail\" class=\"loading content-fill\" style=\"overflow: hidden;\">
                     <img class=\"\" data-src=\"/themes/custom/personal/images/black_sky.jpg\" data-image=\"/themes/custom/personal/images/black_sky.jpg\" data-image-dimensions=\"1500x800\" data-image-focal-point=\"0.5,0.5\" style=\"top: -110px; left: 0px; width: 1291px; height: 689px; position: relative;\" alt=\"squarespace-specialist-devon-stank.jpg\" src=\"/themes/custom/personal/images/black_sky.jpg?format=1500w\" data-image-resolution=\"1500w\">
                   </figure>
                   <div class=\"desc-wrapper\" data-collection-id=\"57132acdb654f96a652d07d2\">
                     <p>I'm working hard to deliver the best to our clients.</p>
                     <p id=\"yui_3_17_2_1_1492265937570_1035\"><strong data-shrink-original-size=\"68\" style=\"letter-spacing: 0.0588235em;\">Let's create something incredible</strong>
                     </p>
                     <p><a href=\"/portfolio\">Learn How</a>
                     </p>
                   </div>
                </div>
              </section>
              <section id=\"home-intro\" class=\"index-section\" data-url-id=\"home-intro\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"index-section-wrapper page-content\">
                  <div class=\"content-inner has-content\" data-content-field=\"main-content\">
                    <div id=\"page-56c0c9a89f7266bbb246bc0c\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div class=\"row sqs-row\">
                        <div class=\"col sqs-col-12 span-12\">
                          <div class=\"sqs-block html-block sqs-block-html\" data-block-type=\"2\">
                            <div class=\"sqs-block-content\">
                              <h1 class=\"text-align-center\">Drupal Web Design Shop</h1>
                              <p class=\"text-align-center\">I am Gomesh Agrawal, Software Engineer. I am originally from Agra, a little town located in northern state of Uttar Pradesh, India. Since I was very young I got this fascination for computers and all knowledge involved around them. As technology moves forward at incredible speeds, one needs to keep up learning and creating new solutions to satisfy our modern world's demands. Software development is a science which needs to be interpreted in the way the customer's needs require. And for achieving this, the success relies on keeping a good communication between developers and customers, this approach allows us both parts an excellent configuration and realization of our final Goal: satisfaction of a job well done!.</p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id=\"home-video\" class=\"index-section\" data-url-id=\"home-video\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492265937570_499\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492265937570_498\" class=\"content-inner has-content\">
                    <div id=\"page-56c0ddbeb654f906a5faa390\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div id=\"yui_3_17_2_1_1492265937570_497\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492265937570_496\" class=\"col sqs-col-12 span-12\">
                          <div class=\"row sqs-row\">
                            <div class=\"col sqs-col-2 span-2\">
                               <div id=\"block-yui_3_17_2_16_1477177850930_12287\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                               </div>
                            </div>
                            <div class=\"col sqs-col-8 span-8\">
                               <div id=\"block-yui_3_17_2_60_1455477396286_8836\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h1 class=\"text-align-center\">Understanding my passion</h1>
                                  <p class=\"text-align-center under-stand\">There's something to be said about working with passionate business owners that truly love what they do. I’m no different. I started my business because I honestly enjoy coming to work every day to create something beautiful that has the ability to impact others.</p>
                                </div>
                               </div>
                            </div>
                            <div class=\"col sqs-col-2 span-2\">
                               <div id=\"block-yui_3_17_2_16_1477177850930_13100\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                               </div>
                            </div>
                          </div>
                          <div id=\"yui_3_17_2_1_1492265937570_495\" class=\"row sqs-row\">
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_15_1455477396286_12946\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_15_1455477396286_11010\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_60_1455477396286_12792\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/squarespace-developer\">Hire a Drupal Expert</a>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </section>
              <section id=\"home-projects\" class=\"index-section\" data-url-id=\"home-projects\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492319686272_288\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492319686272_287\" class=\"content-inner\">
                    <div id=\"page-56c0cbb2c6fc08567a77e6e8\" class=\"sqs-layout\">
                      <div id=\"yui_3_17_2_1_1492319686272_286\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492319686272_285\" class=\"col sqs-col-12 span-12\">
                          <div id=\"block-yui_3_17_2_1_1410317780479_11759\" class=\"sqs-block\">
                            <div class=\"sqs-block-content\">
                              <h1 class=\"text-align-center\">My latest Drupal projects</h1>
                            </div>
                          </div>
                          <div id=\"yui_3_17_2_1_1494919842477_258\" class=\"row sqs-row\">
                            <div id=\"yui_3_17_2_1_1494919842477_257\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_3_1460869228159_10521\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\" data-block-type=\"5\">
                                <div id=\"yui_3_17_2_1_1494919842477_256\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1494919842477_255\" class=\"image-block-outer-wrapper layout-caption-overlay-hover design-layout-inline sqs-narrow-width\">
                                    <div id=\"yui_3_17_2_1_1494919842477_254\" class=\"intrinsic\" style=\"max-width:600.0px;\">
                                      <div id=\"yui_3_17_2_1_1494919842477_253\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:100.0%;\" data-description=\"<p><em>Squarespace Website</em></p><p><strong>Jason Klock</strong></p><p><a href=\"/jason-klock\">View Project</a></p>\">
                                        <noscript><img src=\"/themes/custom/personal/images/genetics2.jpg\" alt=\"Squarespace Website Jason Klock View Project\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/genetics2.jpg\" data-image=\"/themes/custom/personal/images/genetics2.jpg\" data-image-dimensions=\"600x600\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"584598f9d1758ec839a47e61\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" alt=\"Squarespace Website Jason Klock View Project\" src=\"/themes/custom/personal/images/genetics2.jpg?format=500w\" data-image-resolution=\"500w\">
                                      </div>
                                      <div class=\"image-caption-wrapper\">
                                        <div class=\"image-caption\">
                                          <p>
                                            <em>Drupal Website</em>
                                          </p>
                                          <p>
                                            <strong>Genetics</strong>
                                          </p>
                                          <p>
                                            <a href=\"http://genetics.org\">View Website</a>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1494919842477_281\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_3_1460869228159_11935\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\" data-block-type=\"5\">
                                <div id=\"yui_3_17_2_1_1494919842477_280\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1494919842477_279\" class=\"image-block-outer-wrapper layout-caption-overlay-hover design-layout-inline sqs-narrow-width\">
                                    <div id=\"yui_3_17_2_1_1494919842477_278\" class=\"intrinsic\" style=\"max-width:600.0px;\">
                                      <div id=\"yui_3_17_2_1_1494919842477_277\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:100.0%;\" data-description=\"<p><em>Squarespace Website</em></p><p><strong>Nxt Level Atx</strong></p><p><a href=\"/next-level-athletix\">View Project</a></p>\">
                                        <noscript><img src=\"/themes/custom/personal/images/genes.jpg\" alt=\"Squarespace Website Nxt Level Atx View Project\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/genes.jpg\" data-image=\"/themes/custom/personal/images/genes.jpg\" data-image-dimensions=\"600x600\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5845989ff5e231a28450153e\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" alt=\"Squarespace Website Nxt Level Atx View Project\" src=\"/themes/custom/personal/images/genes.jpg?format=500w\" data-image-resolution=\"500w\">
                                      </div>
                                      <div class=\"image-caption-wrapper\">
                                        <div class=\"image-caption\">
                                          <p>
                                           <em>Drupal Website</em>
                                          </p>
                                          <p>
                                            <strong>Cob Dev</strong>
                                          </p>
                                          <p>
                                            <a href=\"http://dev.biologists.org\">View Website</a>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1494919842477_299\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_3_1460869228159_11229\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\" data-block-type=\"5\">
                                <div id=\"yui_3_17_2_1_1494919842477_298\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1494919842477_297\" class=\"image-block-outer-wrapper layout-caption-overlay-hover design-layout-inline sqs-narrow-width\">
                                    <div id=\"yui_3_17_2_1_1494919842477_296\" class=\"intrinsic\" style=\"max-width:600.0px;\">
                                      <div id=\"yui_3_17_2_1_1494919842477_295\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:100.0%;\" data-description=\"<p><em>Squarespace Website</em></p><p><strong>James Reid</strong></p><p><a href=\"/james-reid\">View Project</a></p>\">
                                        <noscript><img src=\"/themes/custom/personal/images/asm.jpg\" alt=\"Squarespace Website James Reid View Project\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/asm.jpg\" data-image=\"/themes/custom/personal/images/asm.jpg\" data-image-dimensions=\"600x600\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58459937bebafb2a2ebb97fc\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" alt=\"Squarespace Website James Reid View Project\" src=\"/themes/custom/personal/images/asm.jpg?format=500w\" data-image-resolution=\"500w\">
                                      </div>
                                      <div class=\"image-caption-wrapper\">
                                        <div class=\"image-caption\">
                                          <p>
                                            <em>Drupal Website</em>
                                          </p>
                                          <p>
                                            <strong>ASM MSPH</strong>
                                          </p>
                                          <p>
                                            <a href=\"http://msphere.asm.org/\">View Website</a>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"block-8a92d1dfcb50ddb13688\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/portfolio\">View more projects</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id=\"home-code-shop\" class=\"index-section\" data-url-id=\"home-code-shop\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492319686272_345\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492319686272_344\" class=\"content-inner has-content\">
                    <div id=\"page-56c0e083f8baf3afb3248ba1\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div id=\"yui_3_17_2_1_1492319686272_343\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492319686272_342\" class=\"col sqs-col-12 span-12\">
                          <div class=\"row sqs-row\">
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_7_1459429993504_8255\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                            <div class=\"col sqs-col-10 span-10\">
                              <div id=\"block-yui_3_17_2_6_1456080626592_11782\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h1 class=\"text-align-center\">
                                    I provide high quality Drupal code snippets, add-ons, plugins, video training, tips, and much more.
                                    <br>
                                  </h1>
                                </div>
                              </div>
                            </div>
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_7_1459429993504_7668\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"yui_3_17_2_1_1492319686272_341\" class=\"row sqs-row\">
                            <div id=\"yui_3_17_2_1_1492319686272_340\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_9_1465937375932_10106\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\">
                                <div id=\"yui_3_17_2_1_1492319686272_339\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1492319686272_338\" class=\"image-block-outer-wrapper layout-caption-hidden design-layout-inline\">
                                    <div id=\"yui_3_17_2_1_1492319686272_337\" class=\"intrinsic\" style=\"max-width:74.0px;\">
                                      <div id=\"yui_3_17_2_1_1492319686272_336\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:78.37837982177734%;\">
                                        <noscript><img src=\"/themes/custom/personal/images/code.png \" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/code.png\" data-image=\"/themes/custom/personal/images/code.png\" data-image-dimensions=\"74x58\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5760bc1f2fe131e466605497\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" src=\"/themes/custom/personal/images/code.png?format=100w\" data-image-resolution=\"100w\">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id=\"block-yui_3_17_2_2_1458614365136_11901\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h3 class=\"text-align-center\">CODE SNIPPETS</h3>
                                  <p class=\"text-align-center\">
                                    <p class=\"text-align-center\">
                                    These are exclusively made for Drupal sites and will offer custom design options with easy to understand instructions.
                                    <br>
                                    </p>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1492319686272_362\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_9_1465937375932_11677\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\">
                                <div id=\"yui_3_17_2_1_1492319686272_361\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1492319686272_360\" class=\"image-block-outer-wrapper layout-caption-hidden design-layout-inline\">
                                    <div id=\"yui_3_17_2_1_1492319686272_359\" class=\"intrinsic\" style=\"max-width:74.0px;\">
                                      <div id=\"yui_3_17_2_1_1492319686272_358\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:78.37837982177734%;\">
                                        <noscript><img src=\"/themes/custom/personal/images/code2.png\" />  
                                        </noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/code2.png\" data-image=\"/themes/custom/personal/images/code2.png\" data-image-dimensions=\"74x58\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5760bc2886db43573ee9d160\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" src=\"/themes/custom/personal/images/code2.png?format=100w\" data-image-resolution=\"100w\">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id=\"block-yui_3_17_2_2_1458614365136_12544\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h3 class=\"text-align-center\">VIDEO TRAINING</h3>
                                  <p class=\"text-align-center\">
                                    The training will go over some great insights to help users understand how to get the most out of their Drupal site.
                                    <br>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1492319686272_379\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_9_1465937375932_13242\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\">
                                <div id=\"yui_3_17_2_1_1492319686272_378\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1492319686272_377\" class=\"image-block-outer-wrapper layout-caption-hidden design-layout-inline\">
                                    <div id=\"yui_3_17_2_1_1492319686272_376\" class=\"intrinsic\" style=\"max-width:74.0px;\">
                                      <div id=\"yui_3_17_2_1_1492319686272_375\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:78.37837982177734%;\">
                                        <noscript><img src=\"/themes/custom/personal/images/code3.png\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/code3.png\" data-image=\"/themes/custom/personal/images/code3.png\" data-image-dimensions=\"74x58\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5760bc312fe131e46660552b\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" src=\"/themes/custom/personal/images/code3.png?format=100w\" data-image-resolution=\"100w\">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id=\"block-yui_3_17_2_2_1458614365136_13190\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h3 class=\"text-align-center\">TIPS & TRICKS</h3>
                                  <p class=\"text-align-center\">
                                    Learn from my mistakes and let me show you how to accomplish unique sections of your Drupal site that will impress.
                                    <br>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_12_1456080626592_8026\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/squarespace-code-shop\">Drupal Code Shop</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id=\"home-hire-me\" class=\"index-section empty\" data-url-id=\"home-hire-me\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"banner-thumbnail-wrapper has-description\">
                  <div class=\"color-overlay\"></div>
                  <figure id=\"thumbnail\" class=\"loading content-fill\" style=\"overflow: hidden;\">
                    <img class=\"\" data-src=\"/themes/custom/personal/images/nature.jpg\" data-image=\"/themes/custom/personal/images/nature.jpg\" data-image-dimensions=\"1500x918\" data-image-focal-point=\"0.5,0.5\" style=\"top: -201px; left: 0px; width: 1291px; height: 791px; position: relative;\" alt=\"devon-stank-squarespace-developer-header-01.jpg\" src=\"/themes/custom/personal/images/nature.jpg?format=1500w\" data-image-resolution=\"1500w\">
                  </figure>
                  <div class=\"desc-wrapper\" data-collection-id=\"57504f474c2f85c0e9462d36\">
                    <p>Have a Drupal site and need help from an expert?</p>
                    <p id=\"yui_3_17_2_1_1492319686272_1041\">
                      <strong data-shrink-original-size=\"68\" style=\"letter-spacing: 0.0588235em;\">Hire a Drupal developer today</strong>
                    </p>
                    <p>
                      <a href=\"/squarespace-developer\">Find Out How</a>
                    </p>
                  </div>
                </div>
                <div class=\"index-section-wrapper page-content\">
                  <div class=\"content-inner\" data-content-field=\"main-content\"> </div>
                </div>
              </section>
              <section id=\"home-about\" class=\"index-section\" data-url-id=\"home-about\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492319686272_709\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492319686272_708\" class=\"content-inner has-content\">
                    <div id=\"page-56c13a5045bf218b7f4bc06b\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div id=\"yui_3_17_2_1_1492319686272_707\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492319686272_706\" class=\"col sqs-col-12 span-12\">
                          <div id=\"block-ca799c2584ccf101f360\" class=\"sqs-block html-block\">
                            <div class=\"sqs-block-content\">
                              <h1 class=\"text-align-center\">My life as a Drupal Developer</h1>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_48_1455477396286_7040\" class=\"sqs-block instagram-block sqs-block-instagram\" data-block-json=\"{\"title\":true,\"thumbnail\":true,\"excerpt\":true,\"pageSize\":10,\"filter\":{},\"hSize\":null,\"floatDir\":null,\"pageCollectionId\":\"56c13a5045bf218b7f4bc06b\",\"containingItemId\":null,\"show-meta-only-title\":false,\"connectedAccountId\":\"5750453eb09f95f3b30b5ead\",\"enable-search\":false,\"socialCollectionId\":\"\",\"previewCollectionId\":\"\",\"status\":\"undefined\",\"searchId\":\"undefined\",\"searchTerm\":\"\",\"refresh\":null,\"unsafeSearch\":null,\"design\":\"grid\",\"aspectRatio\":null,\"auto-crop\":true,\"square-thumbs\":true,\"aspect-ratio\":\"square\",\"show-meta\":true,\"thumbnails-per-row\":5,\"padding\":10,\"lightbox\":true,\"lightboxTheme\":\"dark\",\"collectionId\":\"5750453eb09f95f3b30b5ead\",\"vSize\":null}\" data-block-type=\"25\">
                            <div id=\"yui_3_17_2_1_1492319686272_705\" class=\"sqs-block-content\">
                              <div id=\"yui_3_17_2_1_1492319686272_536\" class=\" sqs-gallery-container sqs-gallery-block-grid sqs-gallery-aspect-ratio-square sqs-gallery-thumbnails-per-row-5\">
                                <div id=\"yui_3_17_2_1_1492319686272_553\" class=\"sqs-gallery\">
                                  <div id=\"yui_3_17_2_1_1492319686272_568\" class=\"slide sqs-gallery-design-grid-slide sqs-active-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_720\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"I'd love to share with everyone my new company, SQUAR (yes, it's spelled without an E). SQUAR is a newly established creative digital agency located in Harrisburg, PA. Feel free to follow @squar.co for more details. #squarespace\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" alt=\"I'd love to share with everyone my new company, SQUAR (yes, it's spelled without an E). SQUAR is a newly established creative digital agency located in Harrisburg, PA. Feel free to follow @squar.co for more details. #squarespace\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58f0ec9930454416989ade9d\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"I'd love to share with everyone my new company, SQUAR (yes, it's spelled without an E). SQUAR is a newly established creative digital agency located in Harrisburg, PA. Feel free to follow @squar.co for more details. #squarespace\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_569\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_725\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Early morning in Midtown. #smallbusinessowner #office #harrisburg\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/office.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/office.jpg\" alt=\"office\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/office.jpg\" data-image=\"/themes/custom/personal/images/office.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58d8f639365ffa9c80350f43\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Early morning in Midtown. #office\" src=\"/themes/custom/personal/images/office.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_570\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_730\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Friday goodness. #coffee\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/project.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/project.jpg\" alt=\"Friday goodness. #coffee\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/project.jpg\" data-image=\"/themes/custom/personal/images/project.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58cc4719f7d1ff2ac8fca706\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Friday goodness. #coffee\" src=\"/themes/custom/personal/images/project.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_571\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_735\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Second desk ready for an intern this spring! #internship #squarespace #smallbusiness #startup\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" alt=\"Second desk ready for an intern this spring! #internship #squarespace #smallbusiness #startup\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" data-image-dimensions=\"640x637\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58c2c37017044b76b00a7465\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 197px; height: 196px; position: relative;\" alt=\"Second desk ready for an intern this spring! #internship #squarespace #smallbusiness #startup\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_572\" class=\"slide sqs-gallery-design-grid-slide\">
                                   <div id=\"yui_3_17_2_1_1492575056438_1071\" class=\"margin-wrapper\">
                                    <a id=\"yui_3_17_2_1_1492575056438_740\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"New wireframe, new website, new company, and a lot of news coming soon. #businessowner #smallbusiness #squarespace\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" style=\"overflow: hidden;\">
                                      <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" alt=\"New wireframe, new website, new company, and a lot of news coming soon. #businessowner #smallbusiness #squarespace\" /></noscript>
                                      <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58b0516b304544a5f569d75f\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"New wireframe, new website, new company, and a lot of news coming soon. #businessowner #smallbusiness #squarespace\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/?format=300w\" data-image-resolution=\"300w\">
                                    </a>
                                  </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_573\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_745\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Only two months into 2017 and there are many projects lined up already. I'm just glad I have this whiteboard to help keep things organized. #whiteboard #squarespace #smallbusiness\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" alt=\"Only two months into 2017 and there are many projects lined up already. I'm just glad I have this whiteboard to help keep things organized. #whiteboard #squarespace #smallbusiness\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58af1bed9656ca692ae5be26\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Only two months into 2017 and there are many projects lined up already. I'm just glad I have this whiteboard to help keep things organized. #whiteboard #squarespace #smallbusiness\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_574\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_750\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Squarespace Plug-ins 25% OFF Holiday Special, use code: XMAS25OFF. Link in bio\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/drupal8.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/drupal8.jpg\" alt=\"Squarespace Plug-ins 25% OFF Holiday Special, use code: XMAS25OFF. Link in bio\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/drupal8.jpg\" data-image=\"/themes/custom/personal/images/drupal8.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"585048ac05b037fa856187d0\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Squarespace Plug-ins 25% OFF Holiday Special, use code: XMAS25OFF. Link in bio\" src=\"/themes/custom/personal/images/drupal8.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_575\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_755\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Finally updated my portfolio with nine months worth of work. I've worked with some amazing and passionate people throughout 2016, and I couldn't have pushed myself as far is a did without them. Head over to Devonstank.com and take a look at my latest work. #squarespace @jasonklock @jr_impact @nxtlevelatx\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/coffee.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/coffee.jpg\" alt=\"Finally updated my portfolio with nine months worth of work. I've worked with some amazing and passionate people throughout 2016, and I couldn't have pushed myself as far is a did without them. Head over to Devonstank.com and take a look at my latest work. #squarespace @jasonklock @jr_impact @nxtlevelatx\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/coffee.jpg\" data-image=\"/themes/custom/personal/images/coffee.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"584b204d91b186b160c78818\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Finally updated my portfolio with nine months worth of work. I've worked with some amazing and passionate people throughout 2016, and I couldn't have pushed myself as far is a did without them. Head over to Devonstank.com and take a look at my latest work. #squarespace @jasonklock @jr_impact @nxtlevelatx\" src=\"/themes/custom/personal/images/coffee.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_576\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_760\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"It's a Latte kinda morning. #coffee #coffeeshop #latte #littleamps\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/apple.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/apple.jpg\" alt=\"It's a Latte kinda morning. #coffee #coffeeshop #latte #littleamps\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/apple.jpg\" data-image=\"/themes/custom/personal/images/apple.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"582b1e4f5a730faaff2ba399\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"It's a Latte kinda morning. #coffee #coffeeshop #latte #littleamps\" src=\"/themes/custom/personal/images/apple.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_577\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_765\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"At another amazing @klockentertainment wedding! Keep it up @jasonklock! #dj #wedding #squarespace\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" alt=\"At another amazing @klockentertainment wedding! Keep it up @jasonklock! #dj #wedding #squarespace\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58153a2fd44194f061e4f366\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"At another amazing @klockentertainment wedding! Keep it up @jasonklock! #dj #wedding #squarespace\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <style id=\"design-grid-css\" type=\"text/css\"></style>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_48_1455477396286_19600\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/about\">Learn More About Me</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
    </main>
    <div id=\"preFooter\" class=\"\">
      <div class=\"pre-footer-inner\">
        <div id=\"preFooterBlocks\" class=\"sqs-layout sqs-grid-12 columns-12\">
          <div class=\"row sqs-row\">
            <div class=\"col sqs-col-12 span-12\">
              <div id=\"block-yui_3_17_2_4_1426096152572_10160\" class=\"sqs-block\">
                <div class=\"sqs-block-content\">
                  <h1 class=\"text-align-center\">
                    Get a website that looks amazing and actually works.
                    <a href=\"/squarespace-developer\">Find Out How</a>
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"footer-inner\">
        <div id=\"footerBlocks\" class=\"sqs-layout sqs-grid-12 columns-12\">
          <div class=\"row sqs-row\">
            <div class=\"col sqs-col-12 span-12\">
              <div class=\"row sqs-row footermenu\">
                <nav id=\"footerNavigation\" data-content-field=\"footer-Nav\" class=\"mobile\">
                  ";
        // line 590
        if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 591
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                  ";
        }
        // line 593
        echo "                </nav>
                <nav id=\"footerNavigation\" data-content-field=\"footer-Nav\" class=\"desktop\">
                  ";
        // line 595
        if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 596
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                  ";
        }
        // line 598
        echo "                </nav>
                ";
        // line 641
        echo "            </div>
              <div id=\"block-yui_3_17_2_4_1426096152572_5073\" class=\"sqs-block\">
                <div class=\"sqs-block-content\">
                  <h2 class=\"text-align-center\">
                    <br>
                    For more information, call today at
                    <a href=\"tel:907-579-1574\">(907) 579-1574</a>
                  </h2>
                  <p class=\"text-align-center\"> </p>
                  <p class=\"text-align-center\">© 2017 Gomesh Agrawal. All rights reserved. India Web Design and Drupal Expert</p>
                  <p class=\"text-align-center\">
                    <a href=\"/terms-of-service\">Terms of Service</a>&nbsp; &nbsp;
                    <a href=\"/return-policy\">Return Policy</a>&nbsp; &nbsp;
                    <a href=\"/privacy-policy\">Privacy Policy</a>&nbsp; &nbsp;
                  </p>
                </div>
              </div>
              <div class=\"row sqs-row\">
                <div class=\"col sqs-col-4 span-4\">
                  <div id=\"block-yui_3_17_2_16_1456080626592_6474\" class=\"sqs-block spacer-block sqs-block-spacer sized vsize-1\" data-block-type=\"21\">
                    <div class=\"sqs-block-content\"> </div>
                  </div>
                </div>
                <div class=\"col sqs-col-4 span-4\">
                  <div id=\"block-yui_3_17_2_4_1457317661092_12807\" class=\"sqs-block\">
                    <div class=\"sqs-block-content\">
                      <div class=\"sqs-svg-icon--outer social-icon-alignment-center social-icons-color-white social-icons-size-small social-icons-style-regular\">
                        <nav class=\"sqs-svg-icon--list\">
                          <div class=\"social\">
                            <a href=\"https://www.instagram.com/gomeshcool\" target=\"_blank\">
                              <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                            </a>
                            <a href=\"https://www.linkedin.com/in/gomesh-agrawal-25610689/\" target=\"_blank\">
                              <i class=\"fa fa-linkedin\"></i>
                            </a>
                            <a href=\"https://www.facebook.com/gomesh.cool\" target=\"_blank\">
                              <i class=\"fa fa-facebook\"></i>
                            </a>
                            <a href=\"https://twitter.com/GomeshAgrawal\" target=\"_blank\">
                              <i class=\"fa fa-twitter\"></i>
                            </a>
                            <a href=\"https://plus.google.com/u/0/105324078702800518193\" target=\"_blank\">
                              <i class=\"fa fa-google-plus\"></i>
                            </a>
                          </div>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col sqs-col-4 span-4\">
                  <div id=\"block-yui_3_17_2_16_1456080626592_6924\" class=\"sqs-block spacer-block sqs-block-spacer sized vsize-1\">
                     <div class=\"sqs-block-content\"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/personal/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 641,  582 => 598,  576 => 596,  574 => 595,  570 => 593,  564 => 591,  562 => 590,  77 => 107,  71 => 105,  69 => 104,  43 => 80,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
{# <div id=\"sidecarNav\">
  <div id=\"mobileNavWrapper\" class=\"nav-wrapper\" data-content-field=\"navigation-mobileNav\">
    <nav id=\"mobileNavigation\">
      <div id=\"yui_3_17_2_1_1495119926740_1107\" class=\"index active homepage\">
        <a id=\"yui_3_17_2_1_1495119926740_1106\" href=\"/\"> Home </a>
      </div>
      <div class=\"index\">
        <a href=\"/squarespace-code-shop/\"> Code Shop </a>
      </div>
      <div class=\"index\">
        <a href=\"/portfolio/\"> Portfolio </a>
      </div>
      <div class=\"index\">
        <a href=\"/about/\"> About </a>
      </div>
      <div class=\"index\">
        <a href=\"/resume/\"> Resume </a>
      </div>
      <div class=\"collection\">
        <a href=\"/blog/\"> Blog </a>
      </div>
      <div class=\"index\">
        <a href=\"/contact/\"> Contact </a>
      </div>
    </nav>
  </div>
</div> #}
<div id=\"sitewrapper\" class=\"wrapper\">
    <header id=\"header\" class=\"topRow navbar-fixed-top\">
            <div class=\"header-inner\">
                <div id=\"logoWrapper\" class=\"row headerTopBlock logo\">
                  <h1 id=\"logoImage\">
                    <a id=\"yui_3_17_2_1_1492429029436_1359\" href=\"/\">
                        <img src=\"/themes/custom/personal/images/ga_logo.png?format=1500w\" class=\"desktop\" alt=\"GomeshAgrawal.com\">
                        <img src=\"/themes/custom/personal/images/ga_logo.png?format=1500w\" class=\"mobile\" alt=\"GomeshAgrawal.com\">
                    </a>
                  </h1>
                </div><!--row end-->
                <label class=\"mobile-nav-toggle-label\" for=\"mobileNavToggle\">
                   <div class=\"top-bar\"></div>
                   <div class=\"middle-bar\"></div>
                   <div class=\"bottom-bar\"></div>
                </label>
                <label class=\"mobile-nav-toggle-label fixed-nav-toggle-label\" for=\"mobileNavToggle\">
                   <div class=\"top-bar\"></div>
                   <div class=\"middle-bar\"></div>
                   <div class=\"bottom-bar\"></div>
                </label>
                <div id=\"headerNav\">
                  <div id=\"mainNavWrapper\" class=\"nav-wrapper\" data-content-field=\"navigation-mainNav\">
                     <nav id=\"mainNavigation\" data-content-field=\"navigation-mainNav\">
                          {% if page.navigation is not empty %}
                         \t {{ page.navigation }}
                          {% endif %}
                     </nav>
                  </div>
                  <style></style>
                </div>
            </div><!--container end-->
    </header>
    <main id=\"page\" role=\"main\">
            <div id=\"content\" class=\"main-content\">
              <section id=\"home-header\" class=\"index-section empty\" data-url-id=\"home-header\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"banner-thumbnail-wrapper has-description\" data-content-field=\"main-image\">
                   <div class=\"color-overlay\">
                    <div class=\"firstsquarepluginsvideo\" style=\"background:none !important; width:100% !important; height:100% !important; overflow:hidden !important; pointer-events: none;\">
                    </div>
                    <div class=\"firstvideooverlay\" style=\"height:100% !important; width:100% !important; top:0 !important; left:0 !important; position:absolute !important; background:#000 !important; opacity:0.0 !important;\"></div>
                   </div>
                   <figure id=\"thumbnail\" class=\"loading content-fill\" style=\"overflow: hidden;\">
                     <img class=\"\" data-src=\"/themes/custom/personal/images/black_sky.jpg\" data-image=\"/themes/custom/personal/images/black_sky.jpg\" data-image-dimensions=\"1500x800\" data-image-focal-point=\"0.5,0.5\" style=\"top: -110px; left: 0px; width: 1291px; height: 689px; position: relative;\" alt=\"squarespace-specialist-devon-stank.jpg\" src=\"/themes/custom/personal/images/black_sky.jpg?format=1500w\" data-image-resolution=\"1500w\">
                   </figure>
                   <div class=\"desc-wrapper\" data-collection-id=\"57132acdb654f96a652d07d2\">
                     <p>I'm working hard to deliver the best to our clients.</p>
                     <p id=\"yui_3_17_2_1_1492265937570_1035\"><strong data-shrink-original-size=\"68\" style=\"letter-spacing: 0.0588235em;\">Let's create something incredible</strong>
                     </p>
                     <p><a href=\"/portfolio\">Learn How</a>
                     </p>
                   </div>
                </div>
              </section>
              <section id=\"home-intro\" class=\"index-section\" data-url-id=\"home-intro\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"index-section-wrapper page-content\">
                  <div class=\"content-inner has-content\" data-content-field=\"main-content\">
                    <div id=\"page-56c0c9a89f7266bbb246bc0c\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div class=\"row sqs-row\">
                        <div class=\"col sqs-col-12 span-12\">
                          <div class=\"sqs-block html-block sqs-block-html\" data-block-type=\"2\">
                            <div class=\"sqs-block-content\">
                              <h1 class=\"text-align-center\">Drupal Web Design Shop</h1>
                              <p class=\"text-align-center\">I am Gomesh Agrawal, Software Engineer. I am originally from Agra, a little town located in northern state of Uttar Pradesh, India. Since I was very young I got this fascination for computers and all knowledge involved around them. As technology moves forward at incredible speeds, one needs to keep up learning and creating new solutions to satisfy our modern world's demands. Software development is a science which needs to be interpreted in the way the customer's needs require. And for achieving this, the success relies on keeping a good communication between developers and customers, this approach allows us both parts an excellent configuration and realization of our final Goal: satisfaction of a job well done!.</p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id=\"home-video\" class=\"index-section\" data-url-id=\"home-video\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492265937570_499\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492265937570_498\" class=\"content-inner has-content\">
                    <div id=\"page-56c0ddbeb654f906a5faa390\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div id=\"yui_3_17_2_1_1492265937570_497\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492265937570_496\" class=\"col sqs-col-12 span-12\">
                          <div class=\"row sqs-row\">
                            <div class=\"col sqs-col-2 span-2\">
                               <div id=\"block-yui_3_17_2_16_1477177850930_12287\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                               </div>
                            </div>
                            <div class=\"col sqs-col-8 span-8\">
                               <div id=\"block-yui_3_17_2_60_1455477396286_8836\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h1 class=\"text-align-center\">Understanding my passion</h1>
                                  <p class=\"text-align-center under-stand\">There's something to be said about working with passionate business owners that truly love what they do. I’m no different. I started my business because I honestly enjoy coming to work every day to create something beautiful that has the ability to impact others.</p>
                                </div>
                               </div>
                            </div>
                            <div class=\"col sqs-col-2 span-2\">
                               <div id=\"block-yui_3_17_2_16_1477177850930_13100\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                               </div>
                            </div>
                          </div>
                          <div id=\"yui_3_17_2_1_1492265937570_495\" class=\"row sqs-row\">
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_15_1455477396286_12946\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_15_1455477396286_11010\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_60_1455477396286_12792\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/squarespace-developer\">Hire a Drupal Expert</a>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </section>
              <section id=\"home-projects\" class=\"index-section\" data-url-id=\"home-projects\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492319686272_288\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492319686272_287\" class=\"content-inner\">
                    <div id=\"page-56c0cbb2c6fc08567a77e6e8\" class=\"sqs-layout\">
                      <div id=\"yui_3_17_2_1_1492319686272_286\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492319686272_285\" class=\"col sqs-col-12 span-12\">
                          <div id=\"block-yui_3_17_2_1_1410317780479_11759\" class=\"sqs-block\">
                            <div class=\"sqs-block-content\">
                              <h1 class=\"text-align-center\">My latest Drupal projects</h1>
                            </div>
                          </div>
                          <div id=\"yui_3_17_2_1_1494919842477_258\" class=\"row sqs-row\">
                            <div id=\"yui_3_17_2_1_1494919842477_257\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_3_1460869228159_10521\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\" data-block-type=\"5\">
                                <div id=\"yui_3_17_2_1_1494919842477_256\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1494919842477_255\" class=\"image-block-outer-wrapper layout-caption-overlay-hover design-layout-inline sqs-narrow-width\">
                                    <div id=\"yui_3_17_2_1_1494919842477_254\" class=\"intrinsic\" style=\"max-width:600.0px;\">
                                      <div id=\"yui_3_17_2_1_1494919842477_253\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:100.0%;\" data-description=\"<p><em>Squarespace Website</em></p><p><strong>Jason Klock</strong></p><p><a href=\"/jason-klock\">View Project</a></p>\">
                                        <noscript><img src=\"/themes/custom/personal/images/genetics2.jpg\" alt=\"Squarespace Website Jason Klock View Project\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/genetics2.jpg\" data-image=\"/themes/custom/personal/images/genetics2.jpg\" data-image-dimensions=\"600x600\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"584598f9d1758ec839a47e61\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" alt=\"Squarespace Website Jason Klock View Project\" src=\"/themes/custom/personal/images/genetics2.jpg?format=500w\" data-image-resolution=\"500w\">
                                      </div>
                                      <div class=\"image-caption-wrapper\">
                                        <div class=\"image-caption\">
                                          <p>
                                            <em>Drupal Website</em>
                                          </p>
                                          <p>
                                            <strong>Genetics</strong>
                                          </p>
                                          <p>
                                            <a href=\"http://genetics.org\">View Website</a>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1494919842477_281\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_3_1460869228159_11935\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\" data-block-type=\"5\">
                                <div id=\"yui_3_17_2_1_1494919842477_280\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1494919842477_279\" class=\"image-block-outer-wrapper layout-caption-overlay-hover design-layout-inline sqs-narrow-width\">
                                    <div id=\"yui_3_17_2_1_1494919842477_278\" class=\"intrinsic\" style=\"max-width:600.0px;\">
                                      <div id=\"yui_3_17_2_1_1494919842477_277\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:100.0%;\" data-description=\"<p><em>Squarespace Website</em></p><p><strong>Nxt Level Atx</strong></p><p><a href=\"/next-level-athletix\">View Project</a></p>\">
                                        <noscript><img src=\"/themes/custom/personal/images/genes.jpg\" alt=\"Squarespace Website Nxt Level Atx View Project\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/genes.jpg\" data-image=\"/themes/custom/personal/images/genes.jpg\" data-image-dimensions=\"600x600\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5845989ff5e231a28450153e\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" alt=\"Squarespace Website Nxt Level Atx View Project\" src=\"/themes/custom/personal/images/genes.jpg?format=500w\" data-image-resolution=\"500w\">
                                      </div>
                                      <div class=\"image-caption-wrapper\">
                                        <div class=\"image-caption\">
                                          <p>
                                           <em>Drupal Website</em>
                                          </p>
                                          <p>
                                            <strong>Cob Dev</strong>
                                          </p>
                                          <p>
                                            <a href=\"http://dev.biologists.org\">View Website</a>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1494919842477_299\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_3_1460869228159_11229\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\" data-block-type=\"5\">
                                <div id=\"yui_3_17_2_1_1494919842477_298\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1494919842477_297\" class=\"image-block-outer-wrapper layout-caption-overlay-hover design-layout-inline sqs-narrow-width\">
                                    <div id=\"yui_3_17_2_1_1494919842477_296\" class=\"intrinsic\" style=\"max-width:600.0px;\">
                                      <div id=\"yui_3_17_2_1_1494919842477_295\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:100.0%;\" data-description=\"<p><em>Squarespace Website</em></p><p><strong>James Reid</strong></p><p><a href=\"/james-reid\">View Project</a></p>\">
                                        <noscript><img src=\"/themes/custom/personal/images/asm.jpg\" alt=\"Squarespace Website James Reid View Project\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/asm.jpg\" data-image=\"/themes/custom/personal/images/asm.jpg\" data-image-dimensions=\"600x600\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58459937bebafb2a2ebb97fc\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" alt=\"Squarespace Website James Reid View Project\" src=\"/themes/custom/personal/images/asm.jpg?format=500w\" data-image-resolution=\"500w\">
                                      </div>
                                      <div class=\"image-caption-wrapper\">
                                        <div class=\"image-caption\">
                                          <p>
                                            <em>Drupal Website</em>
                                          </p>
                                          <p>
                                            <strong>ASM MSPH</strong>
                                          </p>
                                          <p>
                                            <a href=\"http://msphere.asm.org/\">View Website</a>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"block-8a92d1dfcb50ddb13688\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/portfolio\">View more projects</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id=\"home-code-shop\" class=\"index-section\" data-url-id=\"home-code-shop\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492319686272_345\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492319686272_344\" class=\"content-inner has-content\">
                    <div id=\"page-56c0e083f8baf3afb3248ba1\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div id=\"yui_3_17_2_1_1492319686272_343\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492319686272_342\" class=\"col sqs-col-12 span-12\">
                          <div class=\"row sqs-row\">
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_7_1459429993504_8255\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                            <div class=\"col sqs-col-10 span-10\">
                              <div id=\"block-yui_3_17_2_6_1456080626592_11782\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h1 class=\"text-align-center\">
                                    I provide high quality Drupal code snippets, add-ons, plugins, video training, tips, and much more.
                                    <br>
                                  </h1>
                                </div>
                              </div>
                            </div>
                            <div class=\"col sqs-col-1 span-1\">
                              <div id=\"block-yui_3_17_2_7_1459429993504_7668\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\"> </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"yui_3_17_2_1_1492319686272_341\" class=\"row sqs-row\">
                            <div id=\"yui_3_17_2_1_1492319686272_340\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_9_1465937375932_10106\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\">
                                <div id=\"yui_3_17_2_1_1492319686272_339\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1492319686272_338\" class=\"image-block-outer-wrapper layout-caption-hidden design-layout-inline\">
                                    <div id=\"yui_3_17_2_1_1492319686272_337\" class=\"intrinsic\" style=\"max-width:74.0px;\">
                                      <div id=\"yui_3_17_2_1_1492319686272_336\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:78.37837982177734%;\">
                                        <noscript><img src=\"/themes/custom/personal/images/code.png \" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/code.png\" data-image=\"/themes/custom/personal/images/code.png\" data-image-dimensions=\"74x58\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5760bc1f2fe131e466605497\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" src=\"/themes/custom/personal/images/code.png?format=100w\" data-image-resolution=\"100w\">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id=\"block-yui_3_17_2_2_1458614365136_11901\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h3 class=\"text-align-center\">CODE SNIPPETS</h3>
                                  <p class=\"text-align-center\">
                                    <p class=\"text-align-center\">
                                    These are exclusively made for Drupal sites and will offer custom design options with easy to understand instructions.
                                    <br>
                                    </p>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1492319686272_362\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_9_1465937375932_11677\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\">
                                <div id=\"yui_3_17_2_1_1492319686272_361\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1492319686272_360\" class=\"image-block-outer-wrapper layout-caption-hidden design-layout-inline\">
                                    <div id=\"yui_3_17_2_1_1492319686272_359\" class=\"intrinsic\" style=\"max-width:74.0px;\">
                                      <div id=\"yui_3_17_2_1_1492319686272_358\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:78.37837982177734%;\">
                                        <noscript><img src=\"/themes/custom/personal/images/code2.png\" />  
                                        </noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/code2.png\" data-image=\"/themes/custom/personal/images/code2.png\" data-image-dimensions=\"74x58\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5760bc2886db43573ee9d160\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" src=\"/themes/custom/personal/images/code2.png?format=100w\" data-image-resolution=\"100w\">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id=\"block-yui_3_17_2_2_1458614365136_12544\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h3 class=\"text-align-center\">VIDEO TRAINING</h3>
                                  <p class=\"text-align-center\">
                                    The training will go over some great insights to help users understand how to get the most out of their Drupal site.
                                    <br>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div id=\"yui_3_17_2_1_1492319686272_379\" class=\"col sqs-col-4 span-4\">
                              <div id=\"block-yui_3_17_2_9_1465937375932_13242\" class=\"sqs-block image-block sqs-block-image sqs-text-ready\">
                                <div id=\"yui_3_17_2_1_1492319686272_378\" class=\"sqs-block-content\">
                                  <div id=\"yui_3_17_2_1_1492319686272_377\" class=\"image-block-outer-wrapper layout-caption-hidden design-layout-inline\">
                                    <div id=\"yui_3_17_2_1_1492319686272_376\" class=\"intrinsic\" style=\"max-width:74.0px;\">
                                      <div id=\"yui_3_17_2_1_1492319686272_375\" class=\"image-block-wrapper has-aspect-ratio\" style=\"padding-bottom:78.37837982177734%;\">
                                        <noscript><img src=\"/themes/custom/personal/images/code3.png\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/code3.png\" data-image=\"/themes/custom/personal/images/code3.png\" data-image-dimensions=\"74x58\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"5760bc312fe131e46660552b\" data-type=\"image\" style=\"top: 0%; left: 0%; width: 100%; height: 100%; position: absolute;\" src=\"/themes/custom/personal/images/code3.png?format=100w\" data-image-resolution=\"100w\">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id=\"block-yui_3_17_2_2_1458614365136_13190\" class=\"sqs-block\">
                                <div class=\"sqs-block-content\">
                                  <h3 class=\"text-align-center\">TIPS & TRICKS</h3>
                                  <p class=\"text-align-center\">
                                    Learn from my mistakes and let me show you how to accomplish unique sections of your Drupal site that will impress.
                                    <br>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_12_1456080626592_8026\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/squarespace-code-shop\">Drupal Code Shop</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id=\"home-hire-me\" class=\"index-section empty\" data-url-id=\"home-hire-me\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"banner-thumbnail-wrapper has-description\">
                  <div class=\"color-overlay\"></div>
                  <figure id=\"thumbnail\" class=\"loading content-fill\" style=\"overflow: hidden;\">
                    <img class=\"\" data-src=\"/themes/custom/personal/images/nature.jpg\" data-image=\"/themes/custom/personal/images/nature.jpg\" data-image-dimensions=\"1500x918\" data-image-focal-point=\"0.5,0.5\" style=\"top: -201px; left: 0px; width: 1291px; height: 791px; position: relative;\" alt=\"devon-stank-squarespace-developer-header-01.jpg\" src=\"/themes/custom/personal/images/nature.jpg?format=1500w\" data-image-resolution=\"1500w\">
                  </figure>
                  <div class=\"desc-wrapper\" data-collection-id=\"57504f474c2f85c0e9462d36\">
                    <p>Have a Drupal site and need help from an expert?</p>
                    <p id=\"yui_3_17_2_1_1492319686272_1041\">
                      <strong data-shrink-original-size=\"68\" style=\"letter-spacing: 0.0588235em;\">Hire a Drupal developer today</strong>
                    </p>
                    <p>
                      <a href=\"/squarespace-developer\">Find Out How</a>
                    </p>
                  </div>
                </div>
                <div class=\"index-section-wrapper page-content\">
                  <div class=\"content-inner\" data-content-field=\"main-content\"> </div>
                </div>
              </section>
              <section id=\"home-about\" class=\"index-section\" data-url-id=\"home-about\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div id=\"yui_3_17_2_1_1492319686272_709\" class=\"index-section-wrapper page-content\">
                  <div id=\"yui_3_17_2_1_1492319686272_708\" class=\"content-inner has-content\">
                    <div id=\"page-56c13a5045bf218b7f4bc06b\" class=\"sqs-layout sqs-grid-12 columns-12\">
                      <div id=\"yui_3_17_2_1_1492319686272_707\" class=\"row sqs-row\">
                        <div id=\"yui_3_17_2_1_1492319686272_706\" class=\"col sqs-col-12 span-12\">
                          <div id=\"block-ca799c2584ccf101f360\" class=\"sqs-block html-block\">
                            <div class=\"sqs-block-content\">
                              <h1 class=\"text-align-center\">My life as a Drupal Developer</h1>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_48_1455477396286_7040\" class=\"sqs-block instagram-block sqs-block-instagram\" data-block-json=\"{\"title\":true,\"thumbnail\":true,\"excerpt\":true,\"pageSize\":10,\"filter\":{},\"hSize\":null,\"floatDir\":null,\"pageCollectionId\":\"56c13a5045bf218b7f4bc06b\",\"containingItemId\":null,\"show-meta-only-title\":false,\"connectedAccountId\":\"5750453eb09f95f3b30b5ead\",\"enable-search\":false,\"socialCollectionId\":\"\",\"previewCollectionId\":\"\",\"status\":\"undefined\",\"searchId\":\"undefined\",\"searchTerm\":\"\",\"refresh\":null,\"unsafeSearch\":null,\"design\":\"grid\",\"aspectRatio\":null,\"auto-crop\":true,\"square-thumbs\":true,\"aspect-ratio\":\"square\",\"show-meta\":true,\"thumbnails-per-row\":5,\"padding\":10,\"lightbox\":true,\"lightboxTheme\":\"dark\",\"collectionId\":\"5750453eb09f95f3b30b5ead\",\"vSize\":null}\" data-block-type=\"25\">
                            <div id=\"yui_3_17_2_1_1492319686272_705\" class=\"sqs-block-content\">
                              <div id=\"yui_3_17_2_1_1492319686272_536\" class=\" sqs-gallery-container sqs-gallery-block-grid sqs-gallery-aspect-ratio-square sqs-gallery-thumbnails-per-row-5\">
                                <div id=\"yui_3_17_2_1_1492319686272_553\" class=\"sqs-gallery\">
                                  <div id=\"yui_3_17_2_1_1492319686272_568\" class=\"slide sqs-gallery-design-grid-slide sqs-active-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_720\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"I'd love to share with everyone my new company, SQUAR (yes, it's spelled without an E). SQUAR is a newly established creative digital agency located in Harrisburg, PA. Feel free to follow @squar.co for more details. #squarespace\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" alt=\"I'd love to share with everyone my new company, SQUAR (yes, it's spelled without an E). SQUAR is a newly established creative digital agency located in Harrisburg, PA. Feel free to follow @squar.co for more details. #squarespace\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58f0ec9930454416989ade9d\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"I'd love to share with everyone my new company, SQUAR (yes, it's spelled without an E). SQUAR is a newly established creative digital agency located in Harrisburg, PA. Feel free to follow @squar.co for more details. #squarespace\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58f0ec9930454416989ade9d/1492184223463/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_569\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_725\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Early morning in Midtown. #smallbusinessowner #office #harrisburg\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/office.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/office.jpg\" alt=\"office\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/office.jpg\" data-image=\"/themes/custom/personal/images/office.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58d8f639365ffa9c80350f43\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Early morning in Midtown. #office\" src=\"/themes/custom/personal/images/office.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_570\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_730\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Friday goodness. #coffee\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/project.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/project.jpg\" alt=\"Friday goodness. #coffee\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/project.jpg\" data-image=\"/themes/custom/personal/images/project.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58cc4719f7d1ff2ac8fca706\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Friday goodness. #coffee\" src=\"/themes/custom/personal/images/project.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_571\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492319686272_735\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Second desk ready for an intern this spring! #internship #squarespace #smallbusiness #startup\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" alt=\"Second desk ready for an intern this spring! #internship #squarespace #smallbusiness #startup\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/\" data-image-dimensions=\"640x637\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58c2c37017044b76b00a7465\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 197px; height: 196px; position: relative;\" alt=\"Second desk ready for an intern this spring! #internship #squarespace #smallbusiness #startup\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58c2c37017044b76b00a7465/1489159033735/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_572\" class=\"slide sqs-gallery-design-grid-slide\">
                                   <div id=\"yui_3_17_2_1_1492575056438_1071\" class=\"margin-wrapper\">
                                    <a id=\"yui_3_17_2_1_1492575056438_740\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"New wireframe, new website, new company, and a lot of news coming soon. #businessowner #smallbusiness #squarespace\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" style=\"overflow: hidden;\">
                                      <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" alt=\"New wireframe, new website, new company, and a lot of news coming soon. #businessowner #smallbusiness #squarespace\" /></noscript>
                                      <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58b0516b304544a5f569d75f\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"New wireframe, new website, new company, and a lot of news coming soon. #businessowner #smallbusiness #squarespace\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58b0516b304544a5f569d75f/1487950193248/?format=300w\" data-image-resolution=\"300w\">
                                    </a>
                                  </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_573\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_745\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Only two months into 2017 and there are many projects lined up already. I'm just glad I have this whiteboard to help keep things organized. #whiteboard #squarespace #smallbusiness\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" alt=\"Only two months into 2017 and there are many projects lined up already. I'm just glad I have this whiteboard to help keep things organized. #whiteboard #squarespace #smallbusiness\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58af1bed9656ca692ae5be26\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Only two months into 2017 and there are many projects lined up already. I'm just glad I have this whiteboard to help keep things organized. #whiteboard #squarespace #smallbusiness\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58af1bed9656ca692ae5be26/1487870961982/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_574\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_750\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Squarespace Plug-ins 25% OFF Holiday Special, use code: XMAS25OFF. Link in bio\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/drupal8.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/drupal8.jpg\" alt=\"Squarespace Plug-ins 25% OFF Holiday Special, use code: XMAS25OFF. Link in bio\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/drupal8.jpg\" data-image=\"/themes/custom/personal/images/drupal8.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"585048ac05b037fa856187d0\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Squarespace Plug-ins 25% OFF Holiday Special, use code: XMAS25OFF. Link in bio\" src=\"/themes/custom/personal/images/drupal8.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_575\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_755\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"Finally updated my portfolio with nine months worth of work. I've worked with some amazing and passionate people throughout 2016, and I couldn't have pushed myself as far is a did without them. Head over to Devonstank.com and take a look at my latest work. #squarespace @jasonklock @jr_impact @nxtlevelatx\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/coffee.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/coffee.jpg\" alt=\"Finally updated my portfolio with nine months worth of work. I've worked with some amazing and passionate people throughout 2016, and I couldn't have pushed myself as far is a did without them. Head over to Devonstank.com and take a look at my latest work. #squarespace @jasonklock @jr_impact @nxtlevelatx\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/coffee.jpg\" data-image=\"/themes/custom/personal/images/coffee.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"584b204d91b186b160c78818\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"Finally updated my portfolio with nine months worth of work. I've worked with some amazing and passionate people throughout 2016, and I couldn't have pushed myself as far is a did without them. Head over to Devonstank.com and take a look at my latest work. #squarespace @jasonklock @jr_impact @nxtlevelatx\" src=\"/themes/custom/personal/images/coffee.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_576\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_760\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"It's a Latte kinda morning. #coffee #coffeeshop #latte #littleamps\" data-lightbox-theme=\"dark\" href=\"/themes/custom/personal/images/apple.jpg\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"/themes/custom/personal/images/apple.jpg\" alt=\"It's a Latte kinda morning. #coffee #coffeeshop #latte #littleamps\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"/themes/custom/personal/images/apple.jpg\" data-image=\"/themes/custom/personal/images/apple.jpg\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"582b1e4f5a730faaff2ba399\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"It's a Latte kinda morning. #coffee #coffeeshop #latte #littleamps\" src=\"/themes/custom/personal/images/apple.jpg?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                  <div id=\"yui_3_17_2_1_1492319686272_577\" class=\"slide sqs-gallery-design-grid-slide\">
                                    <div class=\"margin-wrapper\">
                                      <a id=\"yui_3_17_2_1_1492575056438_765\" class=\"image-slide-anchor content-fill\" data-title=\"\" data-description=\"At another amazing @klockentertainment wedding! Keep it up @jasonklock! #dj #wedding #squarespace\" data-lightbox-theme=\"dark\" href=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" style=\"overflow: hidden;\">
                                        <noscript><img src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" alt=\"At another amazing @klockentertainment wedding! Keep it up @jasonklock! #dj #wedding #squarespace\" /></noscript>
                                        <img class=\"thumb-image loaded\" data-src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" data-image=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/\" data-image-dimensions=\"640x640\" data-image-focal-point=\"0.5,0.5\" data-load=\"false\" data-image-id=\"58153a2fd44194f061e4f366\" data-type=\"image\" style=\"top: 0px; left: 0px; width: 196px; height: 196px; position: relative;\" alt=\"At another amazing @klockentertainment wedding! Keep it up @jasonklock! #dj #wedding #squarespace\" src=\"https://static1.squarespace.com/static/5300d507e4b0fa8137bdc65d/5750453eb09f95f3b30b5ead/58153a2fd44194f061e4f366/1477786170030/?format=300w\" data-image-resolution=\"300w\">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <style id=\"design-grid-css\" type=\"text/css\"></style>
                            </div>
                          </div>
                          <div id=\"block-yui_3_17_2_48_1455477396286_19600\" class=\"sqs-block button-block sqs-block-button\">
                            <div class=\"sqs-block-content\">
                              <div class=\"sqs-block-button-container--center\">
                                <a class=\"sqs-block-button-element--medium sqs-block-button-element\" href=\"/about\">Learn More About Me</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
    </main>
    <div id=\"preFooter\" class=\"\">
      <div class=\"pre-footer-inner\">
        <div id=\"preFooterBlocks\" class=\"sqs-layout sqs-grid-12 columns-12\">
          <div class=\"row sqs-row\">
            <div class=\"col sqs-col-12 span-12\">
              <div id=\"block-yui_3_17_2_4_1426096152572_10160\" class=\"sqs-block\">
                <div class=\"sqs-block-content\">
                  <h1 class=\"text-align-center\">
                    Get a website that looks amazing and actually works.
                    <a href=\"/squarespace-developer\">Find Out How</a>
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"footer-inner\">
        <div id=\"footerBlocks\" class=\"sqs-layout sqs-grid-12 columns-12\">
          <div class=\"row sqs-row\">
            <div class=\"col sqs-col-12 span-12\">
              <div class=\"row sqs-row footermenu\">
                <nav id=\"footerNavigation\" data-content-field=\"footer-Nav\" class=\"mobile\">
                  {% if page.footer is not empty %}
                        {{ page.footer }}
                  {% endif %}
                </nav>
                <nav id=\"footerNavigation\" data-content-field=\"footer-Nav\" class=\"desktop\">
                  {% if page.footer is not empty %}
                        {{ page.footer }}
                  {% endif %}
                </nav>
                {# <div class=\"col sqs-col-2 span-2\">
                  <div id=\"block-yui_3_17_2_2_1480456964607_16401\" class=\"sqs-block-content\">
                    <h3 class=\"text-align-center\">
                      <a href=\"#\">Code Shop</a>
                    </h3>
                  </div>
                </div>
                <div class=\"col sqs-col-2 span-2\">
                  <div id=\"block-yui_3_17_2_2_1480456964607_15676\" class=\"sqs-block-content\">
                    <h3 class=\"text-align-center\">
                      <a href=\"/portfolio\">Portfolio</a>
                    </h3>
                  </div>
                </div>
                <div class=\"col sqs-col-2 span-2\">
                  <div id=\"block-yui_3_17_2_2_1480456964607_18362\" class=\"sqs-block-content\">
                    <h3 class=\"text-align-center\">
                      <a href=\"/about\">About</a>
                    </h3>
                  </div>
                </div>
                <div class=\"col sqs-col-2 span-2\">
                  <div id=\"block-yui_3_17_2_2_1480456964607_14028\" class=\"sqs-block-content\">
                    <h3 class=\"text-align-center\">
                      <a href=\"/resume\">Resume</a>
                    </h3>
                  </div>
                </div>
                <div class=\"col sqs-col-2 span-2\">
                  <div id=\"block-yui_3_17_2_2_1480456964607_14848\" class=\"sqs-block-content\">
                    <h3 class=\"text-align-center\">
                      <a href=\"#\">Blog</a>
                    </h3>
                  </div>
                </div>
                <div class=\"col sqs-col-2 span-2\">
                  <div id=\"block-yui_3_17_2_2_1480456964607_13406\" class=\"sqs-block-content\">
                    <h3 class=\"text-align-center\">
                      <a href=\"#\">Contact</a>
                    </h3>
                  </div>
                </div> #}
            </div>
              <div id=\"block-yui_3_17_2_4_1426096152572_5073\" class=\"sqs-block\">
                <div class=\"sqs-block-content\">
                  <h2 class=\"text-align-center\">
                    <br>
                    For more information, call today at
                    <a href=\"tel:907-579-1574\">(907) 579-1574</a>
                  </h2>
                  <p class=\"text-align-center\"> </p>
                  <p class=\"text-align-center\">© 2017 Gomesh Agrawal. All rights reserved. India Web Design and Drupal Expert</p>
                  <p class=\"text-align-center\">
                    <a href=\"/terms-of-service\">Terms of Service</a>&nbsp; &nbsp;
                    <a href=\"/return-policy\">Return Policy</a>&nbsp; &nbsp;
                    <a href=\"/privacy-policy\">Privacy Policy</a>&nbsp; &nbsp;
                  </p>
                </div>
              </div>
              <div class=\"row sqs-row\">
                <div class=\"col sqs-col-4 span-4\">
                  <div id=\"block-yui_3_17_2_16_1456080626592_6474\" class=\"sqs-block spacer-block sqs-block-spacer sized vsize-1\" data-block-type=\"21\">
                    <div class=\"sqs-block-content\"> </div>
                  </div>
                </div>
                <div class=\"col sqs-col-4 span-4\">
                  <div id=\"block-yui_3_17_2_4_1457317661092_12807\" class=\"sqs-block\">
                    <div class=\"sqs-block-content\">
                      <div class=\"sqs-svg-icon--outer social-icon-alignment-center social-icons-color-white social-icons-size-small social-icons-style-regular\">
                        <nav class=\"sqs-svg-icon--list\">
                          <div class=\"social\">
                            <a href=\"https://www.instagram.com/gomeshcool\" target=\"_blank\">
                              <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                            </a>
                            <a href=\"https://www.linkedin.com/in/gomesh-agrawal-25610689/\" target=\"_blank\">
                              <i class=\"fa fa-linkedin\"></i>
                            </a>
                            <a href=\"https://www.facebook.com/gomesh.cool\" target=\"_blank\">
                              <i class=\"fa fa-facebook\"></i>
                            </a>
                            <a href=\"https://twitter.com/GomeshAgrawal\" target=\"_blank\">
                              <i class=\"fa fa-twitter\"></i>
                            </a>
                            <a href=\"https://plus.google.com/u/0/105324078702800518193\" target=\"_blank\">
                              <i class=\"fa fa-google-plus\"></i>
                            </a>
                          </div>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col sqs-col-4 span-4\">
                  <div id=\"block-yui_3_17_2_16_1456080626592_6924\" class=\"sqs-block spacer-block sqs-block-spacer sized vsize-1\">
                     <div class=\"sqs-block-content\"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
";
    }
}