<section class="tags sect">
  <div class="marquee-wrapper">

    <ul class="d-flex gap-3 tags-list marquee-content">

      <?php $items = carbon_get_the_post_meta('main_tags_items'); ?>
      <?php foreach ($items as $item) : ?>
        <li>
          <a class="button button--brand-100 fz-20 fz-lg-14 text-no-uppercase text-brand-700 px-24" href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
        </li>
      <?php endforeach; ?>

    </ul>
    <ul class="d-flex gap-3 tags-list marquee-content">
      <?php $items = carbon_get_the_post_meta('main_tags_items'); ?>
      <?php foreach ($items as $item) : ?>
        <li>
          <a class="button button--brand-100 fz-20 fz-lg-14 text-no-uppercase text-brand-700 px-24" href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
        </li>
      <?php endforeach; ?>

    </ul>

  </div>
</section>