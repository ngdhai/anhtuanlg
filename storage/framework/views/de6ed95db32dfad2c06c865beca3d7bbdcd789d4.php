<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <?php $__currentLoopData = $itemsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e($itemData['original_link']); ?></loc>
            <lastmod><?php echo e($itemData['updated_at']); ?></lastmod>
            <?php if(!empty($itemData['multilanguage_links'] )): ?>
                <?php $__currentLoopData = $itemData['multilanguage_links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <xhtml:link
                        rel="alternate"
                        hreflang="<?php echo e($locale); ?>"
                        href="<?php echo e($link); ?>"/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>

<?php /**PATH /home/u943322177/domains/anhtuanlogistics.com/public_html/src/MicroweberPackages/App/Http/Controllers/../../resources/views/sitemap/items.blade.php ENDPATH**/ ?>