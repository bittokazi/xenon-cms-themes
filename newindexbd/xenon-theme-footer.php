	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_w200 float_l">
		<?php
            show_xenon_widget('footer-bar-left',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
'before_content' => '<ul class="tooplate_list">',
'after_content' => '</ul>'
)); ?>
        </div>
        <div class="col_w200 float_l">
        	<?php
            show_xenon_widget('footer-bar-left-center',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
'before_content' => '<ul class="tooplate_list">',
'after_content' => '</ul>'
)); ?>
        </div>
		<div class="col_w200 float_l">
        	<?php
            show_xenon_widget('footer-bar-right-center',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
'before_content' => '<ul class="tooplate_list">',
'after_content' => '</ul>'
)); ?>
        </div>
        <div class="col_w200 float_r col_last">
        	<?php
            show_xenon_widget('footer-bar-right',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
'before_content' => '<ul class="tooplate_list">',
'after_content' => '</ul>'
)); ?>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
	
    	Copyright © <?php echo date("Y") ?> <a href="#" style="text-decoration:none;">New Index BD</a><br>
		Developed By <a href="http://www.weecommltd.com" target="_blank" style="text-decoration:none;">Weecomm Limited</a>
		
    </div>
</div>
</body>
</html>