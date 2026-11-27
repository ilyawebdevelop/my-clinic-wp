<?php
if (!empty(carbon_get_the_post_meta('serv_advice_title'))) {
?>
  <section class="advice sect border-b-gray">
    <div class="container">
      <h2 class="h2 h2--lg mb-2 d-block d-lg-none">
        <?php echo carbon_get_the_post_meta('serv_advice_title'); ?>
      </h2>
      <div class="grid-12 align-center">
        <div class="col-lg-6">
          <div class="adviceImg">
            <img src="<?php echo carbon_get_the_post_meta('serv_advice_image'); ?>" alt="image">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="adviceContent">
            <h2 class="h2 h2--lg mb-4 d-none d-lg-block">
              <?php echo carbon_get_the_post_meta('serv_advice_title'); ?>
            </h2>
            <div class="dirDescr text-cursive">
              <?php echo carbon_get_the_post_meta('serv_advice_descr'); ?>
            </div>
            <div class="dirName">
              <?php echo carbon_get_the_post_meta('serv_advice_fio'); ?>
            </div>
            <div class="dirWorkList">
              <ul>

                <?php $items = carbon_get_the_post_meta('serv_advice_list'); ?>
                <?php foreach ($items as $item) : ?>
                  <li><?php echo $item['text']; ?></li>
                <?php endforeach; ?>

              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
<?php
}
?>