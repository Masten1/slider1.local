<div class="our-mission" id="team">
    <div class="wrap">
        <div id="ca-container" class="ca-container">
            <div class="ca-wrapper">
                {foreach from=$tours item=tours}
                    <div class="ca-item">
                        <div class="ca-item-main">
                            <div style="width: 200px; height: 200px; display: block; position: relative;
                                    margin: 0 auto; background: transparent url({$tours->image->thumb(true, 200, 200, 5)})
                                    no-repeat center center; border-radius: 50%;">
                            </div>
                            <h3>{$tours->name->get()}</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>{$tours->descriptionShort->get()}</span>
                            </h4>
                            <a href="#" class="ca-more">+</a>
                        </div>
                        <div class="ca-content-wrapper">
                            <div class="ca-content">
                                <h6>{$tours->nameShort->get()}</h6>
                                <a href="#" class="ca-close">close</a>
                                <div class="ca-content-text">
                                    <p>{$tours->text->get()}</p>
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
                {/foreach}
            </div>
        </div>



    <!-- the jScrollPane script -->
    <script type="text/javascript">
        $('#ca-container').contentcarousel();
    </script>
    </div>
</div>

