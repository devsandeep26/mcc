<?php if(count($errors) > 0):?>
<style>
    .error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	text-align: left;
	border-radius: 5px;
}
    </style>
    <div class="error">
    <?php foreach ($errors as $error): ?>
        <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>