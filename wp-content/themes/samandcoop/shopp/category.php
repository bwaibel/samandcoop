<?php if(shopp('category','hasproducts','load=prices,images')): ?>
<?php while(shopp('category','products')): ?>
<p class="product">
    <?php shopp('product','coverimage', 'width=200&height=200'); ?>
    <br>
    <span href="<?php shopp('product','url'); ?>" class="title"><?php shopp('product','name'); ?></span>
</p>
<?php endwhile; ?>
<?php endif; ?>
<!--
<?php if(shopp('category','hasproducts','load=prices,images')): ?>
    <div class="category">
        <?php shopp('catalog','breadcrumb'); ?>

        <h3><?php shopp('category','name'); ?></h3>
        <?php shopp('catalog','views','label=Views: '); ?>

        <p><?php shopp('category','subcategory-list','hierarchy=true&showall=true&class=subcategories&dropdown=1'); ?></p>

        <?php shopp('catalog','orderby-list','dropdown=on'); ?>
        <div class="alignright"><?php shopp('category','pagination','show=10'); ?></div>


        <ul class="products">
            <li class="row"><ul>
                <?php while(shopp('category','products')): ?>
                    <?php if(shopp('category','row')): ?></ul></li><li class="row"><ul><?php endif; ?>
                        <li class="product">
                            <div class="frame">
                                <a href="<?php shopp('product','url'); ?>"><?php shopp('product','coverimage'); ?></a>
                                <div class="details">
                                    <h4 class="name"><a href="<?php shopp('product','url'); ?>"><?php shopp('product','name'); ?></a></h4>
                                    <p class="price"><?php shopp('product','saleprice','starting=from'); ?> </p>
                                    <?php if (shopp('product','has-savings')): ?>
                                        <p class="savings">Save <?php shopp('product','savings','show=percent'); ?></p>
                                    <?php endif; ?>

                                    <div class="listview">
                                        <p><?php shopp('product','summary'); ?></p>
                                        <form action="<?php shopp('cart','url'); ?>" method="post" class="shopp product">
                                            <?php shopp('product','addtocart'); ?>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul></li>
            </ul>

            <div class="alignright"><?php shopp('category','pagination'); ?></div>

        </div>
        <?php else: ?>
            <?php if (!shopp('catalog','is-landing')): ?>
                <?php shopp('catalog','breadcrumb'); ?>
                <h3><?php shopp('category','name'); ?></h3>
                <p>No products were found.</p>
            <?php endif; ?>
        <?php endif; ?>
-->