<?php

/* themes/custom/personal/templates/form--contact-message-feedback-form.html.twig */
class __TwigTemplate_985a0086aad75c7a44113554b4da6fb1f4e2103a2a09eb5cb33889781aeddca7 extends Twig_Template
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
        $tags = array("set" => 35, "for" => 36);
        $filters = array("without" => 152);
        $functions = array("simplify_menu" => 35);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for'),
                array('without'),
                array('simplify_menu')
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

        // line 15
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
                <div id=\"headerNav\">
                  <div id=\"mainNavWrapper\" class=\"nav-wrapper\" data-content-field=\"navigation-mainNav\">
                     <nav id=\"block-mainnavigation\" data-content-field=\"navigation-mainNav\">
                          <ul class=\"menu nav navbar-nav\">
                              ";
        // line 35
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), array("main"));
        // line 36
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 37
            echo "                                  <li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "url", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "text", array()), "html", null, true));
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                          </ul>
                     </nav>
                  </div>
                  <style></style>
                </div>
            </div><!--container end-->
    </header>
    <main id=\"page\" role=\"main\">
            <div id=\"content\" class=\"main-content\">
              <section id=\"contact-header\" class=\"index-section empty\" data-url-id=\"home-header\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"banner-thumbnail-wrapper has-description\" data-content-field=\"main-image\">
                   <div class=\"color-overlay\">
                    <div class=\"firstsquarepluginsvideo\" style=\"background:none !important; width:100% !important; height:100% !important; overflow:hidden !important; pointer-events: none;\">
                    </div>
                    <div class=\"firstvideooverlay\" style=\"height:100% !important; width:100% !important; top:0 !important; left:0 !important; position:absolute !important; background:#000 !important; opacity:0.0 !important;\"></div>
                   </div>
                   <figure id=\"thumbnail\" class=\"loading content-fill\" style=\"overflow: hidden;\">
                     <img class=\"\" data-src=\"/themes/custom/personal/images/ship.jpg\" data-image=\"/themes/custom/personal/images/ship.jpg\" data-image-dimensions=\"1500x800\" data-image-focal-point=\"0.5,0.5\" style=\"top: -110px; left: 0px; width: 1291px; height: 689px; position: relative;\" alt=\"squarespace-specialist-devon-stank.jpg\" src=\"/themes/custom/personal/images/ship.jpg?format=1500w\" data-image-resolution=\"1500w\">
                   </figure>
                   <div class=\"desc-wrapper\" data-collection-id=\"57132acdb654f96a652d07d2\">
                     <p>Say hello</p> 
                     <p id=\"yui_3_17_2_1_1492265937570_1035\"><strong data-shrink-original-size=\"68\" style=\"letter-spacing: 0.0588235em;\">Have A Chat</strong>
                     </p>
                     <p><a href=\"/portfolio\">Learn How</a>
                     </p>
                   </div>
                </div>
              </section>
              <section id=\"contact-content\" class=\"index-section\" data-url-id=\"contact-content\">
                <div class=\"promoted-gallery-wrapper\"></div>
        <div class=\"index-section-wrapper page-content\" id=\"yui_3_17_2_1_1495022599647_266\">
          <div class=\"content-inner has-content\" data-content-field=\"main-content\" id=\"yui_3_17_2_1_1495022599647_265\">
            <div id=\"page-5700864b20c647bc94218862\" class=\"sqs-layout sqs-grid-12 columns-12\" data-type=\"page\">
              <div class=\"row sqs-row\" id=\"yui_3_17_2_1_1495022599647_264\">
                <div class=\"col sqs-col-6 span-6\">
                  <div class=\"row sqs-row\">
                    <div class=\"col sqs-col-5 span-5\">
                      <div id=\"block-62de4258a6e9efc88151\" class=\"sqs-block html-block sqs-block-html\">
                        <div class=\"sqs-block-content\">
                          <h1 style=\"margin-left:0px; margin-right:0px\">Contact me today</h1>
                          <p>
                            Please feel free to reach out to me if you have any questions or comments about the services I offer. Also, you could always just send me a friendly hello.
                            <br>
                            <br>
                            </p>
                              <h3>Contact Information</h3> 9075791574
                            <p>
                               Gomeshagrawal.com
                            <br>
                               India, Pincode 411021
                            <br>
                               <a href=\"tel:907-579-1574\">907-579-1574</a>
                            <br>
                               <a href=\"mailto:hello@gomeshagrawal.com\">hello@gomeshagrawal.com</a>
                          </p>
                        </div>
                      </div>
                      <div id=\"block-yui_3_17_2_8_1459652186409_22631\" class=\"sqs-block socialaccountlinks-v2-block sqs-block-socialaccountlinks-v2\">
                       <div class=\"sqs-block-content\">
                        <div class=\"sqs-block-content\">
                         <div class=\"sqs-svg-icon--outer social-icon-alignment-left social-icons-color-black social-icons-size-extra-small social-icons-style-regular \">
                          <nav class=\"sqs-svg-icon--list\">
                           <div class=\"social\" style=\"font-size: 20px;\">
                                    <a href=\"https://www.instagram.com/gomeshcool\" target=\"_blank\">
                                      <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </a>
                                   &nbsp; &nbsp;
                                    <a href=\"https://www.linkedin.com/in/gomesh-agrawal-25610689/\" target=\"_blank\">
                                      <i class=\"fa fa-linkedin\"></i>
                                    </a>
                                    &nbsp; &nbsp;
                                    <a href=\"https://www.facebook.com/gomesh.cool\" target=\"_blank\">
                                      <i class=\"fa fa-facebook\"></i>
                                    </a>
                                    &nbsp; &nbsp;
                                    <a href=\"https://twitter.com/GomeshAgrawal\" target=\"_blank\">
                                      <i class=\"fa fa-twitter\"></i>
                                    </a>
                                    &nbsp; &nbsp;
                                    <a href=\"https://plus.google.com/u/0/105324078702800518193\" target=\"_blank\">
                                      <i class=\"fa fa-google-plus\"></i>
                                    </a>
                           </div>
                          </nav>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
              <div class=\"col sqs-col-1 span-1\">
                <div id=\"block-yui_3_17_2_8_1459652186409_18865\" class=\"sqs-block spacer-block sqs-block-spacer sized vsize-1\">
                  <div class=\"sqs-block-content\"></div>
                </div>
              </div>
                  </div>
                </div>
            <div class=\"col sqs-col-6 span-6\" id=\"yui_3_17_2_1_1495022599647_263\">
              <div id=\"block-202295144d5dec4e309e\" class=\"sqs-block form-block sqs-block-form\">
                <div class=\"sqs-block-content\">
                  <div class=\"form-wrapper\">
                    <div class=\"form-inner-wrapper\">
                        <form";
        // line 141
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
                            ";
        // line 142
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
                            <div class=\"frominghting\">
                              ";
        // line 144
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mail", array()), "html", null, true));
        echo "
                            </div>
                            <div class=\"message\">
                              ";
        // line 147
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), "html", null, true));
        echo "
                            </div>
                            <div class=\"actions\">
                              ";
        // line 150
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions", array()), "html", null, true));
        echo "
                            </div>
                              ";
        // line 152
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "mail", "message", "actions"), "html", null, true));
        echo "
                        </form>
                    </div>
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
                <ul class=\"menu nav navbar-nav mobile\">
                    ";
        // line 190
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), array("footer"));
        // line 191
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 192
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "url", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "text", array()), "html", null, true));
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                </ul>
                <ul class=\"menu nav navbar-nav desktop\">
                    ";
        // line 196
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), array("footer"));
        // line 197
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "menu_tree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 198
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "url", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["menu_item"], "text", array()), "html", null, true));
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                </ul>
                ";
        // line 243
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
        return "themes/custom/personal/templates/form--contact-message-feedback-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 243,  294 => 200,  283 => 198,  278 => 197,  276 => 196,  272 => 194,  261 => 192,  256 => 191,  254 => 190,  213 => 152,  208 => 150,  202 => 147,  196 => 144,  191 => 142,  187 => 141,  83 => 39,  72 => 37,  67 => 36,  65 => 35,  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 *
 * @ingroup themeable
 */
#}
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
                <div id=\"headerNav\">
                  <div id=\"mainNavWrapper\" class=\"nav-wrapper\" data-content-field=\"navigation-mainNav\">
                     <nav id=\"block-mainnavigation\" data-content-field=\"navigation-mainNav\">
                          <ul class=\"menu nav navbar-nav\">
                              {% set items = simplify_menu('main') %}
                                {% for menu_item in items.menu_tree %}
                                  <li><a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a></li>
                                {% endfor %}
                          </ul>
                     </nav>
                  </div>
                  <style></style>
                </div>
            </div><!--container end-->
    </header>
    <main id=\"page\" role=\"main\">
            <div id=\"content\" class=\"main-content\">
              <section id=\"contact-header\" class=\"index-section empty\" data-url-id=\"home-header\">
                <div class=\"promoted-gallery-wrapper\"></div>
                <div class=\"banner-thumbnail-wrapper has-description\" data-content-field=\"main-image\">
                   <div class=\"color-overlay\">
                    <div class=\"firstsquarepluginsvideo\" style=\"background:none !important; width:100% !important; height:100% !important; overflow:hidden !important; pointer-events: none;\">
                    </div>
                    <div class=\"firstvideooverlay\" style=\"height:100% !important; width:100% !important; top:0 !important; left:0 !important; position:absolute !important; background:#000 !important; opacity:0.0 !important;\"></div>
                   </div>
                   <figure id=\"thumbnail\" class=\"loading content-fill\" style=\"overflow: hidden;\">
                     <img class=\"\" data-src=\"/themes/custom/personal/images/ship.jpg\" data-image=\"/themes/custom/personal/images/ship.jpg\" data-image-dimensions=\"1500x800\" data-image-focal-point=\"0.5,0.5\" style=\"top: -110px; left: 0px; width: 1291px; height: 689px; position: relative;\" alt=\"squarespace-specialist-devon-stank.jpg\" src=\"/themes/custom/personal/images/ship.jpg?format=1500w\" data-image-resolution=\"1500w\">
                   </figure>
                   <div class=\"desc-wrapper\" data-collection-id=\"57132acdb654f96a652d07d2\">
                     <p>Say hello</p> 
                     <p id=\"yui_3_17_2_1_1492265937570_1035\"><strong data-shrink-original-size=\"68\" style=\"letter-spacing: 0.0588235em;\">Have A Chat</strong>
                     </p>
                     <p><a href=\"/portfolio\">Learn How</a>
                     </p>
                   </div>
                </div>
              </section>
              <section id=\"contact-content\" class=\"index-section\" data-url-id=\"contact-content\">
                <div class=\"promoted-gallery-wrapper\"></div>
        <div class=\"index-section-wrapper page-content\" id=\"yui_3_17_2_1_1495022599647_266\">
          <div class=\"content-inner has-content\" data-content-field=\"main-content\" id=\"yui_3_17_2_1_1495022599647_265\">
            <div id=\"page-5700864b20c647bc94218862\" class=\"sqs-layout sqs-grid-12 columns-12\" data-type=\"page\">
              <div class=\"row sqs-row\" id=\"yui_3_17_2_1_1495022599647_264\">
                <div class=\"col sqs-col-6 span-6\">
                  <div class=\"row sqs-row\">
                    <div class=\"col sqs-col-5 span-5\">
                      <div id=\"block-62de4258a6e9efc88151\" class=\"sqs-block html-block sqs-block-html\">
                        <div class=\"sqs-block-content\">
                          <h1 style=\"margin-left:0px; margin-right:0px\">Contact me today</h1>
                          <p>
                            Please feel free to reach out to me if you have any questions or comments about the services I offer. Also, you could always just send me a friendly hello.
                            <br>
                            <br>
                            </p>
                              <h3>Contact Information</h3> 9075791574
                            <p>
                               Gomeshagrawal.com
                            <br>
                               India, Pincode 411021
                            <br>
                               <a href=\"tel:907-579-1574\">907-579-1574</a>
                            <br>
                               <a href=\"mailto:hello@gomeshagrawal.com\">hello@gomeshagrawal.com</a>
                          </p>
                        </div>
                      </div>
                      <div id=\"block-yui_3_17_2_8_1459652186409_22631\" class=\"sqs-block socialaccountlinks-v2-block sqs-block-socialaccountlinks-v2\">
                       <div class=\"sqs-block-content\">
                        <div class=\"sqs-block-content\">
                         <div class=\"sqs-svg-icon--outer social-icon-alignment-left social-icons-color-black social-icons-size-extra-small social-icons-style-regular \">
                          <nav class=\"sqs-svg-icon--list\">
                           <div class=\"social\" style=\"font-size: 20px;\">
                                    <a href=\"https://www.instagram.com/gomeshcool\" target=\"_blank\">
                                      <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </a>
                                   &nbsp; &nbsp;
                                    <a href=\"https://www.linkedin.com/in/gomesh-agrawal-25610689/\" target=\"_blank\">
                                      <i class=\"fa fa-linkedin\"></i>
                                    </a>
                                    &nbsp; &nbsp;
                                    <a href=\"https://www.facebook.com/gomesh.cool\" target=\"_blank\">
                                      <i class=\"fa fa-facebook\"></i>
                                    </a>
                                    &nbsp; &nbsp;
                                    <a href=\"https://twitter.com/GomeshAgrawal\" target=\"_blank\">
                                      <i class=\"fa fa-twitter\"></i>
                                    </a>
                                    &nbsp; &nbsp;
                                    <a href=\"https://plus.google.com/u/0/105324078702800518193\" target=\"_blank\">
                                      <i class=\"fa fa-google-plus\"></i>
                                    </a>
                           </div>
                          </nav>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
              <div class=\"col sqs-col-1 span-1\">
                <div id=\"block-yui_3_17_2_8_1459652186409_18865\" class=\"sqs-block spacer-block sqs-block-spacer sized vsize-1\">
                  <div class=\"sqs-block-content\"></div>
                </div>
              </div>
                  </div>
                </div>
            <div class=\"col sqs-col-6 span-6\" id=\"yui_3_17_2_1_1495022599647_263\">
              <div id=\"block-202295144d5dec4e309e\" class=\"sqs-block form-block sqs-block-form\">
                <div class=\"sqs-block-content\">
                  <div class=\"form-wrapper\">
                    <div class=\"form-inner-wrapper\">
                        <form{{ attributes }}>
                            {{ children }}
                            <div class=\"frominghting\">
                              {{ form.mail }}
                            </div>
                            <div class=\"message\">
                              {{ form.message }}
                            </div>
                            <div class=\"actions\">
                              {{ form.actions }}
                            </div>
                              {{ form|without('mail','message','actions') }}
                        </form>
                    </div>
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
                <ul class=\"menu nav navbar-nav mobile\">
                    {% set items = simplify_menu('footer') %}
                      {% for menu_item in items.menu_tree %}
                        <li><a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a></li>
                    {% endfor %}
                </ul>
                <ul class=\"menu nav navbar-nav desktop\">
                    {% set items = simplify_menu('footer') %}
                      {% for menu_item in items.menu_tree %}
                        <li><a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a></li>
                    {% endfor %}
                </ul>
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
