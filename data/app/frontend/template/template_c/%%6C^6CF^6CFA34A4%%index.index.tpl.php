<?php /* Smarty version 2.6.21, created on 2014-11-03 20:44:18
         compiled from index.index.tpl */ ?>
<div class="our-mission" id="team">
    <div class="wrap">
        <div id="ca-container" class="ca-container">
            <div class="ca-wrapper">
                <?php $_from = $this->_tpl_vars['tours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tours']):
?>
                    <div class="ca-item">
                        <div class="ca-item-main">
                            <div style="width: 200px; height: 200px; display: block; position: relative;
                                    margin: 0 auto; background: transparent url(<?php echo $this->_tpl_vars['tours']->image->thumb(true,200,200,5); ?>
)
                                    no-repeat center center; border-radius: 50%;">
                            </div>
                            <h3><?php echo $this->_tpl_vars['tours']->name->get(); ?>
</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span><?php echo $this->_tpl_vars['tours']->descriptionShort->get(); ?>
</span>
                            </h4>
                            <a href="#" class="ca-more">+</a>
                        </div>
                        <div class="ca-content-wrapper">
                            <div class="ca-content">
                                <h6><?php echo $this->_tpl_vars['tours']->nameShort->get(); ?>
</h6>
                                <a href="#" class="ca-close">close</a>
                                <div class="ca-content-text">
                                    <p><?php echo $this->_tpl_vars['tours']->text->get(); ?>
</p>
                                </div>
                                <ul>
                                    <li><a href="#">Read more</a></li>
                                    <li><a href="#">Share this</a></li>
                                    <li><a href="#">Become a member</a></li>
                                    <li><a href="#">Donate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>



    <!-- the jScrollPane script -->
    <script type="text/javascript">
        $('#ca-container').contentcarousel();
    </script>
    </div>
</div>
