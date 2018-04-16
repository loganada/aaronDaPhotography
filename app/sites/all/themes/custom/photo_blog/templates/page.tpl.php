<div class="site-container">

    <div class="gradient-overlay">
    </div>
    <!--slideshow-->
    <div class="slideshow region">
        <?php if($page['slideshow']): ?>
            <div class="slideshow-inner">
                <?php print render($page['slideshow']); ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- header -->
    <div class="header-wrapper">

    </div>
    <!-- site title -->
    <div class="site-title-container">
        <div class="site-title">
            <p>Aaron Da Photography</p>
        </div>
    </div>
    <!-- content -->
    <div class="content-container container">

      <div class="above-content column region left <?php print $variables["photo_blog"]["column_class"]?>">
          <?php if($page['above_content']): ?>
              <div class="above-content-inner">
                  <?php print render($page['above_content']); ?>
              </div>
          <?php endif; ?>
      </div>
        <!-- <div class="menu-container inner-container">
            <?php
                //print theme('links',array('links'=>$main_menu));
            ?>
        </div> -->

        <!--view and edit-->
        <!-- tabs will go here -->
        <div class="tab-container container">
            <?php if ($tabs): ?>
                  <?php print render($tabs); ?>
            <?php endif; ?>
        </div>

        <div class="content inner-container clearfix">
          <div class="left-column column region left <?php print $variables["photo_blog"]["column_class"]?>">
              <?php if($page['left_column']): ?>
                  <div class="left-column-inner">
                      <?php print render($page['left_column']); ?>
                  </div>
              <?php endif; ?>
          </div>

            <div class="main-content left <?php print $variables["photo_blog"]["body_class"]?>">
                <div class="content">

                    <!-- messages will go here -->
                    <?php if ($messages): ?>
                        <div id="messages">
                            <div class="section clearfix">
                                <?php print $messages; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                  <?php print render($page['content']); ?>
                </div>
            </div>
            <div class="right-column column region left <?php print $variables["photo_blog"]["column_class"]?>">
                <?php if($page['right_column']): ?>
                    <div class="right-column-inner">
                        <?php print render($page['right_column']); ?>
                    </div>
                <?php endif; ?>
            </div>


        </div>
    </div>

    <!-- footer -->
    <div class="footer-container container">
        <?php if($page['footer']): ?>
            <div class="footer-content inner-container">
                <?php print render($page['footer']); ?>
            </div>
        <?php endif; ?>
    </div>

</div>
