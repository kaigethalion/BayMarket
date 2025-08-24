
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/6.jpg)">
		<div class="pattern-layer" style="background-image: url(images/background/pattern-7.png)"></div>
    	<div class="auto-container">
			<h2><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></h2>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->